<!DOCTYPE html>

<html lang="en">

<head>
  <title>WNC Birds <?php if (isset($page_title)) {
                      echo '- ' . h($page_title);
                    } ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/<?php echo PUBLIC_PATH; ?>/stylesheets/public.css">
</head>

<body>

  <header>
    <h1>
      <a href=" <?php echo url_for('/index.php'); ?>">
        WNC Birds
      </a>
    </h1>
  </header>