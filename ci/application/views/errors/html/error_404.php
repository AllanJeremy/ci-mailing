<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | YoAmar</title>
    <link rel="stylesheet" href="<?= asset_url('site/bootstrap/css/bootstrap.min.css?h=c9f755005e8c0227cffc2de98ed6d562'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= asset_url('site/css/styles.min.css?h=e579ba0d6f3333d32671c5a4458ba16b'); ?>">
</head>

<body style="overflow-y:hidden;">
    <main class="text-center" style="height:100vh;background-color:#f77674;color:rgb(251,181,171);">
        <div class="container d-flex flex-column justify-content-center align-items-center" style="height:90%;"><i class="fa fa-close mb-2 mt-2" style="font-size:48px;"></i>
            <h1 class="text-monospace display-4">Error 404</h1>
            <p class="lead" style="font-size:20px;line-height:40px;">Oops, we could not find that page</p><a class="btn btn-lg btn-outline-primary26 mt-4 mb-4" href="<?= base_url(); ?>">BACK TO HOME</a></div>
        <p>© <?= date('Y'); ?> -&nbsp;<a href="#">YoAmar</a></p>
    </main>
 
</body>

</html>
