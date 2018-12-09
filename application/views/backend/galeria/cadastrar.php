<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gerenciamento de Galeria de Fotos
            <small>Cadastrar</small>
        </h1>

    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <form action="<?= base_url(); ?>admin/galeria/cadastrar" method="post" enctype="multipart/form-data">
                            <div class="form-group col-md-4" style="margin-top: 30px">
                               
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
                                                    <input type="file" class="default" name="gal_imagem" id="gal_imagem" /></span>
                                                <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">Remover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 box-body" style="margin-top: 20px">

                                <div class="form-group ">
                                    <label for="gal_titulo">Titulo da Imagem</label>
                                    <input type="text" class="form-control" id="gal_titulo" name="gal_titulo" placeholder="titulo da imagem">
                                </div>

                                <div class="form-group">
                                    <label for="gal_categoria">Categoria da imagem</label>
                                    <select class="form-control" id="gal_categoria" name="gal_categoria">
                                        <option>-- Selecione um --</option>
                                        <?php
                                        foreach ($categorias as $categoria) {
                                            echo '<option value="' . $categoria->cat_id . '">' . $categoria->cat_nome . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box-footer">  <h4>Atenção: Tamanho máximo 200kb</h4>
                                <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Cadastrar">

                                <a href="<?= base_url("admin/galeria") ?>"  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de <?= $subtitle; ?></a>

                            </div>

                        </form>

                    </div>

                </div>



            </div>

        </div>



</div>