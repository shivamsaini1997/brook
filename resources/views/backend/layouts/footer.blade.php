<footer class="main-footer">
    <strong>Copyright &copy; 2024-2025 <a href="#">Banizzo</a></strong>
    All rights reserved.

</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="{{url('backend/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{url('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('backend/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{url('backend/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{url('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{url('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{url('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{url('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{url('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
{{-- <script src="{{url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> --}}
{{-- <script src="{{url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> --}}
<script src="{{url('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{url('backend/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{url('backend/js/adminlte2167.js')}}?v=3.2.0"></script>

<script src="{{url('backend/js/demo.js')}}"></script>

<script src="{{url('backend/js/pages/dashboard.js')}}"></script>


<script>
    // {{-- // Display success message --}}
@if(session('success'))
    toastr.success('{{ session('success') }}');
@endif

// {{-- // Display error message --}}
@if(session('error'))
    toastr.error('{{ session('error') }}');
@endif
</script>
</body>


</html>
