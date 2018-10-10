<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Fixed Layout</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <link rel="stylesheet" href="css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="components/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="components/bootstrap-fileupload/bootstrap-fileupload.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="../../index2.html" class="logo">
                    <span class="logo-mini"><b>A</b>LT</span>
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    
                   <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Menu Principal</li>

                        <li><a href=""><i class="fa fa-home"></i> <span>Home</span></a></li>
                        <li><a href="ger-seo.php"><i class="fa fa-search-plus"></i>Info. de Páginas</a></li>
                        <li><a href="ger_slides.php"><i class="fa fa-camera"></i>Slides Home</a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-archive-o"></i> <span>Configurações de Textos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="ger_textos.php?secao=1"><i class="fa fa-circle-o"></i>Home</a></li>
                                <li><a href="ger_textos.php?secao=2"><i class="fa fa-circle-o"></i>Sobre Nós</a></li>
                                <li><a href="ger_textos.php?secao=3"><i class="fa fa-circle-o"></i>Outdoor</a></li>
                                <li><a href="ger_textos.php?secao=4"><i class="fa fa-circle-o"></i>Contato</a></li>
                                <li><a href="ger_textos.php?secao=5"><i class="fa fa-circle-o"></i>Orçamento</a></li>
                                <li><a href="ger_textos.php?secao=6"><i class="fa fa-circle-o"></i>BackBus</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-image-o"></i> <span>Configurações de Imagens</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="ger_imagens.php?secao=1"><i class="fa fa-circle-o"></i>Home</a></li>
                                <li><a href="ger_imagens.php?secao=2"><i class="fa fa-circle-o"></i>Sobre Nós</a></li>
                                <li><a href="ger_imagens.php?secao=3"><i class="fa fa-circle-o"></i>Outdoor</a></li>
                                <li><a href="ger_imagens.php?secao=4"><i class="fa fa-circle-o"></i>Contato</a></li>
                                <li><a href="ger_imagens.php?secao=5"><i class="fa fa-circle-o"></i>Backbus</a></li>
                            </ul>
                        </li>

                        <li><a href="ger-outdoor.php"><i class="fa fa-photo"></i>Gerenciar Outdoors</a></li>
                        <li><a href="ger-regioes.php"><i class="fa fa-map-marker"></i>Gerenciar Regiões</a></li>
                        <li><a href="ger_contato.php"><i class="fa fa-phone"></i>Informações de Contato</a></li>
                    </ul>
                </section>
               
            </aside>