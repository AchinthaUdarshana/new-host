<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>SCIENTERA 2026 | Science Day</title>
<style>
  * { box-sizing: border-box; }
  html, body { margin: 0; width: 100%; min-height: 100%; }
  body {
    min-height: 100vh; overflow: hidden; display: grid; place-items: center;
    color: #f5f7ff; background:
      radial-gradient(ellipse at 50% 42%, rgba(37,83,160,.25), transparent 42%),
      radial-gradient(ellipse at 15% 15%, rgba(108,45,160,.16), transparent 35%),
      linear-gradient(135deg, #050816 0%, #080d22 52%, #030611 100%);
    font-family: Inter, "Segoe UI", Arial, sans-serif;
  }
  .stars, .stars::before, .stars::after {
    position: fixed; inset: 0; content: ""; pointer-events: none;
    background-image:
      radial-gradient(1px 1px at 12% 20%, #fff 98%, transparent),
      radial-gradient(1px 1px at 78% 16%, #b9d7ff 98%, transparent),
      radial-gradient(1.5px 1.5px at 35% 72%, #fff 98%, transparent),
      radial-gradient(1px 1px at 88% 68%, #d8c7ff 98%, transparent),
      radial-gradient(1px 1px at 60% 88%, #fff 98%, transparent),
      radial-gradient(1px 1px at 22% 90%, #9fc8ff 98%, transparent);
    opacity: .55; animation: twinkle 4s ease-in-out infinite alternate;
  }
  .stars::before { transform: translate(22px, 13px) scale(1.2); opacity: .45; }
  .stars::after { transform: translate(-18px, -10px) scale(.8); opacity: .5; }
  .loader {
    position: relative; z-index: 1; width: min(90vw, 440px);
    display: flex; flex-direction: column; align-items: center; text-align: center;
    animation: rise .9s cubic-bezier(.2,.8,.2,1) both;
  }
  .logo-wrap {
    width: clamp(190px, 42vw, 270px); aspect-ratio: 1; border-radius: 50%;
    display: grid; place-items: center; position: relative;
    background: rgba(255,255,255,.96); padding: 12px;
    box-shadow: 0 0 0 1px rgba(255,255,255,.22),
      0 0 38px rgba(255,203,50,.23), 0 0 100px rgba(70,130,255,.18);
    animation: logoGlow 2.8s ease-in-out infinite;
  }
  .logo-wrap::before {
    content: ""; position: absolute; inset: -12px; border-radius: 50%;
    border: 1px solid rgba(150,190,255,.35);
    border-top-color: rgba(255,211,94,.9);
    animation: spin 7s linear infinite;
  }
  .logo { width: 100%; height: 100%; object-fit: contain; border-radius: 50%; }
  .eyebrow {
    margin-top: 34px; color: #9bb8ee; font-size: 11px; letter-spacing: .34em;
    text-transform: uppercase; font-weight: 700;
  }
  h1 {
    margin: 10px 0 0; font-size: clamp(25px, 5vw, 36px); letter-spacing: .09em;
    font-weight: 800; text-shadow: 0 0 24px rgba(95,155,255,.35);
  }
  .sub { margin: 9px 0 24px; color: #aab5ce; font-size: 13px; letter-spacing: .12em; }
  .loading-progress { width: min(70vw, 250px); height: 3px; border-radius: 99px; overflow: hidden; background: rgba(255,255,255,.13); }
  .loading-bar { height: 100%; width: 0; border-radius: inherit; background: linear-gradient(90deg,#e8b94f,#fff1b4,#8ebdff); animation: load 3.4s ease forwards; box-shadow: 0 0 12px #e9c56c; }
  .status { margin-top: 12px; color: #7889aa; font-size: 10px; letter-spacing: .22em; text-transform: uppercase; }
  .loader.fade-out { animation: fadeAway .85s ease forwards; }
  .after { position: fixed; inset: 0; display: grid; place-items: center; opacity: 0; pointer-events: none; transition: opacity .8s ease; text-align: center; padding: 24px; }
  .after.show { opacity: 1; }
  .after h2 { font-size: clamp(24px,5vw,42px); letter-spacing: .08em; margin: 0; }
  .after p { color: #9eabc4; letter-spacing: .16em; font-size: 12px; }
  @keyframes load { to { width: 100%; } }
  @keyframes spin { to { transform: rotate(360deg); } }
  @keyframes twinkle { from { opacity: .28; } to { opacity: .72; } }
  @keyframes logoGlow { 0%,100% { transform: scale(1); } 50% { transform: scale(1.025); } }
  @keyframes rise { from { opacity: 0; transform: translateY(18px) scale(.97); } to { opacity: 1; transform: translateY(0) scale(1); } }
  @keyframes fadeAway { to { opacity: 0; transform: translateY(-12px) scale(1.04); visibility: hidden; } }
  @media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; }
  }


:root{--bg:#050918;--panel:#101a31;--line:#263b60;--cyan:#64dcff;--gold:#ffd36a;--muted:#a8b6d2}
*{box-sizing:border-box}body{margin:0;min-height:100vh;color:#f5f7ff;font-family:Segoe UI,Arial,sans-serif;background:radial-gradient(ellipse at 50% 0%,#142b52 0%,transparent 52%),linear-gradient(145deg,#050918,#090d20 60%,#030611)}
button{font:inherit;cursor:pointer}.top{display:flex;align-items:center;justify-content:space-between;padding:16px clamp(16px,4vw,48px);border-bottom:1px solid #ffffff18;background:#050918aa;backdrop-filter:blur(12px)}
.brand{display:flex;align-items:center;gap:12px}.brand img{width:54px;height:54px;object-fit:contain;background:#fff;border-radius:50%;padding:3px}.brand strong{letter-spacing:.1em}.brand small{display:block;color:var(--muted);font-size:11px;margin-top:4px;letter-spacing:.12em}
main{width:min(1100px,92vw);margin:38px auto 70px}.eyebrow{text-align:center;color:var(--cyan);font-size:11px;letter-spacing:.28em;font-weight:700}.heading{text-align:center;font-size:clamp(28px,5vw,46px);margin:10px 0 8px}.intro{text-align:center;color:var(--muted);margin:0 0 30px}
.subjects{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px}.subject{min-height:155px;text-align:left;padding:24px;border:1px solid var(--line);border-radius:18px;background:linear-gradient(145deg,#14213b,#0b1428);color:white;transition:.2s;position:relative;overflow:hidden}.subject:hover{transform:translateY(-4px);border-color:var(--cyan);box-shadow:0 12px 35px #0006}.subject .num{color:var(--gold);font-size:12px;letter-spacing:.15em}.subject h2{font-size:clamp(19px,3vw,26px);margin:12px 0 6px}.subject p{color:var(--muted);margin:0;font-size:13px}.subject .arrow{position:absolute;right:22px;bottom:18px;color:var(--cyan);font-size:24px}
.quiz{display:none}.quiz-head{display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:20px}.back{border:1px solid var(--line);background:#101a31;color:#fff;border-radius:10px;padding:10px 15px}.back:hover{border-color:var(--cyan)}.subject-name{font-size:clamp(20px,3vw,28px);font-weight:750}
.quiz-layout{display:grid;grid-template-columns:minmax(0,1fr) 210px;gap:18px;align-items:start}.question-card,.timer-card{background:linear-gradient(145deg,#111e38,#0b1428);border:1px solid var(--line);border-radius:18px;padding:24px}.q-meta{display:flex;justify-content:space-between;color:var(--muted);font-size:13px}.progress{height:6px;background:#26344f;border-radius:20px;margin:15px 0 25px;overflow:hidden}.progress span{display:block;height:100%;width:20%;background:linear-gradient(90deg,var(--cyan),#8c9bff);transition:width .25s}.question{font-size:clamp(19px,3vw,25px);line-height:1.5;margin:0 0 22px}.answers{display:grid;gap:11px}.answer{width:100%;text-align:left;padding:14px 16px;border:1px solid #304362;border-radius:12px;background:#0b152a;color:#edf3ff}.answer:hover{border-color:var(--cyan)}.answer.selected{border-color:var(--cyan);background:#12304a}.answer.correct{border-color:#50d49b;background:#103329}.answer.wrong{border-color:#ff8585;background:#3b202b}.actions{display:flex;justify-content:flex-end;margin-top:22px}.next{border:0;border-radius:10px;padding:12px 22px;background:linear-gradient(90deg,#2e9fc4,#586fe0);color:white;font-weight:700}.next:disabled{opacity:.4;cursor:not-allowed}
#round3Grid .subject{min-height:76px;text-align:center;padding:18px;font-size:24px;font-weight:800}
#round3Grid .subject.done{background:linear-gradient(145deg,#104331,#0b2b24);border-color:#50d49b;color:#8ff0c0;cursor:not-allowed;opacity:.85}
#round3Grid .subject.incorrect{background:linear-gradient(145deg,#5a202b,#35131d);border-color:#ff6878;color:#ffd0d5;cursor:not-allowed;opacity:1}
#round3Grid .subject:disabled{transform:none;box-shadow:none}
#round3Grid .subject.current{border-color:var(--cyan);box-shadow:0 0 0 2px #39c5e733}
@media(max-width:700px){#round3Grid.subjects{grid-template-columns:repeat(3,minmax(0,1fr))!important}}
.timer-card{text-align:centser;position:sticky;top:20px}.timer-label{font-size:11px;color:var(--muted);letter-spacing:.2em}.timer{font-size:48px;font-weight:800;color:var(--gold);font-variant-numeric:tabular-nums;margin:12px 0 4px}.timer-note{font-size:12px;color:var(--muted);line-height:1.5}.timer.warning .timer{color:#ff8888}.result{text-align:center;display:none;padding:40px 20px;border:1px solid var(--line);border-radius:18px;background:#101a31}.result h2{font-size:32px}.result .score{font-size:48px;color:var(--gold);font-weight:800}.result button{margin:8px}
@media(max-width:700px){.subjects{grid-template-columns:1fr}.quiz-layout{grid-template-columns:1fr}.timer-card{position:static;order:-1;padding:12px;display:flex;align-items:center;justify-content:space-between;text-align:left}.timer{font-size:30px;margin:0}.timer-note{text-align:right}.question-card{padding:18px}.top{padding:12px 4vw}}

#app{width:100%;min-height:100vh} body.app-active{display:block;overflow:auto;place-items:initial}

/* === DEEP SPACE / ASTRO EXPERIENCE === */
:root{
 --space-cyan:#70e7ff;--space-violet:#a78bfa;--space-blue:#579cff;
 --space-gold:#ffe39a;--space-glass:rgba(11,20,48,.76);
}
html{scroll-behavior:smooth}
body{
 background:
  radial-gradient(ellipse at 14% 18%,rgba(89,64,190,.28),transparent 34%),
  radial-gradient(ellipse at 82% 22%,rgba(20,145,205,.20),transparent 31%),
  radial-gradient(ellipse at 50% 100%,rgba(80,44,150,.22),transparent 42%),
  linear-gradient(135deg,#02040e 0%,#070d22 48%,#030611 100%) !important;
 background-attachment:fixed !important;
}
body:before,body:after{
 content:"";position:fixed;inset:-20%;pointer-events:none;z-index:0;
}
body:before{
 background:
  radial-gradient(ellipse at 20% 30%,rgba(101,73,220,.13),transparent 25%),
  radial-gradient(ellipse at 75% 60%,rgba(36,175,220,.12),transparent 28%),
  radial-gradient(ellipse at 48% 80%,rgba(120,75,190,.10),transparent 30%);
 filter:blur(26px);animation:nebulaDrift 24s ease-in-out infinite alternate;
}
body:after{
 opacity:.36;
 background-image:
  radial-gradient(1px 1px at 8% 12%,#fff 99%,transparent),
  radial-gradient(2px 2px at 18% 76%,#9bdcff 99%,transparent),
  radial-gradient(1px 1px at 31% 34%,#fff 99%,transparent),
  radial-gradient(1px 1px at 47% 82%,#d5c5ff 99%,transparent),
  radial-gradient(2px 2px at 69% 17%,#fff 99%,transparent),
  radial-gradient(1px 1px at 88% 57%,#9bdcff 99%,transparent),
  radial-gradient(1px 1px at 95% 91%,#fff 99%,transparent);
 background-size:390px 330px;animation:starDrift 75s linear infinite;
}
.stars{z-index:0;opacity:.7}
#app,.loader,.top,main,.after{position:relative;z-index:1}
#app{isolation:isolate}
@keyframes nebulaDrift{0%{transform:translate3d(-2%,1%,0) scale(1)}100%{transform:translate3d(3%,-2%,0) scale(1.12)}}
@keyframes starDrift{from{transform:translateY(0)}to{transform:translateY(-330px)}}
@keyframes shootingStar{
  0%{transform:translate3d(0,0,0) rotate(-28deg);opacity:0}
  8%{opacity:1}35%{opacity:0}
  100%{transform:translate3d(-560px,330px,0) rotate(-28deg);opacity:0}
}
#app:before,#app:after{
 content:"";position:fixed;pointer-events:none;z-index:-1;width:2px;height:2px;
 top:13%;right:7%;border-radius:50%;background:#fff;
 box-shadow:0 0 8px 2px #9bdcff,0 0 24px 5px #4d8dff;
 animation:shootingStar 8s linear infinite;
}
#app:after{top:58%;right:22%;animation-delay:4.5s;animation-duration:10s;transform:scale(.7)}
.top{
 background:rgba(3,8,24,.72)!important;backdrop-filter:blur(18px);
 border-bottom:1px solid rgba(112,231,255,.24)!important;
 box-shadow:0 8px 35px rgba(0,0,0,.22);
}
.brand img{box-shadow:0 0 22px rgba(255,211,94,.35),0 0 0 1px #fff8}
.heading,.subject-name,.question{ text-shadow:0 0 24px rgba(91,179,255,.22)}
.subject,.question-card,.timer-card,.result{
 background:linear-gradient(145deg,rgba(20,35,70,.88),rgba(7,14,34,.88))!important;
 border:1px solid rgba(112,177,255,.28)!important;
 box-shadow:0 14px 40px rgba(0,0,0,.22),inset 0 1px rgba(255,255,255,.045);
 backdrop-filter:blur(12px);
}
.subject{transition:transform .35s cubic-bezier(.2,.8,.2,1),border-color .35s,box-shadow .35s}
.subject:before{
 content:"";position:absolute;inset:-1px;border-radius:inherit;pointer-events:none;
 background:linear-gradient(115deg,transparent 20%,rgba(112,231,255,.10),transparent 62%);
 transform:translateX(-120%);transition:transform .7s ease;
}
.subject:hover:before{transform:translateX(120%)}
.subject:hover{
 transform:translateY(-7px) scale(1.015)!important;
 border-color:rgba(112,231,255,.8)!important;
 box-shadow:0 18px 48px rgba(25,120,220,.18),0 0 22px rgba(112,231,255,.10)!important;
}
.answer{
 transition:transform .22s ease,border-color .22s,background .22s,box-shadow .22s;
}
.answer:hover:not(:disabled){transform:translateX(5px);box-shadow:0 0 18px rgba(100,220,255,.12)}
.answer.selected{box-shadow:0 0 0 1px rgba(100,220,255,.25),0 0 22px rgba(100,220,255,.13)}
.next,.back,.subject,.answer{position:relative;overflow:hidden}
.next{box-shadow:0 7px 22px rgba(46,159,196,.2);transition:transform .2s,filter .2s}
.next:hover:not(:disabled){transform:translateY(-2px);filter:brightness(1.13)}
.timer-card{box-shadow:0 0 30px rgba(255,211,106,.06),inset 0 1px #ffffff0a}
.timer{ text-shadow:0 0 24px rgba(255,211,106,.28)}
.progress span{box-shadow:0 0 14px rgba(100,220,255,.55)}
.result{animation:resultRise .65s cubic-bezier(.2,.8,.2,1) both}
@keyframes resultRise{from{opacity:0;transform:translateY(18px) scale(.98)}to{opacity:1;transform:translateY(0) scale(1)}}
@media(prefers-reduced-motion:reduce){
 *,*:before,*:after{animation-duration:.01ms!important;animation-iteration-count:1!important;scroll-behavior:auto!important;transition-duration:.01ms!important}
}

</style>
<style>
    .separate-page-nav{display:flex;justify-content:center;gap:10px;flex-wrap:wrap;margin:26px auto 10px}
    .separate-page-nav a{display:inline-block;padding:10px 16px;border:1px solid rgba(130,170,255,.35);
      border-radius:999px;color:#dce8ff;text-decoration:none;font-size:12px;font-weight:800;
      letter-spacing:1px;background:rgba(20,35,70,.65);transition:.25s}
    .separate-page-nav a:hover{transform:translateY(-3px);border-color:#80b7ff;box-shadow:0 0 18px #477dff55}
    

/* Compact round navigation */
.top{gap:18px;flex-wrap:wrap}
.round-nav{display:flex;align-items:center;justify-content:center;gap:8px;flex-wrap:wrap}
.round-nav-btn{padding:9px 15px;border:1px solid rgba(120,180,255,.38);border-radius:999px;background:rgba(16,31,62,.78);color:#dceaff;font-size:11px;font-weight:850;letter-spacing:1.1px;transition:all .22s ease}
.round-nav-btn:hover{transform:translateY(-2px);border-color:#70e7ff;box-shadow:0 0 18px #4aaeff35}
.round-nav-btn.active{color:#061526;background:linear-gradient(100deg,#70e7ff,#9cb4ff);border-color:transparent;box-shadow:0 0 18px #70e7ff45}
.round2-launch,.round3-launch{display:none!important}
@media(max-width:560px){.top{justify-content:center}.brand{width:100%;justify-content:center}.round-nav{width:100%}.round-nav-btn{flex:1;max-width:112px;padding:9px 8px}}

/* Centered round headings; Round 2 has its own visual identity */
.round-page-head{position:relative;display:flex;align-items:center;justify-content:center;min-height:112px;margin:0 0 24px;padding:12px 110px}
.round-heading{text-align:center;width:100%}
.round-heading .subject-name{font-size:clamp(27px,4.5vw,38px);font-weight:900;letter-spacing:.02em}
.round-kicker{display:inline-block;margin-bottom:8px;font-size:10px;font-weight:900;letter-spacing:.24em;color:#70e7ff}
.round-subtitle{display:block;margin-top:7px;color:#aebcda;font-size:13px}
.round-back{position:absolute;left:0;top:50%;transform:translateY(-50%)}
.round-two-head .round-heading{padding:16px 22px;border:1px solid rgba(255,211,106,.35);border-radius:20px;
 background:linear-gradient(110deg,rgba(76,43,105,.42),rgba(18,38,76,.68),rgba(92,65,30,.32));
 box-shadow:0 10px 32px rgba(0,0,0,.2),inset 0 1px rgba(255,255,255,.08)}
.round-two-head .round-kicker{color:#ffd36a}
.round-two-head .subject-name{color:#fff1c7;text-shadow:0 0 22px rgba(255,190,80,.28)}
.round-two-head .round-subtitle{color:#d7c7a5}
#round2Subjects .subject{border-color:rgba(255,211,106,.28);
 background:linear-gradient(135deg,rgba(57,39,83,.94),rgba(17,27,54,.96))!important}
#round2Subjects .subject .num{color:#ffd36a}
#round2Subjects .subject .arrow{color:#ffd36a}
#round2Subjects .subject:hover{border-color:#ffd36a!important;box-shadow:0 16px 42px rgba(180,125,45,.18)!important}
.round-three-head .round-heading{padding:12px 20px}
.round-three-head .round-kicker{color:#70e7ff}
@media(max-width:560px){
 .round-page-head{min-height:125px;padding:58px 4px 8px;margin-bottom:18px}
 .round-back{top:0;left:0;transform:none}
 .round-two-head .round-heading{padding:13px 10px}
 .round-heading .subject-name{font-size:27px}
}

</style></head>
<body>
<div class="stars"></div>
<main aria-label="Loading Science Day website" class="loader" id="loader">
<div class="logo-wrap">
<img alt="School emblem" class="logo" src="C:\Users\Lapmart.lk\Desktop\New folder (3)\unnamed.jpg"/>
</div>
<div class="eyebrow">Welcome to</div>
<h1>SCIENTRA 2026</h1>
<p class="sub">A JOURNEY INTO DISCOVERY</p>
<div class="loading-progress"><div class="loading-bar"></div></div>
<div class="status">Preparing your experience</div>
</main>
<div id="app" style="display:none;min-height:100vh;overflow:auto;">
<header class="top">
<div class="brand"><img alt="පාසල් ලාංඡනය" src="C:\Users\Lapmart.lk\Downloads\New folder\unnamed.jpg"><div><strong>SCIENCE DAY 2026</strong><small>KNOWLEDGE • DISCOVERY • INNOVATION</small></div></div>
<nav class="round-nav" aria-label="Round navigation">
<button type="button" class="round-nav-btn active" data-round="round1" onclick="requestAdminAccess('round1')">ROUND 1</button>
<button type="button" class="round-nav-btn" data-round="round2" onclick="requestAdminAccess('round2')">ROUND 2</button>
<button type="button" class="round-nav-btn" data-round="round3" onclick="requestAdminAccess('round3')">ROUND 3</button>
</nav>
</header>
<main>
<section id="home">
<div class="eyebrow">SCIENCE DAY • 2026</div><h1 class="heading">පළමු වටය</h1><p class="intro">ඔබට අවශ්‍ය විෂය තෝරා ප්‍රශ්න 5ට පිළිතුරු සපයන්න.</p>
<div class="subjects">
<button class="subject" onclick="startQuiz('chem')"><span class="num">SUBJECT 01</span><h2>රසායනික විද්‍යාව</h2><p>ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
<button class="subject" onclick="startQuiz('physics')"><span class="num">SUBJECT 02</span><h2>භෞතික විද්‍යාව</h2><p>ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
<button class="subject" onclick="startQuiz('bio')"><span class="num">SUBJECT 03</span><h2>ජීව විද්‍යාව</h2><p>ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
<button class="subject" onclick="startQuiz('math')"><span class="num">SUBJECT 04</span><h2>සංයුක්ත ගණිතය</h2><p>ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
</div>


</section>
<section id="roundTwo" style="display:none">
<div class="round-page-head round-two-head">
<div class="round-heading"><span class="round-kicker">ROUND 02 • NEXT CHALLENGE</span><div class="subject-name">දෙවන වටය</div><span class="round-subtitle">දැනුම තවත් පියවරක් ඉදිරියට</span></div>
<button class="back round-back" onclick="goHome()">← ආපසු</button>
</div>
<div class="subjects" id="round2Subjects">
<button class="subject" onclick="startRound2Quiz('chem')"><span class="num">SUBJECT 01</span><h2>රසායනික විද්‍යාව</h2><p>අලුත් ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
<button class="subject" onclick="startRound2Quiz('physics')"><span class="num">SUBJECT 02</span><h2>භෞතික විද්‍යාව</h2><p>අලුත් ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
<button class="subject" onclick="startRound2Quiz('bio')"><span class="num">SUBJECT 03</span><h2>ජීව විද්‍යාව</h2><p>අලුත් ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
<button class="subject" onclick="startRound2Quiz('math')"><span class="num">SUBJECT 04</span><h2>සංයුක්ත ගණිතය</h2><p>අලුත් ප්‍රශ්න 05ක්</p><span class="arrow">↗</span></button>
</div>

<div id="round2Quiz" style="display:none">
<div class="quiz-head"><button class="back" onclick="showRound2Subjects()">← විෂයන්ට ආපසු</button><div class="subject-name" id="round2SubjectName"></div></div>
<div class="quiz-layout"><div class="question-card"><div class="q-meta"><span id="round2Count">ප්‍රශ්නය 1 / 5</span><span id="round2Answered">පිළිතුරක් තෝරන්න</span></div><div class="progress"><span id="round2Progress"></span></div><h2 class="question" id="round2QuestionText"></h2><div class="answers" id="round2Answers"></div><div class="actions"><button class="next" disabled="" id="round2Next" onclick="nextRound2Question()">ඊළඟ ප්‍රශ්නය →</button></div></div>
<aside class="timer-card" id="round2TimerCard"><div><div class="timer-label">TIME LEFT</div><div class="timer" id="round2Timer">01:00</div></div><div class="timer-note">සෑම තත්පරයකම<br/>කාලය අඩු වේ</div></aside></div>
</div>
<div class="result" id="round2Result" style="display:none"><div class="eyebrow">ROUND 02 COMPLETED</div><h2>ඔබේ ප්‍රතිඵලය</h2><div class="score" id="round2Score">0 / 5</div><p id="round2ResultText" style="color:#a8b6d2"></p><button class="back" onclick="showRound2Subjects()">විෂය තේරීමට ආපසු</button></div>
</section>
<section id="roundThree" style="display:none">
<div class="round-page-head round-three-head">
<div class="round-heading"><span class="round-kicker">ROUND 03 • FINAL CHALLENGE</span><div class="subject-name">තුන්වන වටය</div></div>
<button class="back round-back" onclick="goHome()">← ආපසු</button>
</div>
<p class="intro">අංකයක් තෝරා අදාළ ප්‍රශ්නයට පිළිතුරු සපයන්න. පිළිතුරු දුන් ප්‍රශ්නයක් නැවත තෝරාගත නොහැක.</p>
<div class="subjects" id="round3Grid" style="grid-template-columns:repeat(6,minmax(0,1fr));margin-bottom:20px"></div>
<div class="question-card" id="round3Question" style="display:none">
<div class="q-meta"><span id="round3Count">ප්‍රශ්නය</span><span id="round3Status">පිළිතුරක් තෝරන්න</span></div>
<h2 class="question" id="round3Text" style="margin-top:18px"></h2>
<div class="answers" id="round3Answers"></div><div class="actions"><button class="next" disabled="" id="round3Submit" onclick="submitRound3Answer()">පිළිතුර Submit කරන්න</button></div>
</div>
<div class="result" id="round3Done" style="display:none"><h2>තුන්වන වටය අවසන්!</h2><div class="score" id="round3Score">0 / 12</div><p style="color:#a8b6d2">සියලුම ප්‍රශ්නවලට පිළිතුරු ලබා දී ඇත.</p></div>
</section>
<section class="quiz" id="quiz">
<div class="quiz-head"><button class="back" onclick="goHome()">← ආපසු</button><div class="subject-name" id="subjectName"></div></div>
<div class="quiz-layout"><div class="question-card"><div class="q-meta"><span id="qCount">ප්‍රශ්නය 1 / 5</span><span id="answered">පිළිතුරක් තෝරන්න</span></div><div class="progress"><span id="progress"></span></div><h2 class="question" id="questionText"></h2><div class="answers" id="answers"></div><div class="actions"><button class="next" disabled="" id="nextBtn" onclick="nextQuestion()">ඊළඟ ප්‍රශ්නය →</button></div></div>
<aside class="timer-card" id="timerCard"><div><div class="timer-label">TIME LEFT</div><div class="timer" id="timer">01:00</div></div><div class="timer-note">සෑම තත්පරයකම<br/>කාලය අඩු වේ</div></aside></div>
</section>
<section class="result" id="result"><div class="eyebrow">ROUND COMPLETED</div><h2>ඔබේ ප්‍රතිඵලය</h2><div class="score" id="score">0 / 5</div><p id="resultText" style="color:#a8b6d2"></p><button class="back" onclick="goHome()">විෂය තේරීමට ආපසු</button></section>
</main>
<div aria-hidden="true" class="admin-modal" id="adminLogin">
<div class="admin-backdrop" onclick="closeAdminLogin()"></div>
<section aria-labelledby="adminTitle" aria-modal="true" class="admin-card" role="dialog">
<button aria-label="Close" class="admin-close" onclick="closeAdminLogin()" type="button">×</button>
<div class="admin-icon">🔐</div><div class="admin-kicker">RESTRICTED ACCESS</div>
<h2 id="adminTitle">Admin Login</h2>
<p>මෙම වටයට ඇතුළු වීමට Admin Password එක ඇතුළත් කරන්න.</p>
<form onsubmit="event.preventDefault();submitAdminLogin();">
<input aria-label="Admin password" autocomplete="current-password" id="adminPassword" placeholder="Enter admin password" type="password"/>
<div id="adminError" role="alert"></div>
<button class="admin-submit" type="submit">LOGIN <span>→</span></button>
</form>
</section>
</div>
<style>
.admin-modal{display:none;position:fixed;inset:0;z-index:10000;align-items:center;justify-content:center;padding:20px}
.admin-modal.show{display:flex}.admin-backdrop{position:absolute;inset:0;background:rgba(2,6,18,.86);backdrop-filter:blur(9px)}
.admin-card{position:relative;width:min(370px,94vw);padding:30px 25px 26px;text-align:center;border:1px solid rgba(100,220,255,.38);border-radius:23px;background:linear-gradient(155deg,#172744,#080f21);box-shadow:0 24px 80px #0009;color:#fff}
.admin-close{position:absolute;right:13px;top:8px;border:0;background:none;color:#dce6ff;font-size:27px}
.admin-icon{font-size:34px}.admin-kicker{margin-top:10px;color:#75dcff;font-size:10px;letter-spacing:2px;font-weight:800}
.admin-card h2{margin:8px 0;font-size:27px}.admin-card p{color:#aebbd4;font-size:13px;line-height:1.5}
.admin-card input{width:100%;margin:16px 0 8px;padding:14px;border-radius:11px;border:1px solid #395477;background:#09152b;color:white;outline:none}
.admin-card input:focus{border-color:#64dcff;box-shadow:0 0 0 3px #64dcff22}
.admin-submit{width:100%;padding:13px;border:0;border-radius:11px;background:linear-gradient(90deg,#168eb6,#586fe0);color:white;font-weight:800;letter-spacing:1px}
.admin-submit span{margin-left:8px}#adminError{min-height:19px;color:#ff8998;font-size:12px;margin-bottom:8px}
</style>
<footer class="dev-footer"><button onclick="openDeveloperProfile()" type="button">Developer by Achintha</button></footer>
<div aria-hidden="true" class="dev-modal" id="developerProfile">
<div class="dev-backdrop" onclick="closeDeveloperProfile()"></div>
<section aria-label="Developer profile" aria-modal="true" class="dev-card" role="dialog">
<button aria-label="Close" class="dev-close" onclick="closeDeveloperProfile()" type="button">×</button>
<img alt="Achintha" class="dev-photo" src="a"><div class="dev-kicker">WEBSITE DEVELOPER</div>
<h2>Achintha</h2>
<p>Designed &amp; Developed by Achintha</p>
</section>
</div>
</div>
<style>
.round2-launch{
  position:relative;isolation:isolate;overflow:hidden;
  margin:26px auto 8px!important;width:min(100%,520px)!important;
  padding:23px 24px!important;text-align:left!important;
  border:1px solid rgba(110,164,255,.58)!important;
  border-radius:20px!important;
  background:linear-gradient(115deg,rgba(26,54,105,.98),rgba(13,26,55,.98) 58%,rgba(30,65,118,.96))!important;
  box-shadow:0 12px 32px rgba(0,0,0,.28),0 0 22px rgba(67,133,255,.13);
  transition:transform .22s ease,box-shadow .22s ease,border-color .22s ease;
}
.round2-launch:before{
  content:"";position:absolute;inset:-70% auto -70% -30%;width:42%;
  transform:rotate(24deg);background:linear-gradient(90deg,transparent,rgba(255,255,255,.12),transparent);
  transition:left .55s ease;z-index:-1;
}
.round2-launch:hover{transform:translateY(-4px);border-color:#9bc2ff!important;box-shadow:0 16px 38px rgba(0,0,0,.36),0 0 28px rgba(67,133,255,.28);}
.round2-launch:hover:before{left:120%;}
.round2-launch .num{color:#a9caff!important;letter-spacing:2px;font-weight:800;}
.round2-launch h2{margin:8px 0!important;color:#fff!important;}
.round2-launch p{color:#c3d3f1!important;margin-bottom:14px!important;}
.round2-cta{display:inline-flex;align-items:center;gap:13px;color:#dceaff;font-size:12px;font-weight:700;letter-spacing:.3px;}
.round2-cta b{display:inline-grid;place-items:center;width:27px;height:27px;border-radius:50%;background:#8bb8ff;color:#0b1830;font-size:17px;}
@media(max-width:520px){.round2-launch{padding:19px!important;border-radius:16px!important;}}
</style>
<style>
.round3-launch{
  position:relative;isolation:isolate;overflow:hidden;
  display:block!important;width:min(100%,520px)!important;
  margin:26px auto 8px!important;padding:23px 24px!important;text-align:left!important;
  border:1px solid rgba(83,218,174,.58)!important;border-radius:20px!important;
  background:linear-gradient(115deg,rgba(15,75,72,.98),rgba(9,37,48,.98) 58%,rgba(18,91,83,.96))!important;
  box-shadow:0 12px 32px rgba(0,0,0,.28),0 0 22px rgba(54,211,164,.13);
  transition:transform .22s ease,box-shadow .22s ease,border-color .22s ease;
}
.round3-launch:before{
  content:"";position:absolute;inset:-70% auto -70% -30%;width:42%;transform:rotate(24deg);
  background:linear-gradient(90deg,transparent,rgba(255,255,255,.12),transparent);
  transition:left .55s ease;z-index:-1;
}
.round3-launch:hover{transform:translateY(-4px);border-color:#8df0ce!important;box-shadow:0 16px 38px rgba(0,0,0,.36),0 0 28px rgba(54,211,164,.26);}
.round3-launch:hover:before{left:120%;}
.round3-launch .num{color:#9cf0d2!important;letter-spacing:2px;font-weight:800;}
.round3-launch h2{margin:8px 0!important;color:#fff!important;}
.round3-launch p{color:#c1e9df!important;margin-bottom:14px!important;}
.round3-cta{display:inline-flex;align-items:center;gap:13px;color:#e0fff3;font-size:12px;font-weight:700;letter-spacing:.3px;}
.round3-cta b{display:inline-grid;place-items:center;width:27px;height:27px;border-radius:50%;background:#83e7c5;color:#092d2a;font-size:17px;}
@media(max-width:520px){.round3-launch{padding:15px 18px!important;border-radius:16px!important;bottom:10px;}}
#roundTwo{padding-bottom:125px!important}
#round2Quiz{padding-bottom:100px!important}
#round2Result{margin-bottom:100px!important}
</style>
<style>
/* Clear answer feedback for Round 01 and Round 02 */
#answers .answer.wrong,
#round2Answers .answer.wrong{
  background:linear-gradient(135deg,#7f1d2d,#b4233b)!important;
  border:1px solid #ff667b!important;
  color:#fff!important;
  box-shadow:0 0 16px rgba(255,55,85,.28)!important;
  opacity:1!important;
}
#answers .answer.correct,
#round2Answers .answer.correct{
  background:linear-gradient(135deg,#145c43,#16865e)!important;
  border:1px solid #4ce0a0!important;
  color:#fff!important;
  box-shadow:0 0 16px rgba(55,220,145,.22)!important;
  opacity:1!important;
}
</style>
<style>
.dev-footer{text-align:center;padding:12px 12px 20px;}
.dev-footer button{border:0;background:transparent;color:#9eabc6;font-size:11px;letter-spacing:.5px;text-decoration:underline;text-underline-offset:3px;cursor:pointer;opacity:.78;}
.dev-footer button:hover{color:#fff;opacity:1;}
.dev-modal{display:none;position:fixed;inset:0;z-index:9999;align-items:center;justify-content:center;padding:20px;}
.dev-modal.show{display:flex;}
.dev-backdrop{position:absolute;inset:0;background:rgba(2,6,18,.82);backdrop-filter:blur(8px);}
.dev-card{position:relative;width:min(330px,92vw);padding:25px 22px 23px;text-align:center;border:1px solid rgba(112,153,255,.35);border-radius:22px;background:linear-gradient(160deg,#17233e,#090f20);box-shadow:0 22px 70px rgba(0,0,0,.55);color:#fff;animation:devPop .22s ease-out;}
.dev-photo{width:112px;height:112px;object-fit:cover;object-position:center 28%;border-radius:50%;border:3px solid #75a7ff;box-shadow:0 0 24px rgba(80,140,255,.35);}
.dev-kicker{margin-top:17px;color:#8db4ff;font-size:10px;letter-spacing:2px;font-weight:700;}
.dev-card h2{margin:7px 0 5px;font-size:25px;}
.dev-card p{margin:0;color:#b8c5df;font-size:13px;}
.dev-close{position:absolute;right:12px;top:9px;border:0;background:transparent;color:#dce6ff;font-size:27px;cursor:pointer;}
@keyframes devPop{from{opacity:0;transform:translateY(8px) scale(.97)}to{opacity:1;transform:translateY(0) scale(1)}}
</style>
<script>
function openDeveloperProfile(){const m=document.getElementById('developerProfile');m.classList.add('show');m.setAttribute('aria-hidden','false');}
function closeDeveloperProfile(){const m=document.getElementById('developerProfile');m.classList.remove('show');m.setAttribute('aria-hidden','true');}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeDeveloperProfile();});
</script>
<script>

const banks={
chem:{name:'රසායනික විද්‍යාව',questions:[
['තරංග ආයාමය 305mm වන ෆෝටෝන මවුල එකක ශක්තිය වනුයේ?',['392KJ','345kJ','123kJ','391KJ'],0],
['ප්‍රධාන කුවන්ටම් අංකය එන් සමානයි තුන මගින් නිරූපණය වන ප්‍රධාන ශක්ති මට්ටම් තිබිය හැකි උපශක්ති මට්ටම් සංඛ්‍යාව කාක්ෂික සංඛ්‍යාව හා උපරිම ඉලෙක්ට්‍රෝන සංඛ්‍යාව ?',['උප ශක්ති මට්ටම = 2 , කාක්ෂික සංඛ්‍යාව = 8 ,e සංඛ්‍යාව = 17 ','උප ශක්ති මට්ටම = 3 , කාක්ෂික සංඛ්‍යාව = 9,e සංඛ්‍යාව = 16','උප ශක්ති මට්ටම = 3 , කාක්ෂික සංඛ්‍යාව = 8 ,e සංඛ්‍යාව = 9','උප ශක්ති මට්ටම = 3, කාක්ෂික සංඛ්‍යාව = 9 ,e සංඛ්‍යාව = 18'],3],
['XeO₂F₂එහි ඉලෙක්ට්‍රෝන යුගල් ජාමිතිය හා අනුවේ හැඩය පිළිවෙළින් ?',['චතුස්තලීය','තලිය ත්‍රිකෝණාකාර','ත්‍රී ආගති ද්වීපිරමීඩ සීසෝ ','රේඛීය'],2],
['ජලීය ද්‍රාවණයක පවතින Ba²⁺ හා Ca²⁻ අයන එකිනෙකින් වෙන්කර හඳුනා ගැනීම සඳහා පහත කවර ප්‍රතිකාර භාවිතා කළ හැකිද?',['HNO₃','NH₄Cl','K₂Cr₂O₄','NaNO₃'],2],
['කාබන් හා සාන්ද්‍ර නයිට්‍රේට්අම්ල අතර ප්‍රතික්‍රියාවේ පල මොනවාද?',['CO₂, NO₂ සහ H₂O','CO, NO සහ H₂O','CO₂, N₂O සහ H₂O','CO₂, NH₃ සහ H₂O'],0]]},
physics:{name:'භෞතික විද්‍යාව',questions:[
['අන්වායාම තරංග ප්‍රදර්ශනය නොකරන්නේ ?',['ජූල්','වොට්','නිව්ටන්','පාස්කල්'],2],
['වර්නිය කැලිපරයක ප්‍රධාන පරිමාණයේ 1cm ක  අනුකොටාස්   20ක් ඇත  ප්‍රධාන පරිමාණය අනු කොටස් 19 දිගක් සමානය වර්නිය පරිමාණ 20කට බෙදා ඇත .කලිපරයේ කුඩාම මිනුම ?',['0.025','0.5','0.25','0.05'],0],
['ප්‍රක්ෂිප්තයක උපරිම උසේ දී චාලක ශක්තිය එහි අරම්බක   චාලක ශක්තීන් 1/4  ප්‍රක්ෂිප්තය  තිරස සමග සඳන ප්‍රක්ෂේපන කෝණය?',['30','60','90','120'],1],
['දුනු සහ ස්කන්ධ පද්ධතියක් T අවර්ත කාලයක් සහිතව දෝලනය වේ . දුන්නේ දිග හරි අඩකින් අඩුකර ස්කන්ධය එහි ආරම්භක ස්කන්ධයෙන් හරි අඩකට අඩු කළහොත් නව අවර්ත කාලය?',['T1 /K','T1/2','T1/m','T1/3'],1],
['එක එක්හි  ප්‍රතිරොධය  R  වන සර්වසම  ප්‍රතිරෝධ 3 සපයා ඇත. එවායින් ලබා ගත හැකි අවම සහ උපරිම සමක ප්‍රතිරෝධය නොවන්නේ?',['R/2 හා 3R','R/6 හා 3R','R/3 හා 2R','R/3 හා 3R'],3]]},
bio:{name:'ජීව විද්‍යාව',questions:[
[' අනුකනයේ අන්තර් කලාවේ දී සෛලීය ඉන්ද්‍රීයිකා නිපදවීම සිදුවන කලාව කුමක් ද?',['G2 කලාව','G1 කලාව','G4 කලාව','G3 කලාව'],1],
['G2 කලාවේ පවතින සෛල වර්ග දෙකක් නම් කරන්න?',['ස්නායු සෛල , පේශි ශෛල','ස්නායු සෛල ,සුදු රුධිරානු සෛල','දර්ශීය සෛල , පේශි ශෛල','ස්නායු සෛල ,සත්ව සෛල'],0],
['ශාක සෛල විභාජනය   පාලනය කරනු ලබන ශාක වර්ධන යාමක දෙකක් ?',['සුදු රුධිරාණු','රතු රුධිරාණු','පට්ටිකා','ප්ලාස්මාව'],1],
['නිර්වායු ස්වසනයේදී CO₂ පිටකරන පැසීමේ ක්‍රමයේ අවසාන හයිඩ්‍රජන් ප්‍රතිග්‍රාහකයා කුමක්ද?',['මයිටොකොන්ඩ්‍රියාව','න්‍යෂ්ටිය','ක්ලෝරෝප්ලාස්ට්','රික්තකය'],2],
['වඩාත් කුඩා පොලිපෙප්ටයිඩ --> කුඩා පෙප්ටයින හා ඇමයිනෝ අම්ල බවට බිද හෙලීම උත්පේරණය කරන එන්සයිමය කුමක්ද?',['මල්','පත්‍ර','මුල් රෝම','කඳ'],2]]},
math:{name:'සංයුක්ත ගණිතය',questions:[
['x²- 5X + K = 0 වර්ගජ සමීකරණයේ මූල α  හා β වේ. α² + β² = 13 නම් K හි අගය කුමක්ද ?',['K = 6','K = 16 ','K = 7','K = 5'],0],
['(x = 0 )  lim 1-cos(2x) ÷ x² සීමාවේ අගය කුමක්ද?',['2',' 1/2 ','1','4'],0],
['x² + y² − 4x + 6y − 12 = 0වෘත්තයේ අරය කොපමණද ?',['6','7','5','1'],3],
['එකිනෙකට වෙනස් අකුරු 6 භාවිතයෙන් සෑදිය හැකි අකුරු 3  ක  වචන ගණන (අනුපිළිවෙල සැලකිල්ලට ගනිමින් )කුමක්ද?',['220','10','1200','120'],3],
['a = 3i +4j සහ b = i +kj එකිනෙකට ලම්භක නම් K අගය කුමක්ද?',['-3/4','4/3','-5/8','-1/2'],0]]},
};
let currentKey='',index=0,score=0,selected=null,seconds=60,clock=null,answers=[];
function startQuiz(key){clearInterval(clock);currentKey=key;index=0;score=0;answers=[];document.getElementById('home').style.display='none';document.getElementById('result').style.display='none';document.getElementById('quiz').style.display='block';document.getElementById('subjectName').textContent=banks[key].name;showQuestion()}
function showQuestion(){const q=banks[currentKey].questions[index];selected=null;seconds=60;document.getElementById('timerCard').classList.remove('warning');document.getElementById('timer').textContent='01:00';document.getElementById('qCount').textContent=`ප්‍රශ්නය ${index+1} / 5`;document.getElementById('answered').textContent='පිළිතුරක් තෝරන්න';document.getElementById('progress').style.width=((index+1)*20)+'%';document.getElementById('questionText').textContent=q[0];document.getElementById('answers').innerHTML='';q[1].forEach((a,i)=>{const b=document.createElement('button');b.className='answer';b.textContent=String.fromCharCode(65+i)+'. '+a;b.onclick=()=>choose(i);document.getElementById('answers').appendChild(b)});document.getElementById('nextBtn').disabled=true;document.getElementById('nextBtn').textContent=index===4?'ප්‍රතිඵල බලන්න':'ඊළඟ ප්‍රශ්නය →';clock=setInterval(tick,1000)}
function choose(i){if(selected!==null)return;selected=i;const q=banks[currentKey].questions[index];document.querySelectorAll('#answers .answer').forEach((b,n)=>{b.disabled=true;if(n===i)b.classList.add('selected')});if(i===q[2])score++;answers.push(i);document.getElementById('answered').textContent='පිළිතුර තෝරා ඇත';document.getElementById('nextBtn').disabled=false}
function tick(){seconds--;const mm=String(Math.floor(seconds/60)).padStart(2,'0'),ss=String(seconds%60).padStart(2,'0');document.getElementById('timer').textContent=mm+':'+ss;if(seconds<=10)document.getElementById('timerCard').classList.add('warning');if(seconds<=0){clearInterval(clock);if(selected===null){selected=-1;answers.push(-1);document.getElementById('answered').textContent='කාලය අවසන්';document.getElementById('nextBtn').disabled=false;document.querySelectorAll('#answers .answer').forEach(b=>{b.disabled=true})}}}
function nextQuestion(){if(selected===null)return;clearInterval(clock);if(index<4){index++;showQuestion()}else{document.getElementById('quiz').style.display='none';document.getElementById('result').style.display='block';document.getElementById('score').textContent=score+' / 5';document.getElementById('resultText').textContent='ඔබ ප්‍රශ්න 5ටම මුහුණ දුන්නා. නැවත විෂයක් තෝරාගත හැක.'}}
function goHome(){clearInterval(clock);clearInterval(round2Clock);document.getElementById('roundTwo').style.display='none';document.getElementById('roundThree').style.display='none';document.getElementById('quiz').style.display='none';document.getElementById('result').style.display='none';document.getElementById('home').style.display='block'}


let pendingAdminDestination = '';
function setActiveRound(round){document.querySelectorAll('.round-nav-btn').forEach(b=>b.classList.toggle('active',b.dataset.round===round));}
function requestAdminAccess(destination){
  pendingAdminDestination=destination;
  const modal=document.getElementById('adminLogin');
  document.getElementById('adminPassword').value='';
  document.getElementById('adminError').textContent='';
  modal.classList.add('show');modal.setAttribute('aria-hidden','false');
  setTimeout(()=>document.getElementById('adminPassword').focus(),50);
}
function closeAdminLogin(){
  const modal=document.getElementById('adminLogin');
  modal.classList.remove('show');modal.setAttribute('aria-hidden','true');
}
function submitAdminLogin(){
  if(document.getElementById('adminPassword').value==='1234'){
    const destination=pendingAdminDestination;closeAdminLogin();
    if(destination==='round1'){goHome();setActiveRound('round1');}
    if(destination==='round2'){openRoundTwo();setActiveRound('round2');}
    if(destination==='round3'){openRoundThree();setActiveRound('round3');}
    pendingAdminDestination='';
  }else{
    document.getElementById('adminError').textContent='වැරදි Password එකක්. නැවත උත්සාහ කරන්න.';
    document.getElementById('adminPassword').select();
  }
}
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeAdminLogin();});

const round2Banks={
chem:{name:'රසායනික විද්‍යාව',questions:[
['කාබන් හා සාන්ද්‍ර නයිට්‍රේට් අම්ලස් අතර ප්‍රතික්‍රියාවේ පල මොනවාද?',['4','6','8','12'],1],
['නිරපේක්ෂ උෂ්ණත්වයට T හිදී H2 හි  වර්ග මධ්‍යනය වේගය , නිරපේක්ෂ  උෂ්ණත්වය T1  හිදී  N2 හි වර්ග මධ්‍යන්න වේගයට සමන වේ. T හා T1 අතර  සම්බන්ධතාව ?',['14T = T1 ',' T = T1','3T = 6T1','14T = 2T1'],0],
['නිල් ලිට්මස් කඩදාසිය රතු කරන්නේ කුමන ද්‍රාවණයක්ද?',['ක්ෂාරීය','උදාසීන','ආම්ලික','ලවණීය'],2],
['සහසංයුජ බන්ධනයකදී සිදුවන්නේ කුමක්ද?',['ඉලෙක්ට්‍රෝන බෙදාගැනීම','ප්‍රෝටෝන හුවමාරුව','නියුට්‍රෝන බෙදාගැනීම','පරමාණු බිඳීම'],0],
['කාබන් ඩයොක්සයිඩ්හි සූත්‍රය කුමක්ද?',['CO','CO₂','C₂O','CaO'],1]]},
physics:{name:'භෞතික විද්‍යාව',questions:[
['ත්වරණයේ SI ඒකකය කුමක්ද?',['m/s','m/s²','kg/m³','N/m'],1],
['විද්‍යුත් ප්‍රතිරෝධයේ ඒකකය කුමක්ද?',['ඇම්පියර්','වෝල්ට්','ඕම්','වොට්'],2],
['ආලෝකය සුමට පෘෂ්ඨයකින් ආපසු හැරීම හඳුන්වන්නේ කුමක්ද?',['වර්තනය','පරාවර්තනය','විවර්තනය','විසරණය'],1],
['ඝනත්වය ගණනය කරන්නේ කෙසේද?',['පරිමාව ÷ ස්කන්ධය','ස්කන්ධය ÷ පරිමාව','ස්කන්ධය × පරිමාව','බලය ÷ වර්ගඵලය'],1],
['ගුරුත්වාකර්ෂණ ක්ෂේත්‍රයක ඉහළට ඔසවා තැබූ වස්තුවක ගබඩා වන ශක්තිය කුමක්ද?',['චාලක ශක්තිය','තාප ශක්තිය','ගුරුත්වාකර්ෂණ විභව ශක්තිය','ශබ්ද ශක්තිය'],2]]},
bio:{name:'ජීව විද්‍යාව',questions:[
['ජානමය තොරතුරු ගබඩා කරන අණුව කුමක්ද?',['DNA','ග්ලූකෝස්','ලිපිඩ්','ජලය'],0],
['ශාකයක ජලය ඉහළට ප්‍රවාහනය කරන පටකය කුමක්ද?',['ෆ්ලෝයම','සයිලම','එපිඩර්මිය','කැම්බියම'],1],
['පෙනහළුවල වායු හුවමාරුව සිදුවන ස්ථානය කුමක්ද?',['ශ්වාසනාලය','බ්‍රොන්කසය','ඇල්වියෝලයි','නාසික කුහරය'],2],
['මල්වල පරාග පරාගධානියෙන් කලංකයට මාරුවීම හඳුන්වන්නේ කුමක්ද?',['පරාගණය','ප්‍රභාසංශ්ලේෂණය','ශ්වසනය','වාෂ්පෝත්සර්ජනය'],0],
['මියගිය ජීව ද්‍රව්‍ය විඝටනය කිරීමට ප්‍රධාන වශයෙන් දායක වන්නේ කවුද?',['නිෂ්පාදකයෝ','විඝටකයෝ','ශාකභක්ෂකයෝ','මාංශභක්ෂකයෝ'],1]]},
math:{name:'සංයුක්ත ගණිතය',questions:[
['f(x)=x² නම් f′(x) කුමක්ද?',['x','2x','x²','2'],1],
['sin 30° හි අගය කීයද?',['1','√3/2','1/2','0'],2],
['[[1,2],[3,4]] න්‍යාසයේ නිර්ණායකය කීයද?',['2','-2','10','-10'],1],
['x²−5x+6=0 සමීකරණයේ මූල දෙක කුමක්ද?',['1 හා 6','-2 හා -3','2 හා 3','-1 හා -6'],2],
['∫2x dx හි අගය කුමක්ද?',['2x²+C','x²+C','x+C','2+C'],1]]}
};
let round2Key='',round2Index=0,round2Points=0,round2Choice=null,round2Seconds=60,round2Clock=null;
function openRoundTwo(){clearInterval(clock);clearInterval(round2Clock);document.getElementById('home').style.display='none';document.getElementById('quiz').style.display='none';document.getElementById('result').style.display='none';document.getElementById('roundThree').style.display='none';document.getElementById('roundTwo').style.display='block';showRound2Subjects();}
function showRound2Subjects(){clearInterval(round2Clock);document.getElementById('round2Subjects').style.display='grid';document.getElementById('round2Quiz').style.display='none';document.getElementById('round2Result').style.display='none';}
function startRound2Quiz(key){clearInterval(round2Clock);round2Key=key;round2Index=0;round2Points=0;document.getElementById('round2Subjects').style.display='none';document.getElementById('round2Result').style.display='none';document.getElementById('round2Quiz').style.display='block';document.getElementById('round2SubjectName').textContent=round2Banks[key].name;showRound2Question();}
function showRound2Question(){const q=round2Banks[round2Key].questions[round2Index];round2Choice=null;round2Seconds=60;document.getElementById('round2TimerCard').classList.remove('warning');document.getElementById('round2Timer').textContent='01:00';document.getElementById('round2Count').textContent=`ප්‍රශ්නය ${round2Index+1} / 5`;document.getElementById('round2Answered').textContent='පිළිතුරක් තෝරන්න';document.getElementById('round2Progress').style.width=((round2Index+1)*20)+'%';document.getElementById('round2QuestionText').textContent=q[0];const box=document.getElementById('round2Answers');box.innerHTML='';q[1].forEach((a,i)=>{const b=document.createElement('button');b.className='answer';b.textContent=String.fromCharCode(65+i)+'. '+a;b.onclick=()=>chooseRound2(i);box.appendChild(b)});document.getElementById('round2Next').disabled=true;document.getElementById('round2Next').textContent=round2Index===4?'ප්‍රතිඵල බලන්න':'ඊළඟ ප්‍රශ්නය →';round2Clock=setInterval(tickRound2,1000);}
function chooseRound2(i){if(round2Choice!==null)return;round2Choice=i;const q=round2Banks[round2Key].questions[round2Index];document.querySelectorAll('#round2Answers .answer').forEach((b,n)=>{b.disabled=true;if(n===i)b.classList.add('selected')});if(i===q[2])round2Points++;document.getElementById('round2Answered').textContent='පිළිතුර තෝරා ඇත';document.getElementById('round2Next').disabled=false;}
function tickRound2(){round2Seconds--;const mm=String(Math.floor(round2Seconds/60)).padStart(2,'0'),ss=String(round2Seconds%60).padStart(2,'0');document.getElementById('round2Timer').textContent=mm+':'+ss;if(round2Seconds<=10)document.getElementById('round2TimerCard').classList.add('warning');if(round2Seconds<=0){clearInterval(round2Clock);if(round2Choice===null){round2Choice=-1;document.getElementById('round2Answered').textContent='කාලය අවසන්';document.getElementById('round2Next').disabled=false;document.querySelectorAll('#round2Answers .answer').forEach(b=>{b.disabled=true});}}}
function nextRound2Question(){if(round2Choice===null)return;clearInterval(round2Clock);if(round2Index<4){round2Index++;showRound2Question();}else{document.getElementById('round2Quiz').style.display='none';document.getElementById('round2Result').style.display='block';document.getElementById('round2Score').textContent=round2Points+' / 5';document.getElementById('round2ResultText').textContent='ඔබ දෙවන වටයේ '+round2Banks[round2Key].name+' ප්‍රශ්න 5ටම මුහුණ දුන්නා.';}}

const round3Questions = [
['titan සම්මැරිනය  විනාශ වීමට හේතු වූ භෞතික සංසිද්ධිය කුමක් ද?',['බාහිර ජල පීඩනය නිසා ','අභ්‍යන්තර ජල පීඩනය නිසා','අභ්‍යන්තර වායු පීඩනය ශුන්‍ය වීම නිසා','පීඩන සමානවීම නිසා'],0],
['ජලයේ ඝනත්වය උපරිම අගයක් ගන්නේ කුමන උෂ්ණත්වයේදී ද?',['100C','4C','0.01C','10C'],1],
['විද්‍යා ක්‍ෂේත්‍ර දෙකකින්  නොබෙල් තියග දිනූ එකම පුද්ගලයා කවුද?',['රදර්ෆර්ඩ්','හෙන්රික් බෙල්ස්','රොබට් මිල්කන්','මාරි කිවුරි.'],3],
['ප්‍රක්ෂියිපිත චලිතයකදී වස්තුවක් එහි උපරිම සිරස් උසකට ළඟා වූ මොහොතකදී එහි ප්‍රවේගය හා තොරණය අතර කෝණය කීයද?',['90','120','45','30'],0],
['සරල අනුවර්තී චලිතයක යෙදෙන අංශුවක චාලක ශක්තිය විස්ථාපනයේ ශීතයක් ලෙස ප්‍රස්ථාරගත කළහොත් එහි හැඩය කුමක්ද?',['පහළට විවෘත වූ පාරාවලයක්','ඉහළට විවෘත වූ පාරාවලයක් ','සංවෘත පාරාවලයක්','මේ සියල්ල'],0],
['ආදර්ශය වායුවක පරිමාව නියතව තබා උෂ්ණත්වය කෙල්ලෙන් වලින් දෙගුණ කළහොත් වායු අනුවක මධ්‍ය වර්ගමූල ප්‍රවේගය කී ගුණයක් වෙනස් වේද?',['√2','√3','√25','√16'],1],
['අවර්තිත වගුවේ කාණ්ඩයක් පහළට යන විටය අයනික ශක්තිය සාමාන්‍යයෙන් අඩුවන්නේ ඇයි ?',['පරමාණු අරය වැඩිවීම ','පරමාණු අරය අඩුවීම ','න්‍යෂ්ටිය හා සංයුජාත ඉලෙක්ට්‍රෝන අතර  ආකර්ෂණ බල වැඩිවන බැවිනි','පරමාණුවක රසායනික ගුණ අනුව'],1],
['සමතුලිතතාවය පවතින පද්ධතියකට උත්පේ්‍රකයක් එක් කිරීමේ සමතුලිතතාවය නියතයේ  අගය කුමක් වේද?',['අඩුවේ ','වැඩිවේ ','කිසිදු වෙනසක් සිදු නොවේ','අඩු වැඩි වෙමින් පවතී'],2],
['ජලීය ද්‍රාවණයක 25 C උෂ්ණත්වයකදී pH අගය 3 වූ ද්‍රාවණයක pOH  අගය කීයද ?',['19','13','15','11'],3],
['ශාක සෛලයක සිදුවන ප්‍රභාසංස්ලේෂණයේදී ආලෝක ප්‍රතික්‍රියාව සිදුවන්නේ කොහේද?',['හරිතලාවේ තෛල කොයිඩ  පටලය තුළ','න්‍යෂ්ටිය තුළ','රික්තකය තුළ','අන්තඃප්‍රාස්මීය ජාලිකා තුළ'],0],
['DNA  ප්‍රතිවලිතයේ දී  අනුපූරක නව DNA දාමය සංශ්ලේෂණය වන්නේ කුමන දිශාවටද?',['5 --> 3','5 --> 4','6 --> 2','3 --> 5'],2],
['ස්නායු සම්ප්‍රේෂණයේදී අක්‍ෂකෝණයක් විවේක විභවය පවත්වා ගැනීමට ප්‍රධාන වශයෙන් දායක වන පොම්පය  කුමක්ද?',['සෝඩියම් පොටෑසියම් පොම්පය','සූර්යයා','ප්‍රොක්සිමා සෙන්ටෝරි','පොලාරිස්'],0]
];
let round3Done = Array(12).fill(false), round3Wrong = Array(12).fill(false), round3Score=0, round3Current=-1, round3Selected=null;
function openRoundThree(){
 clearInterval(clock); clearInterval(round2Clock); document.getElementById('home').style.display='none';document.getElementById('roundTwo').style.display='none';
 document.getElementById('quiz').style.display='none';document.getElementById('result').style.display='none';
 document.getElementById('roundThree').style.display='block';
 round3Done=Array(12).fill(false);round3Wrong=Array(12).fill(false);round3Score=0;round3Current=-1;
 document.getElementById('round3Question').style.display='none';document.getElementById('round3Grid').style.display='grid';document.getElementById('round3Count').style.display='none';document.getElementById('round3Done').style.display='none';round3Selected=null;drawRound3Grid();
}
function drawRound3Grid(){
 const grid=document.getElementById('round3Grid');grid.innerHTML='';
 round3Questions.forEach((q,i)=>{const b=document.createElement('button');b.className='subject'+(round3Done[i]?' done':'')+(round3Wrong[i]?' incorrect':'')+(round3Current===i?' current':'');b.textContent=round3Done[i]?(round3Wrong[i]?'✗ ':'✓ ')+(i+1):String(i+1);b.disabled=round3Done[i];b.onclick=()=>showRound3Question(i);grid.appendChild(b)});
 if(round3Done.every(Boolean)){document.getElementById('round3Question').style.display='none';document.getElementById('round3Done').style.display='block';document.getElementById('round3Score').textContent=round3Score+' / 12';}
}
function showRound3Question(i){if(round3Done[i])return;round3Current=i;const q=round3Questions[i];
 document.getElementById('round3Grid').style.display='none';document.getElementById('round3Count').style.display='none';document.getElementById('round3Question').style.display='block';document.getElementById('round3Submit').style.display='inline-block';document.getElementById('round3Status').textContent='පිළිතුරක් තෝරා Submit කරන්න';document.getElementById('round3Text').textContent=q[0];round3Selected=null;document.getElementById('round3Submit').disabled=true;
 const box=document.getElementById('round3Answers');box.innerHTML='';q[1].forEach((a,n)=>{const b=document.createElement('button');b.className='answer';b.textContent=String.fromCharCode(65+n)+'. '+a;b.onclick=()=>selectRound3Answer(n);box.appendChild(b)});drawRound3Grid();
}
function selectRound3Answer(n){if(round3Current<0||round3Done[round3Current])return;round3Selected=n;document.querySelectorAll('#round3Answers .answer').forEach((b,i)=>b.classList.toggle('selected',i===n));document.getElementById('round3Submit').disabled=false;}
function submitRound3Answer(){if(round3Selected===null)return;answerRound3(round3Selected);document.getElementById('round3Submit').disabled=true;}
function answerRound3(n){if(round3Current<0||round3Done[round3Current])return;const q=round3Questions[round3Current];const buttons=document.querySelectorAll('#round3Answers .answer');buttons.forEach((b,i)=>{b.disabled=true;if(i===q[2])b.classList.add('correct');else if(i===n)b.classList.add('wrong')});const isCorrect=n===q[2];if(isCorrect)round3Score++;round3Wrong[round3Current]=!isCorrect;round3Done[round3Current]=true;document.getElementById('round3Status').textContent=isCorrect?'✓ නිවැරදියි!':'✗ වැරදියි! නිවැරදි පිළිතුර: '+q[1][q[2]];document.getElementById('round3Submit').style.display='none';drawRound3Grid();document.getElementById('round3Grid').style.display='grid';}

window.addEventListener("load", () => {
  setTimeout(() => {
    const loader = document.getElementById('loader');
    loader.classList.add('fade-out');
    setTimeout(() => {
      loader.style.display = 'none';
      document.querySelector('.stars').style.display = 'none';
      document.body.classList.add('app-active');
      document.getElementById('app').style.display = 'block';
    }, 850);
  }, 4000);
});
</script>

<script>
/* Live team bridge: the original quiz UI and styles are retained. */
const LIVE_TEAM = new URLSearchParams(location.search).get('team') === '2' ? 2 : 1;
async function liveSubmit(round, section, questionIndex, chosen, correct) {
  try {
    const r = await fetch('api.php?action=submit', {method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({team:LIVE_TEAM,round,section,question:questionIndex,answer:chosen,correct:!!correct})});
    if(!r.ok) console.warn('Live answer was not saved');
  } catch(e) { console.warn('Could not connect to live server',e); }
}
// Wrap existing handlers without changing their visible behavior.
const originalChoose = window.choose;
window.choose = function(i){
  const q = banks[currentKey].questions[index];
  originalChoose(i);
  liveSubmit(1,currentKey,index,i,i===q[2]);
};
const originalChooseRound2 = window.chooseRound2;
window.chooseRound2 = function(i){
  const q = round2Banks[round2Key].questions[round2Index];
  originalChooseRound2(i);
  liveSubmit(2,round2Key,round2Index,i,i===q[2]);
};
const originalAnswerRound3 = window.answerRound3;
window.answerRound3 = function(i){
  const q = round3Questions[round3Current];
  originalAnswerRound3(i);
  liveSubmit(3,'final',round3Current,i,i===q[2]);
};
</script>

</body>
</html>
