<script src="{{url('')}}/admin/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/jekyll-search.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/charts/Chart.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="{{url('')}}/admin/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{url('')}}/admin/assets/plugins/toastr/toastr.min.js"></script>
<script src="{{url('')}}/admin/assets/js/sleek.bundle.js"></script>
<script src="{{url('')}}/admin/assets/plugins/data-tables/jquery.datatables.min.js"></script>
<script src="{{url('')}}/admin/assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>
<script src="{{ url('') }}/admin/assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="{{ url('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@yield('js')
<script>
    $('.datepicker').datepicker({
			format: 'yyyy-mm-dd'
		});
        $("a.delete").on("click", function () {
			event.preventDefault();
			var orderId = $(this).attr('order-id');

			if (confirm("Do you want to remove this?")) {
				document.getElementById('delete-form-' + orderId ).submit();
			}
		});

		$(".restore").on("click", function () {
			return confirm("Do you want to restore this?");
		});
        $(".delete").on("submit",function(){
         return confirm ("Do ypu want to remove this?");
     });
    @if (Session::has('swalsukses'))
          swal("{{ Session::get('swalsukses') }}", {
                    buttons: false,
                    icon: 'success',
                    timer: 1500,
                });
     @endif
     @if (Session::has('swalerror'))
          swal("{{ Session::get('swalerror') }}", {
                    buttons: false,
                    icon: 'error',
                    timer: 1500,
                });
     @endif
     function showHideConfigurableAttributes() {
        var productType = $(".product-type").val();

        if (productType == 'configurable') {
            $(".configurable-attributes").show();
        } else {
            $(".configurable-attributes").hide();
        }
    }

    $(function(){
        showHideConfigurableAttributes();
        $(".product-type").change(function() {
            showHideConfigurableAttributes();
        });
    });
</script>
</body>
</html>
