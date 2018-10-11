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
                            <label for="cat-nome">Nome</label>
                            <input type="text" class="form-control" id="cat-nome" name="user_nome" placeholder="Digite o nome do Usuário">
                        </div>
                        <div class="form-group">
                            <label for="cat-nome">E-mail (será usado como login)</label>
                            <input type="text" class="form-control" id="cat-nome" name="user_email" placeholder="Digite o e-mail do usuário">
                        </div>
                        <div class="form-group">
                            <label for="cat-nome">Senha</label>
                            <input type="password" class="form-control" id="cat-nome" name="user_senha" placeholder="Digite a senha do usuário">
                        </div>
                        <?php if($permissao == 1) { ?>
                        <div class="form-group">
                            <label for="cat-nome">Permissão do Usuário</label>
                            <select class="form-control" id="user_permissao" name="user_permissao">
                                <option value="">--selecione um --</option>
                                <option value="1">Administrador Geral</option>
                                <option value="2">Gerente de Conteudo</option>
                                <option value="3">Autor do Blog</option>
                            </select>
                        </div>
                        <?php }else if($permissao == 2){ ?>
                        <input type="hidden" name="user_permissao" value="2">
                        <?php } else if($permissao == 3){ ?>
                        <input type="hidden" name="user_permissao" value="3">
                        <?php }?>
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