<?php require 'header-menu.php'; ?>
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

        <div class="box box-default">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select2</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Multiple select2</label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                    style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label>Date masks:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that&mdash;be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Option three is disabled
                    </label>
                  </div>
                </div>
                        <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 1
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 2
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled>
                      Checkbox disabled
                    </label>
                  </div>
                </div>
                        <div class="form-group">
                            <label>US phone mask:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>CK Editor:</label>
                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                              This is my textarea to be replaced with CKEditor.
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>WYSY HTML5</label>
                            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>


                        <div class="form-group">
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
                                            <input type="file" class="default" name="sli_imagem" id="imagem1" /></span>
                                        <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                            <a href=""  class="btn btn-danger btn-flat" >Voltar para o gerenciamento de Slides</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

</div>




</section>

</div>

<?php require 'footer.php'; ?>