@extends('layouts.app')

@section('title')
About Us
@endsection

@section('style')
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>
@endsection

@section('content')
<table style="font-family: Arial; width: 200px;">
    <tr>
        <td>Hongming Lin</td>
        <td>12751172</td>
    </tr>
    <tr>
        <td>Zihang Yang</td>
        <td>12107482</td>
    </tr>
    <tr>
        <td>Hanze Liu</td>
        <td>12509446</td>
    </tr>
</table>

<div id="map"></div>
<script>
    function initMap() {
        var uluru = {lat: -33.8832379, lng: 151.2004942};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7z4Tz8Dv_6I7mXRkVA9KbCvkD6dMfbAg&callback=initMap">
</script>
@endsection
