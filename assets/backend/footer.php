<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>
</div>
<script src="components/jquery/dist/jquery.min.js"></script>
<script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="components/select2/dist/js/select2.full.min.js"></script>
<script src="components/input-mask/jquery.inputmask.js"></script>
<script src="components/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="components/input-mask/jquery.inputmask.extensions.js"></script>
<script src="components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="components/fastclick/lib/fastclick.js"></script>
<script src="components/ckeditor/ckeditor.js"></script>
<script src="components/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="components/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="js/adminlte.min.js"></script>
<script src="js/demo.js"></script>
<script>
  $(function () {
    $('.select2').select2();
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    $('[data-mask]').inputmask();
  });
    $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
        });
    });
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })    
</script>
</body>
</html>
