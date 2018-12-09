<header class="main-header">                <a href="<?= base_url()?>" class="logo">                    <span class="logo-mini"><b>D</b>M</span>                    <span class="logo-lg"><b>Detalhes</b> de Minas</span>                </a>                <nav class="navbar navbar-static-top">                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">                        <span class="sr-only">Toggle navigation</span>                        <span class="icon-bar"></span>                        <span class="icon-bar"></span>                        <span class="icon-bar"></span>                    </a>                    <div class="navbar-custom-menu">                        <ul class="nav navbar-nav">                            <li class="dropdown user user-menu">                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">                                    <img src="<?= base_url("assets/backend/img/avatar3.png")?>" class="user-image" alt="User Image">                                    <span class="hidden-xs"><?= $this->session->userdata('userlogado')->user_nome; ?></span>                                </a>                                <ul class="dropdown-menu">                                    <li class="user-header">                                        <img src="<?= base_url("assets/backend/img/avatar3.png")?>" class="img-circle" alt="User Image">                                        <p>                                            <?= $this->session->userdata('userlogado')->user_nome; ?> - Usuário                                        </p>                                    </li>                                    <li class="user-footer">                                        <div class="pull-left">                                            <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->                                        </div>                                        <div class="pull-right">                                            <a href="<?= base_url('admin/usuarios/logout')?>" class="btn btn-default btn-flat">Deslogar</a>                                        </div>                                    </li>                                </ul>                            </li>                        </ul>                    </div>                </nav>            </header>            <aside class="main-sidebar">                <section class="sidebar">                    <div class="user-panel">                        <div class="pull-left image">                            <img src="<?= base_url("assets/backend/img/avatar3.png")?>" class="img-circle" alt="User Image">                        </div>                        <div class="pull-left info">                            <p><?= $this->session->userdata('userlogado')->user_nome; ?></p>                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>                        </div>                    </div>                    <?php  $p = $this->session->userdata('userlogado')->user_permissao; ?>                   <ul class="sidebar-menu" data-widget="tree">                        <li class="header">Menu Principal</li>                        <li><a href="<?= base_url('admin'); ?>"><i class="fa fa-globe"></i> <span>Home</span></a></li>                        <?= apenasADM($p, 'admin/usuarios', "Usuários", "fa-user"); ?>                        <?= apenasGESTOR($p, 'admin/slide', "Slides", "fa-camera"); ?>                        <?= apenasGESTOR($p, 'admin/categoria', "Categorias (Galeria)", "fa-calculator"); ?>                        <?= apenasGESTOR($p, 'admin/galeria', "Galeria de Fotos", "fa-camera-retro"); ?>                        <?= apenasGESTOR($p, 'admin/chale', "Chalés", "fa-home"); ?>                        <li class="treeview">                            <a href="#">                                <i class="fa fa-file-archive-o"></i> <span>Configurações de Textos</span>                                <i class="fa fa-angle-left pull-right"></i>                            </a>                            <ul class="treeview-menu">                                <?= apenasADM($p, 'admin/texto/inserir/', "Inserir Texto", "fa-align-center"); ?>                                <?= apenasGESTOR($p, 'admin/textos/1', "Home", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/textos/2', "A Pousada", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/textos/3', "Chalés", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/textos/4', "Itabirito", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/textos/5', "Contato", "fa-circle-o"); ?>                            </ul>                        </li>                        <li class="treeview">                            <a href="#">                                <i class="fa fa-file-image-o"></i> <span>Configurações de Imagem</span>                                <i class="fa fa-angle-left pull-right"></i>                            </a>                            <ul class="treeview-menu">                                <?= apenasADM($p, 'admin/imagem/inserir/', "Inserir Imagem", "fa-image"); ?>                                <?= apenasGESTOR($p, 'admin/imagem/6', "Imagens Diversas", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/imagem/1', "Home", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/imagem/2', "A Pousada", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/imagem/3', "Chalés", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/imagem/4', "Itabirito", "fa-circle-o"); ?>                                <?= apenasGESTOR($p, 'admin/imagem/5', "Contato", "fa-circle-o"); ?>                            </ul>                        </li>                        <!--<li class="treeview">                            <a href="#">                                <i class="fa fa-file-image-o"></i> <span>Configurações de Imagens</span>                                <i class="fa fa-angle-left pull-right"></i>                            </a>                            <ul class="treeview-menu">                                <li><a href="ger_imagens.php?secao=1"><i class="fa fa-circle-o"></i>Home</a></li>                                <li><a href="ger_imagens.php?secao=2"><i class="fa fa-circle-o"></i>Sobre Nós</a></li>                                <li><a href="ger_imagens.php?secao=3"><i class="fa fa-circle-o"></i>Outdoor</a></li>                                <li><a href="ger_imagens.php?secao=4"><i class="fa fa-circle-o"></i>Contato</a></li>                                <li><a href="ger_imagens.php?secao=5"><i class="fa fa-circle-o"></i>Backbus</a></li>                            </ul>                        </li>                        <li><a href="ger-outdoor.php"><i class="fa fa-photo"></i>Gerenciar Outdoors</a></li>                        <li><a href="ger-regioes.php"><i class="fa fa-map-marker"></i>Gerenciar Regiões</a></li>                        <li><a href="ger_contato.php"><i class="fa fa-phone"></i>Informações de Contato</a></li>-->                    </ul>                </section>                           </aside>