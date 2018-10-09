<div class="col-md-4 st--sidebar--column">

                            <aside class="widget st--widget">
                                <div class="st--widget--title">
                                    <h4>Trending Posts</h4>
                                </div>
                                <div class="st--widget--carousel--1">
                                    <div class="st--single">
                                        <div class="st--inner">
                                            <img src="assets/frontend/assets/img/widget--carousel--1.jpg" alt="">
                                            <div class="st--content">
                                                <a href="#" class="st--tags">Sports</a>
                                                <h5><a href="#">Barca win the El-clasico. for Messi...</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="st--single">
                                        <div class="st--inner">
                                            <img src="assets/frontend/assets/img/widget--carousel--2.jpg" alt="">
                                            <div class="st--content">
                                                <a href="#" class="st--tags bg-2">Techonology</a>
                                                <h5><a href="#">Barca win the El-clasico. for Messi...</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- /.widget -->

                            <aside class="widget st--widget">
                                <a href="#" class="st--widget-ads">
                                    <img src="assets/frontend/assets/img/ads--2.jpg" alt="">
                                </a>
                            </aside>
                            <!-- /.widget -->

                            <aside class="widget st--widget">
                                <div class="st--widget--title">
                                    <h4>Follow Us</h4>
                                </div>
                                <div class="st--social-follow">
                                    <a href="#" class="st--button--2 st--button facebook-bg"><i class="zmdi zmdi-facebook"></i> 2.1k Fans</a>
                                    <a href="#" class="st--button--2 st--button twitter-bg"><i class="zmdi zmdi-twitter"></i> 811 Followers</a>
                                    <a href="#" class="st--button--2 st--button pinterest-bg"><i class="zmdi zmdi-pinterest"></i> 1.5k Fans</a>
                                    <a href="#" class="st--button--2 st--button instagram-bg"><i class="zmdi zmdi-instagram"></i> 5.2k Followers</a>
                                    <a href="#" class="st--button--2 st--button vk-bg"><i class="zmdi zmdi-vk"></i> 940k Followers</a>
                                    <a href="#" class="st--button--2 st--button youtube-bg"><i class="zmdi zmdi-youtube"></i> 2.2k Subscriber</a>
                                </div>
                            </aside>
                            <!-- /.widget -->

                            <aside class="widget  st--widget">
                                <div class="st--widget--title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="st--widget--inner--box">
                                    <ul>
                                       <?php foreach($categorias as $cat){
                                           echo ' <li><a href="'. base_url("categoria/".$cat->cat_id. "/". limpar($cat->cat_nome)).'">'.$cat->cat_nome.'</a></li>';
                                         } ?>     
                                    </ul>
                                </div>
                            </aside>
                            <!-- /.widget -->

                        </div>