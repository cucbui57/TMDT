    </section>
</div>
    <?php
      include("main-footer.php");
   ?>
  </div>

<script src="<?php echo URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo URL; ?>jquery-ui/jquery-ui.js"></script>
<script src="<?php echo URL; ?>js/main.js"></script>
<script src="<?php echo URL; ?>jquery-confirm/dist/jquery-confirm.min.js"></script>

<script>
  function getDistrict(id, tmp, target){
    $("#ward_id").html('<option value="">---Chọn---</option>');
    $.post("<?php echo URL."nguoidung/" ?>getdistrict", {'id':id, 'tmp':tmp}, function(data) {
      $("#"+target).html(data);
    });
  }
  function getWard(id, tmp, target){
    $.post('<?php echo URL."nguoidung/" ?>getward', {'id':id, 'tmp':tmp}, function(data) {
      $("#"+target).html(data);
    });
  }
</script>

<?php if(isset($user)) { ?>
  <script>
        var myFunc = function() {
      if($("#province_id").val() != ""){
        getDistrict($("#province_id").val(), <?php echo $user[0]->district_id ?>, "district_id");
      }
    }();
  </script>
<?php } ?>

<script>
    $(document).ready(function() {

    $("#birthday").datepicker({
      autoSize: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
      maxDate: 0,
      minDate: new Date(1900, 1 - 1, 1),
      yearRange: "1900:+nn",
      dayNamesShort: [ "CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy" ],
      dayNamesMin: [ "CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy" ],
      monthNames: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
      monthNamesShort: [ "Thg1", "Thg2", "Thg3", "Thg4", "Thg5", "Thg6", "Thg7", "Thg8", "Thg9", "Thg10", "Thg11", "Thg12" ],
      defaultDate: new Date(2018, 1 - 1, 1),
      firstDay: 1
    }) ;
  });
</script>

<?php if(isset($user)) { ?>
<script>
  $(document).ready(function() {
      var myFunc2 = function() {
      if($("#district_id").val() != ""){
        getWard($("#district_id").val(), <?php echo $user[0]->ward_id ?>, "ward_id");
      }
    }();
    });
</script>
<?php } ?>

<!-- 
<script>
  var host = window.location.href;//backend
host = host.split("admin");
host[0] = host[0] + 'admin/';

  tinymce.init({
    selector: "textarea",theme: "modern",width: 680,height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
     external_filemanager_path:host[0]+"plugins/responsive_filemanager/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
     external_plugins: { "filemanager" : host[0]+"plugins/responsive_filemanager/filemanager/plugin.min.js"},
 });
</script> -->
</body>
</html>