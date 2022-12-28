
<!-- container-scroller -->
<!-- plugins:js -->
{{--<script src="{{ asset('adminassets') }}/assets/vendors/js/vendor.bundle.base.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<script src="{{ asset('adminassets') }}/assets/vendors/chart.js/Chart.min.js"></script>--}}
{{--<!-- End plugin js for this page -->--}}
{{--<!-- inject:js -->--}}
{{--<script src="{{ asset('adminassets') }}/assets/js/off-canvas.js"></script>--}}
{{--<script src="{{ asset('adminassets') }}/assets/js/hoverable-collapse.js"></script>--}}
{{--<script src="{{ asset('adminassets') }}/assets/js/misc.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Custom js for this page -->--}}
{{--<script src="{{ asset('adminassets') }}/assets/js/dashboard.js"></script>--}}
{{--<script src="{{ asset('adminassets') }}/assets/js/todolist.js"></script>--}}
<!-- <script src="{{ asset('table/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('table/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

<!-- Core plugin JavaScript-->
{{--<script src="{{ asset('table/jquery-easing/jquery.easing.min.js') }}"></script>--}}
{{--<script src="{{ asset('table/datatables/jquery.dataTables.min.js') }}"></script>--}}
{{--<script src="{{ asset('table/datatables/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--<script src="{{ asset('swal/dist/sweetalert2.min.js') }}"></script>--}}
<!-- End custom js for this page -->
@if(session('status'))
    <script type="text/javascript">
        Swal.fire({
            title: 'Horee ...',
            icon: 'success',
            text: '{{ session("status") }}',
            showClass: {
                popup: 'animated bounceInDown slow'
            },
            hideClass: {
                popup: 'animated bounceOutDown slow'
            }
        })
    </script>
@endif
<script>

    var t = $('#table').DataTable({
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],
        "language" : {
            "sProcessing" : "Sedang memproses ...",
            "lengthMenu" : "Tampilkan _MENU_ data per halaman",
            "zeroRecord" : "Maaf data tidak tersedia",
            "info" : "Menampilkan _PAGE_ halaman dari _PAGES_ halaman",
            "infoEmpty" : "Tidak ada data yang tersedia",
            "infoFiltered" : "(difilter dari _MAX_ total data)",
            "sSearch" : "Cari",
            "oPaginate" : {
                "sFirst" : "Pertama",
                "sPrevious" : "Sebelumnya",
                "sNext" : "Selanjutnya",
                "sLast" : "Terakhir"
            }
        }
    });
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

</script>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('/sb-admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/sb-asmin/js/sb-admin-2.min.js')}}"></script>
