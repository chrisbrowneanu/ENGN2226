<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">

  <?php 
  	$break = explode('/', $_SERVER["SCRIPT_NAME"]);
  	$dir = $break[count($break) - 1]; 
  	echo '<title>ENGN2226 | '.$dir.'</title>';
  ?>

  <!-- Flatdoc -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src='http://rstacruz.github.io/flatdoc/v/0.8.0/legacy.js'></script>
  <script src='http://eng.anu.edu.au/courses/ENGN2226/js/flatdoc.js'></script>

  <!-- Flatdoc theme -->
  <link  href='http://eng.anu.edu.au/courses/ENGN2226/css/style.css' rel='stylesheet'>
  <script src='http://rstacruz.github.io/flatdoc/v/0.8.0/theme-white/script.js'></script>

  <!-- Meta -->
  <meta content="ENGN2226 Systems Engineering Analysis" property="og:title">
  <meta content="Research School of Engineering, ANU College of Engineering and Computer Science" name="description">