  
            <header class="header st--header-1">
                <div class="header--top"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="header--left">
                                    <li><a href="#">Contato</a></li>
                                    <li><a href="#">Sobre Nós</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="header--right">
                                    <li>
                                        <a href="#" class="zmdi zmdi-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="zmdi zmdi-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="zmdi zmdi-behance"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="zmdi zmdi-dribbble"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="zmdi zmdi-linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="zmdi zmdi-vk"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="zmdi zmdi-google-plus"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo--area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 logo--column">
                                <a href="#" class="logo"><img src="assets/frontend/assets/img/logo.png" alt=""></a>
                            </div>
                            <div class="col-md-8 ads--column--1">
                                <a href="#" class="header--ads">
                                    <img src="assets/frontend/assets/img/ads--1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu--area header--bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 menu--column">
                                <nav class="main_menu">
                                    <ul>
                                        <li><a href="<?= base_url(); ?>">Home</a></li>
                                        <?php foreach($categorias as $cat){
                                           echo ' <li><a href="'. base_url("categoria/".$cat->cat_id. "/". limpar($cat->cat_nome)).'">'.$cat->cat_nome.'</a></li>';
                                         } ?>                                   
                                        <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                                    </ul>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>

           