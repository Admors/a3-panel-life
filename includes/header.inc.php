<?php
require_once __DIR__ . '/lang.inc.php';

$allowed_langs = ['French', 'English'];
$lang = isset($_GET['lang']) && in_array($_GET['lang'], $allowed_langs) ? $_GET['lang'] : 'French'; // Exemple : ?lang=English
$t = new Translator($lang);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A3 Panel - PAGENAME</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __DIR__ . '/../assets/css/styles.css'; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?php echo __DIR__ . '/../assets/images/favicon.ico'; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">

<header>
<?php require_once 'includes/nav.inc.php';?>
</header>