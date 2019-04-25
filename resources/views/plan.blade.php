@extends('layouts.app')

@section('title', 'Plan')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>
@section('content')

 <div id="map" style="height: 50vh;min-height: 800px;width: 100%;"></div>
   <script type="text/javascript">

    var map = L.map('map', {
    //    maxZoom: 0,
      //  minZoom: 0,
      //  zoom:2,
        //continuousWorld: false,
        noWrap: true,
        zoomControl: false,
        crs: L.CRS.Simple
    });

    // map.fitWorld([3508,2580], 0);

    //map.setMaxBounds(new L.LatLngBounds([0,0], [0,0]));
    var bounds = [[0,0], [2500,3500]];
  //  var imageUrl = '{{ url('img/plan.jpg') }}';
  //  var imageBounds = [0,0] ;

  //  L.imageOverlay(imageUrl, imageBounds).addTo(map);
    var image = L.imageOverlay('{{ url('img/plan.jpg') }}', bounds).addTo(map);
    map.fitBounds(bounds);
   </script>


@endsection
