@extends('layouts.master')
@section('title', 'Live Map')
<style>
	#map {
	height: 100%;
	width: 100%;
	}
</style>
@section('body')
<div id="map"></div>
<script>
	var list;
	function initMap() {
	  	var cameraPos = {lat: 41.2, lng: 2.5};
	  	var map = new google.maps.Map(document.getElementById('map'), {
	    	zoom: 6,
	    	center: cameraPos
	  	});
	
	  	var icon = {
			url: 'images/drone.png',
			scaledSize: new google.maps.Size(50,50)
		}	
		list = <?php echo $onlineflights; ?>;

		if(list){
			for (var drone in list){
			    var markerPos = {lat: list[drone].Lat, lng: list[drone].Lon};
			    var marker = new google.maps.Marker({
			      position: markerPos,
			      map: map,
			      animation: google.maps.Animation.DROP,
			      icon: icon,
			      title:list[drone].username
			    });
			    var content = list[drone].username+" is flying with a "+list[drone].drone;
			    var infowindow = new google.maps.InfoWindow()
			    google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
			     return function() {
			       infowindow.setContent(content);
			       infowindow.open(map, marker);
			     }
			 })(marker, content, infowindow));
			}
		}		    
	}
	
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd21KjkoMYZm_A3xlui58HtxXd5TW0J1k&callback=initMap"></script>
@endsection