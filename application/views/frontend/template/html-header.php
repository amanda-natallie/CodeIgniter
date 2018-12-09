
<!DOCTYPE html>
<html class="" lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <base href="<?= base_url()?>">
        <link href='https://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
        <link href='<?= base_url($img[6])?>' rel='shortcut icon' >

        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/bootstrap-datepicker.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>rs-plugin/css/settings.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/owl.carousel.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/owl.theme.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/owl.transitions.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/magnific-popup.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/lib/select2.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url("assets/frontend/")?>css/style.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <title><?= $title; if(isset($titulo_categoria)) {foreach($titulo_categoria as $nomecat){echo $nomecat->cat_nome;}}?></title>
    </head>

    <body>
        <div id="preload" class="preload">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <div id="page-wrap">

