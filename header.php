<?php
session_start();

echo '

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PokeTweet is an 8-bit social media platform inspired by twitter and pokemon.">
    <meta name="author" content="Marcus Snow">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="manifest" href="/site.webmanifest">

    <!-- CORE og -->
    <!-- Title, without branding. -->
    <meta property="og:title" content="PokeTweet" />
    <!-- Name, not URL (e.g. Apple, not apple.com) -->
    <meta property="og:site_name" content="PokeTweet" />

    <!-- OPTIONAL description. 2-4 sentences. -->
    <meta property="og:description" content="PokeTweet is an 8-bit social media platform inspired by twitter and pokemon." />
  
    <meta property="og:image" content="http://snowjay.org/projects/twitter-clone/pokeball-Large.JPG" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="606" />


    <!-- latest -->


    <title>' ,  $title , '</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/nes.min.css" rel="stylesheet" />
  <link href="./css/press-start-font.css" rel="stylesheet">
  <link href="s/styles.css" rel="stylesheet">

  </head>

';
?>