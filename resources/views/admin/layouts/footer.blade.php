
<!-- Javascripts -->
<script src="{{ asset('admin-assets/assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>

<!--  datepicke plugin -->
<script src="{{asset('admin-assets/assets/plugins/jQueryUI/jquery-ui.js')}}"></script>


{{--map--}}
@stack('location-picker')
<script src="{{ asset('admin-assets/assets/plugins/materialize/js/materialize.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/counter-up-master/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/chart.js/chart.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/curvedlines/curvedLines.js')}}"></script>
<script src="{{ asset('admin-assets/assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ asset('admin-assets/assets/js/alpha.min.js')}}"></script>
<!--        <script src="{{ asset('admin-assets/assets/js/pages/dashboard.js')}}"></script>-->
<script src="{{ asset('admin-assets/assets/js/ajax.js')}}"></script>
<script src="{{ asset('admin-assets/assets/js/pages/form_elements.js')}}"></script>
{{--<script src="{{asset('admin-assets/assets/plugins/sweetalert/')}}/sweetalert-dev.js"></script>--}}
<script src="{{asset('admin-assets/assets/plugins/sweetalert/')}}/sweetalert.min.js"></script>
{{--<script type="text/javascript" src="{{ asset('admin-assets/ckeditor/ckeditor.js')}}"></script>--}}
<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
<script src="{{asset('admin-assets/project/js/script.js')}}"></script>



{{--@include('sweet::alert')--}}



</body>
</html>
