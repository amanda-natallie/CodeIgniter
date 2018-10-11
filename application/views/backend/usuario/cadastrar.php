<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Advanced Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>
    <section class="content">

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">

                        <?php
                        echo validation_errors('<div class="alert alert-danger">', '</div>');
                        echo form_open('admin/usuarios/inserir');
                        ?>
                        <div class="form-group">
                            <label for="cat-nome">Nome da categoria</label>
                            <input type="text" class="form-control" id="cat-nome" name="cat-nome" pla ceholder="Digite o nome da Categoria">
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Cadastrar">
                            <a href="<?= base_url("admin/usuarios");?>"  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de <?= $subtitle; ?></a>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
</div>