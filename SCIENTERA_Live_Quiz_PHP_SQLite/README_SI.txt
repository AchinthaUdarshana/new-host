SCIENTERA 2026 - PHP + SQLite Live Quiz

FILES
- team.php : original Science Day site UI (team phone page)
- admin.php : separate live admin dashboard
- api.php : saves and returns answers using SQLite
- index.php : opens Team 1 page

IMPORTANT
1. Install PHP for Windows and enable pdo_sqlite in php.ini. XAMPP is not required.
2. Put this folder somewhere simple, e.g. C:\SCIENTRA.
3. Open Command Prompt in this folder and run: php -S 0.0.0.0:8000
4. On the computer: http://localhost:8000/team.php?team=1
5. Team 2 phone: http://COMPUTER-LAN-IP:8000/team.php?team=2
6. Admin: http://COMPUTER-LAN-IP:8000/admin.php (default password 1234)
7. Allow PHP through Windows Firewall for Private networks if prompted. All devices must use the same Wi-Fi.
8. PHP must have PDO SQLite enabled. The database quiz.sqlite is created automatically.

NOTE
- The original HTML/CSS and quiz layout were retained in team.php; only a small JavaScript bridge was added to send answers.
- The current quiz source already contains answer keys in browser JavaScript. This first live prototype therefore reports correctness to the admin dashboard but is not tamper-proof. A production event version should move all answer keys to the server.
- Original logo paths in the source point to local Windows C:\Users paths. Copy the logo image into this folder and change those image src paths to a relative filename (e.g. logo.jpg) so phones can display it.
- Admin password is 1234 in admin.php; change $pass before the event.
