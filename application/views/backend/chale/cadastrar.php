<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gerenciamento de Slides
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <form action="<?= base_url(); ?>admin/chale/cadastrar" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="col-md-6" >
                                    <label for="cha_nome">Nome/Titulo do quarto</label>
                                    <input type="text" class="form-control" id="cha_nome" name="cha_nome" placeholder="Nome/titulo do quarto">
                                </div>
                                <div class="col-md-6"  >
                                    <label for="cha_diaria">Valor diário padrão</label>
                                    <input type="text" class="form-control" id="cha_diaria" name="cha_diaria" placeholder="ex.: R$250,00/diária ou R$250,00/pernoite">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="cha_resumo">Resumo</label>
                                <textarea type="text" class="form-control ckeditor" id="cha_resumo" name="cha_resumo" placeholder="Breve Resumo"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="cha_descricao">Descrição</label>
                                <textarea type="text" class="form-control ckeditor" id="cha_descricao" name="cha_descricao" placeholder="Descrição completa"></textarea>
                            </div>
                            <div class="clearfix" style="margin-top: 10px"><hr></div>
                            <div class="form-group" style="margin-top: 30px">
                                <h4>Imagem de Capa do Chalé - 585x425 px e no máximo 200kb</h4>
                                <div class="col-md-12">
                                    <label class="control-label">Imagem:</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 450px; height: 360px;">
                                                <img src="https://placehold.it/450x360&text=Imagem" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-file btn-info"><span class="fileupload-new">Selecione a imagem</span>
                                                    <span class="fileupload-exists ">Alterar</span>
                                                    <input type="file" class="default" name="cha_imagem" id="cha_imagem" /></span>
                                                <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">Remover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix" style="margin-top: 10px"></div>
                            <div class="box-footer">
                                <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Cadastrar">
                                <a href="<?= base_url("admin/chale") ?>"  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de <?= $subtitle; ?></a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

</div>