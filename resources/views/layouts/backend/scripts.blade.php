
 <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{url('/admin_template/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('/admin_template/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/admin_template/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('/admin_template/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{url('/admin_template/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{url('/admin_template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('/admin_template/js/owl.carousel.js')}}" ></script>
    <script src="{{url('/admin_template/js/jquery.customSelect.min.js')}}" ></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!--common script for all pages-->
    <script src="{{url('/admin_template/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    <script src="{{url('/admin_template/js/sparkline-chart.js')}}"></script>
    <script src="{{url('/admin_template/js/easy-pie-chart.js')}}"></script>

 
    @yield('scripts')
    <!-- Select 2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#select2').select2({
      dir: "rtl",
      placeholder: "انتخاب گزینه",
      allowClear: true
    });
   
      });
     
    </script>
  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

<script type="module">
  import { Toast } from 'coreui.esm.min.js'

  Array.from(document.querySelectorAll('.toast'))
    .forEach(toastNode => new Toast(toastNode))
</script>
<script>

    var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
  new coreui.Alert(alert)
})
</script>


<script>
  $(function(e){
$("#select_all").click(function(){
$(".checkboxclass").prop('checked',$(this).prop('checked'));
  });
});

// # Delete All # //
  $('#deleteallselectedrecords').click(function(e){
e.preventDefault();
var allids = [];
$("input:checkbox[name=ids]:checked").each(function(){
allids.push($(this).val());
});
$.ajax({
url:"{{route('multipledelete')}}",
type:'DELETE',
data:{
  ids:allids,
_token:$("input[name=_token]").val()
},
success:function(response)
{
$.each(allids,function(key,val){
  $('#sid'+val).remove();
          });
        }

    });
  });


</script>


<!-- DataTable -->
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
      "language": {
        "decimal":        "",
    "emptyTable":     "موردی یافت نشد",
    "info":           "صفحه ی _START_ از _END_ تا _TOTAL_ مجموعه",
    "infoEmpty":      "صفحه ی 0 از 0  0 مجموعه",
    "infoFiltered":   "(نتیجه از _MAX_ مجموعه)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "نمایش _MENU_ مجموعه",
    "loadingRecords": "Loading...",
    "processing":     "در حال بارگزاری...",
    "search":         "جست و جو :",
    "zeroRecords":    "داده ای یافت نشد",
    "paginate": {
        "first":      "اولین",
        "last":       "آخرین",
        "next":       "بعدی",
        "previous":   "قیلی"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
        }
    });
} );
</script>

<!-- CkEditor -->
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
CKEDITOR.replace( 'summary-ckeditor',{
      language: 'fa',
         filebrowserImageBrowseUrl: "{{asset('admin/laravel-filemanager?type=Images')}}",
        filebrowserImageUploadUrl: "{{asset('admin/laravel-filemanager/upload?type=Images&_token=csrf_token()')}}",
        filebrowserBrowseUrl: "{{asset('admin/laravel-filemanager?type=Files')}}",
        filebrowserUploadUrl: "{{asset('admin/laravel-filemanager/upload?type=Files&_token=csrf_token()')}}"
} 

);
</script>




<!-- LoadImage(in setting.blade) -->
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);

};
</script>




 