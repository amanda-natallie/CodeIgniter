 <div class="st--blog--area sp">
                <div class="container">
                    <div class="row">
<div class="col-md-8 st--post--column">
    <div class="row">
        <div class="col-sm-12">
            <div class="st--block--title--1">
                <h3>Posts Recentes</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($destaques as $not) { 
            $url_post = base_url("noticia/" . $not->post_id . "/". limpar($not->post_titulo));
            ?>
        <div class="col-sm-12 st--single--post--2 clearfix">
            <div class="row">
                <div class="st--post--left relative col-sm-6 post--height--2 flex_center">
                    <div class="st--inner">
                        <div class="st--post--img">
                            <img src="assets/frontend/assets/img/post--9.jpg" alt="">
                        </div>
                        <a href="<?= $url_post ?>" class="st--tags st--sticky--cat--1"><?= $not->post_titulo; ?></a>
                    </div>
                </div>
                <div class="st--post--content col-sm-6 post--height--2 flex_center">
                    <div class="st--inner st--content--box">
                        <h4><a href="<?= $url_post ?>"><?= $not->post_titulo; ?></a></h4>
                        <div class="st--post--meta st--info">
                            <span class="posted-by">
                                Posted by <a href="<?= $url_post ?>" class="st--author"><?= $not->user_nome; ?></a>
                            </span>
                            <span class="post-date">
                                <a href="<?= $url_post ?>"><?= gerarData($not->post_data); ?></a>
                            </span>
                        </div>
                        <p><?= limita_caracteres($not->post_conteudo, 50); ?></p>
                        <a href="<?= $url_post ?>" class="st--button">Ler noticia completa <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="st--pagination--1">
        <ul>
            <li><a href="#">1</a></li>
            <li><span>2</span></li>
            <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
        </ul>
    </div>
</div>
