<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gerenciamento de Fotos de Chalé
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <form action="<?= base_url(); ?>admin/chale/fotos/cadastrar/<?= $id ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="foq_quarto" value="<?= $id ?>">
                            <div class="form-group col-md-12">

                                <label for="foq_titulo">Descrição da Foto</label>
                                <input type="text" class="form-control" id="foq_titulo" name="foq_titulo" placeholder="Nome/titulo do quarto">
                            </div>

                            <div class="form-group col-md-12">
                                <h4>Foto - Tamanho livre e no máximo 200kb</h4>
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
                                                <input type="file" class="default" name="foq_imagem" id="foq_imagem" /></span>
                                            <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">Remover</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="box-footer">
                                <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Cadastrar">
                                <a href="<?= base_url("admin/chale/fotos/" . $id) ?>"  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de <?= $subtitle; ?></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


</div>
</div>

</div>