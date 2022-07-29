
<!-- Javascript -->
<script src="{{asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('backend/assets/bundles/morrisscripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/ui/sortable-nestable.js')}}"></script>
<script src="{{asset('backend/assets/js/index.js')}}"></script>
<script src="{{asset('backend/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/tables/jquery-datatable.js')}}"></script>
<!-- summer note -->
<script src="{{asset('backend/assets/summernote/summernote.js')}}"></script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@yield('scripts')

<script>
    setTimeout(function(){
        $('#alert').slideUp();
    }, 2000 );
</script>
