@extends('layouts.app')

@section('title', 'Plan')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>
@section('content')

 <div id="mapid" style="height: 50vh;">
   <script type="text/javascript">
   var map = L.map('map', {
   crs: L.CRS.Simple
});
var bounds = [[0,0], [1000,1000]];
var image = L.imageOverlay('plan.jpg', bounds).addTo(map);
map.fitBounds(bounds);
   </script>
 </div>

@endsection
