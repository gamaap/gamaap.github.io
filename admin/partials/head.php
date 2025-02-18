<?php 
 $page = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
  <head>
    <meta charset="utf-8">
    <title>Demo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
  </head>
  <body class="<?= $page === 'career' ? 'overflow-hidden h-screen' : 'h-full' ?>">
    <div class="min-h-full">