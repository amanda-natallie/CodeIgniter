<section class="section bg-parallax bg-room" style="background: url(<?= $img[11]?>) bottom center no-repeat; background-size:cover">        <div class="container">            <div class="row">                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">                    <h3><?= $txt[32] ?></h3>                </div>            </div>        </div>    </section>     <section class="section">        <div class="container">            <div class="room-page room-modem">                <div class="row">                    <?php foreach($chales as $cha){ ?>                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                        <div class="post ef-width">                            <div class="post-media">                                <img src="<?= base_url($cha['cha_imagem'])?>" alt="" />                                <a href="<?= base_url("chale/" .$cha['cha_id'] ."/". limpar($cha['cha_nome']))?>" class="overlay"><span class="fa fa-search"></span></a>                            </div>                                                        <div class="post-body">                                <h2><a href="<?= base_url("chale/" .$cha['cha_id'] ."/". limpar($cha['cha_nome']))?>"><?= $cha['cha_nome']; ?></a></h2>                                <div class="post-content">                                    <p data-number-line="3"><?= $cha['cha_resumo']; ?></p>                                </div>                                <div class="post-footer">                                    <p class="price">                                       <?= $cha['cha_diaria']; ?><span class="small">/ Diária</span>                                    </p>                                    <a href="<?= base_url("chale/" .$cha['cha_id'] ."/". limpar($cha['cha_nome']))?>" class="btn btn-classic">Ver detalhes do Quarto<span class="icon-btn-arrow"><span class="inner">&nbsp;</span></span></a>                                </div>                            </div>                        </div>                    </div>                            <?php } ?>                </div>            </div>        </div>    </section>