<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
$dbFile = __DIR__ . '/quiz.sqlite';
try {
  $db = new PDO('sqlite:' . $dbFile);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("CREATE TABLE IF NOT EXISTS answers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    team INTEGER NOT NULL CHECK(team IN (1,2)),
    round INTEGER NOT NULL CHECK(round IN (1,2,3)),
    section TEXT NOT NULL,
    question INTEGER NOT NULL,
    answer INTEGER NOT NULL,
    correct INTEGER NOT NULL DEFAULT 0,
    updated_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE(team, round, section, question)
  )");
  $action = $_GET['action'] ?? '';
  if ($action === 'submit' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $d = json_decode(file_get_contents('php://input'), true) ?: [];
    $team=(int)($d['team']??0); $round=(int)($d['round']??0);
    $section=(string)($d['section']??''); $q=(int)($d['question']??-1); $a=(int)($d['answer']??-1);
    if (!in_array($team,[1,2],true) || !in_array($round,[1,2,3],true) || $section==='' || $q<0 || $a<0 || $a>3) {
      http_response_code(400); echo json_encode(['ok'=>false,'error'=>'Invalid answer']); exit;
    }
    $st=$db->prepare("INSERT INTO answers(team,round,section,question,answer,correct,updated_at) VALUES(?,?,?,?,?,?,CURRENT_TIMESTAMP)
      ON CONFLICT(team,round,section,question) DO UPDATE SET answer=excluded.answer,correct=excluded.correct,updated_at=CURRENT_TIMESTAMP");
    $st->execute([$team,$round,$section,$q,$a,!empty($d['correct'])?1:0]);
    echo json_encode(['ok'=>true]); exit;
  }
  if ($action === 'results') {
    $rows=$db->query('SELECT team,round,section,question,answer,correct,updated_at FROM answers ORDER BY round,section,question,team')->fetchAll(PDO::FETCH_ASSOC);
    $scores=[1=>0,2=>0]; foreach($rows as $r){$scores[(int)$r['team']]+=(int)$r['correct'];}
    echo json_encode(['ok'=>true,'answers'=>$rows,'scores'=>$scores],JSON_UNESCAPED_UNICODE); exit;
  }
  http_response_code(404); echo json_encode(['ok'=>false,'error'=>'Unknown action']);
} catch(Throwable $e) { http_response_code(500); echo json_encode(['ok'=>false,'error'=>'Database error. Check PHP SQLite extension.']); }
?>
