<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gerenciamento de Slides
            <small>Cadastrar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gerenciamento de Slides</a></li>
            <li class="active">Cadastrar</li>
        </ol>
    </section>
    <section class="content">

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= validation_errors('<div class="alert alert-danger">', '</div>');
                      
                        ?>
                        <form action="<?= base_url(); ?>admin/slide/cadastrar" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <h4>Titulos Do Slide (utilize expressões curtas)</h4>
                            <div class="col-md-6" >
                                <label for="sli_titulo1">Titulo 1</label>
                                <input type="text" class="form-control" id="sli_titulo1" name="sli_titulo1" placeholder="Primeiro Titulo">
                            </div>
                            <div class="col-md-6"  >
                                <label for="sli_titulo4">Titulo 4</label>
                                <input type="text" class="form-control" id="sli_titulo4" name="sli_titulo4" placeholder="Quarto Titulo">
                            </div>
                            
                            
                            
                            <div class="clearfix" style="margin-top: 10px"></div>
                            <div class="col-md-6" >
                                <label for="sli_titulo2">Titulo 2</label>
                                <input type="text" class="form-control" id="sli_titulo2" name="sli_titulo2" placeholder="Segundo Titulo">
                            </div>
                            <div class="col-md-6">
                                <label for="sli_titulo5">Titulo 5</label>
                                <input type="text" class="form-control" id="sli_titulo4" name="sli_titulo5" placeholder="Quarto Titulo">
                            </div> 
                            
                            <div class="col-md-6" >
                                <label for="sli_titulo3">Titulo 3</label>
                                <input type="text" class="form-control" id="sli_titulo3" name="sli_titulo3" placeholder="Terceiro Titulo">
                            </div>
                            
                            <div class="col-md-12">
                                <h4>Disposição dos titulos:</h4>
                                <img src="<?= base_url("assets/upload/padrao_slide.png")?>" class="img-responsive">
                            </div>
                        </div>
                        <div class="clearfix" style="margin-top: 10px"><hr></div>
                        <div class="form-group" style="margin-top: 40px">
                            <h4>Botão de Ação do Slide</h4>
                            <div class="col-md-6" >
                                <label for="sli_botao_titulo">Titulo do Botão</label>
                                <input type="text" class="form-control" id="sli_botao_titulo" name="sli_botao_titulo" placeholder="Primeiro Titulo">
                            </div>
                            <div class="col-md-6" >
                                <label for="sli_botao_link">Link de Ação do Botão</label>
                                <input type="text" class="form-control" id="sli_botao_link" name="sli_botao_link" placeholder="Primeiro Titulo">
                            </div>
                        </div>
                        <div class="clearfix" style="margin-top: 10px"><hr></div>
                        <div class="form-group" style="margin-top: 30px">
                            <h4>Imagem de Background Do Slide - 1280x1200px e no máximo 200kb</h4>
                            <div class="col-md-12">
                                <label class="control-label">Imagem:</label>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="https://placehold.it/350x260&text=Imagem" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file btn-info"><span class="fileupload-new">Selecione a imagem</span>
                                                <span class="fileupload-exists ">Alterar</span>
                                                <input type="file" class="default" name="sli_imagem" id="sli_imagem" /></span>
                                            <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">Remover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix" style="margin-top: 10px"></div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Cadastrar">
                            <a href="<?= base_url("admin/slide")?>"  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de <?= $subtitle; ?></a>
                        </div>
                       </form>
                    </div>
                </div>

            </div>
        </div>

</div>