<header class="main-header">
                <a href="<?= base_url()?>" class="logo">
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
                                    <img src="<?= base_url("assets/backend/img/user2-160x160.jpg")?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $this->session->userdata('userlogado')->user_nome; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?= base_url("assets/backend/img/user2-160x160.jpg")?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?= $this->session->userdata('userlogado')->user_nome; ?> - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= base_url('admin/usuarios/logout')?>" class="btn btn-default btn-flat">Deslogar</a>
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
                            <img src="<?= base_url("assets/backend/img/user2-160x160.jpg")?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?= $this->session->userdata('userlogado')->user_nome; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <?php  $p = $this->session->userdata('userlogado')->user_permissao; ?>
                   <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Menu Principal</li>

                        <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
                        <?= apenasADM($p, 'admin/categoria', "Categorias", "fa-calculator"); ?>
                        <?= apenasGESTOR($p, 'admin/usuarios', "Usuários", "fa-user"); ?>
                        <li><a href="ger_slides.php"><i class="fa fa-camera"></i>Slides Home</a></li>
                        <!--<li class="treeview">
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
                        <li><a href="ger_contato.php"><i class="fa fa-phone"></i>Informações de Contato</a></li>-->
                    </ul>
                </section>
               
            </aside>