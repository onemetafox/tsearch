<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Prozim - Find a Professional and Book a Consultation by Appointment, Chat or Video call">
    <meta name="author" content="Ansonika">
    <title>Prozim - 専門家を探す</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?=asset_url()?>css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/style.css" rel="stylesheet">
    <link href="<?=asset_url()?>css/toastr.min.css" rel="stylesheet">
    <script src="<?=asset_url()?>js/jquery.js"></script>
    <!-- SPECIFIC CSS -->
    <link href="<?=asset_url()?>css/listing.css" rel="stylesheet">




        <!-- COMMON SCRIPTS -->
    
</head>
<?php
    if (isset($header))
    {
        echo $header;
    }

    if (isset($content))
    {
        echo $content;
    }
    if (isset($footer))
    {
        echo $footer;
    }
?>
<script type="text/javascript"> var HOST_URL = "<?= base_url()?>"</script>
<script src="<?=asset_url()?>js/common_scripts.min.js"></script>
<script src="<?=asset_url()?>js/slider.js"></script>
<script src="<?=asset_url()?>js/common_func.js"></script>
<script src="<?=asset_url()?>assets/validate.js"></script>
<script src="<?=asset_url()?>js/toastr.min.js"></script>