<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>PCB Test Automation</title>
  <link rel="stylesheet" href="src/semantic/dist/semantic.min.css">
  <link rel="stylesheet" href="src/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="src/head.js" charset="utf-8"></script>
</head>
<body>
<?php
$menu = <<<EOT
  <a href="#team" class="item">Team</a>
  <a href="#timeline" class="item">Timeline</a>
  <a href="#pictures" class="item">Pictures</a>
  <a href="#documents" class="item">Documents</a>
  <a href="#acknowledgements" class="item">Acknowledgements</a>
EOT
?>
  <a id="home" class="anchor move"></a>
  <!-- Top main menu -->
  <div class="ui container">
    <div class="ui huge text menu" id="top-menu">
      <h1 class="item">PCB Test Automation</h1>
      <div class="right menu" id="top-menu-right">
        <?= $menu ?>
      </div>
    </div>
  </div>

  <!-- Fixed Menu -->
  <div class="ui fixed hidden menu">
    <div class="ui container">
      <a href="#home" class="item"><h1>PCB Test Automation</h1></a>
      <div class="right menu">
        <a href="#home" class="item">Home</a>
        <?= $menu ?>
      </div>
    </div>
  </div>
