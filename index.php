<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nickeyy Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="form-title">Nickeyys Blog</h1>
<h2> THE PERSONAL BLOG</h2>

<?php
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=blogdb', $user, $pass);

$stmt = $dbh->prepare('SELECT * FROM post');
$stmt->execute();

foreach($stmt as $output) {?>
    <div class="form-actions">
    <h1><?= htmlspecialchars($output['created_by'], ENT_QUOTES, "UTF-8");?></h1>
    <h2><?= htmlspecialchars($output ['post_title'], ENT_QUOTES, "UTF-8");?></h2>
    <p><?= htmlspecialchars($output ['post_text'], ENT_QUOTES, "UTF-8");?></p>
    <p><?= htmlspecialchars($output ['created_at']);
}
?></p>
<div class="wrapper">

<form action="blog.php" method="post">
<div class="form-actions">
        <input class="btn btn-primary" type="submit" value="Zum Blog schreiben">
</div>

</body>
</html>