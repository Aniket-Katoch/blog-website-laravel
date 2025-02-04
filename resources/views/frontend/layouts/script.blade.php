@extends('frontend.layouts.master')

@section('script')

    <!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9rV6yesIygoVKTD6QLf_iCa9eiIIHqZ0&libraries=geometry">
</script>
<!-- Vendor JS -->
<script src="{{asset('frontendtemplate/vendor/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('frontendtemplate/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontendtemplate/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('frontendtemplate/vendor/g-map/gmap.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('frontendtemplate/js/script.js')}}"></script>
@endsection