<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title; if(isset($titulo_categoria)) {foreach($titulo_categoria as $nomecat){echo $nomecat->cat_nome;}}?></title>
        <base href="<?= base_url()?>">
        <link href="<?= base_url("assets/frontend/assets/css/bootstrap.min.css");?>" rel="stylesheet">
        <link href="<?= base_url("assets/frontend/assets/css/font-awesome.min.css");?>" rel="stylesheet">
        <link href="<?= base_url("assets/frontend/assets/css/material-design-iconic-font.min.css");?>" rel="stylesheet">
        <link href="<?= base_url("assets/frontend/assets/css/owl.carousel.css");?>" rel="stylesheet">
        <link href="<?= base_url("assets/frontend/assets/css/animate.css");?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url("assets/frontend/assets/css/owl.carousel.css");?>">
        <link rel="stylesheet" href="<?= base_url("assets/frontend/assets/css/sweet.alert.css");?>">
        <link rel="stylesheet" href="<?= base_url("assets/frontend/assets/css/slicknav.min.css");?>">
        <link rel="stylesheet" href="<?= base_url("assets/frontend/assets/css/magnific.pupup.css");?>">
        <link rel="stylesheet" href="<?= base_url("assets/frontend/assets/css/style.css");?>">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700%7CNoto+Sans:400,700" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?= base_url("assets/frontend/assets/js/jquery.min.js");?>"></script>
    </head>
      <body class="home">
        <div class="preloader" aria-busy="true" aria-label="Carregando, aguarde." role="progressbar"></div>
        <div class="preloader--main">
            <div class="st--inner">
                <span class="preloader-spin"></span>
            </div>
        </div>
        <div class="preloader btm" aria-busy="true" aria-label="Carregando, aguarde." role="progressbar"></div>
        <div class="site_wrap">