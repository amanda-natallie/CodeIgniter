<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Gerenciamento de <?= $subtitle; ?>
            <small>Gerencie o(a)s <?= $subtitle; ?> de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url('admin/usuario');?>"><?= $title; ?></a></li>
            <li class="active"><?= $subtitle; ?></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Visualize aqui os <?= $subtitle; ?>s existentes</h3>
                        <a href="<?= base_url('admin/usuario/inserir');?>" class="btn btn-small pull-right btn-flat btn-primary">Inserir novo usuário</a>
                    
                    </div>

                    <div class="box-body">
                        
                        <table id="tabelinha" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th style="width:100px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usuarios as $cat) { ?>
                                    <tr>
                                        <td><?= $cat->user_id?></td>
                                        <td><?= $cat->user_nome?></td>
                                        <td>
                                            <a href="<?= base_url('admin/usuario/editar/'.$cat->user_id);?>" class="btn btn-flat btn-info"><i class="fa fa-edit"></i></a>
                                            <a onclick="deletar(<?= $cat->user_id; ?>)" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>#</th>
                                    <th>Nome</th>
                                    <th>Opções</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </section>
</div> 
<script>
    function deletar(id) {
            if (confirm("Deseja mesmo excluir?")) {
                window.location.href = "<?= base_url('admin/usuario/excluir/');?>" + id;
            }
        }
    
</script>    