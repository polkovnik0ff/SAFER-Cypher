<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAFER Cypher</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
$base_url = "http://www.gwcworld.com/safer/";
?>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li <?php if ($page == 'home') echo 'class="active"' ?>><a href="<?= $base_url ?>">Home</a></li>
            <li <?php if ($page == 'en') echo 'class="active"' ?>><a href="<?= $base_url ?>encrypt.php">Encrypt</a></li>
            <li <?php if ($page == 'de') echo 'class="active"' ?>><a href="<?= $base_url ?>decrypt.php">Decrypt</a></li>
        </ul>
        <h3 class="text-muted">SAFER Cypher</h3>
    </div>