<?php
$phpVersion = phpversion();
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown';
$serverIP = $_SERVER['SERVER_ADDR'] ?? 'Unknown';
$serverName = $_SERVER['SERVER_NAME'] ?? 'ArixByte';
$date = date("F j, Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ArixByte Web Hosting</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#0f172a;
    color:#fff;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.hero{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.card{
    background:#111827;
    border:1px solid #334155;
    border-radius:20px;
    padding:50px;
    width:100%;
    max-width:900px;
    box-shadow:0 25px 60px rgba(0,0,0,.35);
}

.logo{
    font-size:48px;
    font-weight:700;
    color:#38bdf8;
}

.subtitle{
    margin-top:10px;
    color:#94a3b8;
    font-size:18px;
}

.success{
    margin:30px auto;
    background:#052e16;
    color:#4ade80;
    border:1px solid #166534;
    padding:15px;
    border-radius:12px;
    font-weight:600;
}

.grid{
    margin-top:40px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.box{
    background:#1e293b;
    padding:20px;
    border-radius:15px;
    text-align:left;
}

.box h3{
    color:#38bdf8;
    margin-bottom:10px;
}

.box p{
    color:#cbd5e1;
    font-size:15px;
}

.footer{
    margin-top:40px;
    color:#94a3b8;
}

.button{
    display:inline-block;
    margin-top:30px;
    background:#0ea5e9;
    color:#fff;
    text-decoration:none;
    padding:14px 30px;
    border-radius:10px;
    transition:.3s;
}

.button:hover{
    background:#0284c7;
}
</style>

</head>
<body>

<div class="hero">
<div class="container">

<div class="card">

<div class="logo">
🚀 ArixByte
</div>

<div class="subtitle">
Professional Web Hosting Platform
</div>

<div class="success">
✅ Your hosting account has been successfully created.
</div>

<div class="grid">

<div class="box">
<h3>🐘 PHP Version</h3>
<p><?php echo htmlspecialchars($phpVersion); ?></p>
</div>

<div class="box">
<h3>🌐 Web Server</h3>
<p><?php echo htmlspecialchars($serverSoftware); ?></p>
</div>

<div class="box">
<h3>🖥 Server IP</h3>
<p><?php echo htmlspecialchars($serverIP); ?></p>
</div>

<div class="box">
<h3>📅 Created</h3>
<p><?php echo htmlspecialchars($date); ?></p>
</div>

</div>

<a class="button" href="https://arixbyte.com" target="_blank">
Visit ArixByte
</a>

<div class="footer">

<p><strong>Getting Started</strong></p>

<p>✔ Upload your website files into the <strong>webroot</strong> directory.</p>
<p>✔ Connect a Git repository using the panel.</p>
<p>✔ Enable WordPress installation from the startup variables.</p>
<p>✔ Composer projects are supported.</p>

<br>

<p>
Powered by <strong>ArixByte</strong><br>
© <?php echo date("Y"); ?> ArixByte. All Rights Reserved.
</p>

</div>

</div>

</div>
</div>

</body>
</html>
