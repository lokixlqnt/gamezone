@extends('layouts.app')

@section('title', 'Plan')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>
@section('content')

 <div id="map" style="height: 50vh; width: auto;">
   <script type="text/javascript">

    var map = L.map('map', {
        maxZoom: 10,
        minZoom: 0,
        continuousWorld: false,
        noWrap: true,
        zoomControl: false,

        crs: L.CRS.Simple
    }).setView([0, 0], 0);

    map.setMaxBounds(new L.LatLngBounds([0,0], [0,0]));

    var imageUrl = 'https://i.ibb.co/z2cks9R/00-le-plan-vierge.jpg';
    var imageBounds = [3508,2580] ;

    L.imageOverlay(imageUrl, imageBounds).addTo(map);

   </script>
 </div>

@endsection
