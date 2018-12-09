<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gerenciamento de Chalés
            <small>Cadastrar Tarifa</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            <p>Atenção: Caso deseje omitir alguma informação, coloque um traço "-" no campo. </p>
                        </div>
                        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <form action="<?= base_url(); ?>admin/chale/tarifas/cadastrar/<?= $id ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="tar_quarto" id="tar_quarto" value="<?= $id ?>">
                            <div class="form-group col-md-4">
                                <label for="tar_periodo">Período do Ano</label>
                                <input type="text" class="form-control" id="tar_periodo" name="tar_periodo" placeholder="Ex.: Primavera/Verão">
                            </div> 
                            <div class="form-group col-md-4">
                                <label for="tar_dias">Período do Ano (em dias)</label>
                                <input type="text" class="form-control" id="tar_dias" name="tar_dias" placeholder="Ex.: 1/Jun - 31/Ago">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tar_minimopernoite">Mínimo/Máximo de Pernoites por Pessoa</label>
                                <input type="text" class="form-control" id="tar_minimopernoite" name="tar_minimopernoite" placeholder="Ex.: Mínimo de 3 pernoites">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tar_diaria">Valor da taxa Diária</label>
                                <input type="text" class="form-control" id="tar_diaria" name="tar_diaria" placeholder="Ex.: R$320,00">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tar_semanal">Valor da taxa Semanal </label>
                                <input type="text" class="form-control" id="tar_semanal" name="tar_semanal" placeholder="Ex.: R$320,00">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tar_mensal">Valor da taxa Mensal</label>
                                <input type="text" class="form-control" id="tar_mensal" name="tar_mensal" placeholder="Ex.: R$320,00">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tar_eventos">Valor da taxa para Eventos</label>
                                <input type="text" class="form-control" id="tar_eventos" name="tar_eventos" placeholder="Ex.: R$320,00">
                            </div>

                            <div class="box-footer">
                                <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Cadastrar">
                                <a href="<?= base_url("admin/chale/tarifas/" . $id); ?>"  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de <?= $subtitle; ?></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>