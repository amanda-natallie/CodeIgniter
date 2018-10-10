<div class="content-wrapper">   
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 160px">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrar no sistema</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('admin/usuarios/login');
                        ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="user-usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="user-senha" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Entrar</button>
                            </fieldset>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>