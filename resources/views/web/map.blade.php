@extends('layouts.master')

@section('title', 'Index')
<style>
   #map {
    height: 100%;
    width: 100%;
   }

   .sidenav {
	    height: 100%; /* 100% Full-height */
	    width: 0; /* 0 width - change this with JavaScript */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Stay on top */
	    top: 0;
	    left: 0;
	    background-color: #111; /* Black*/
	    overflow-x: hidden; /* Disable horizontal scroll */
	    padding-top: 60px; /* Place content 60px from the top */
	    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
	}

	.sidenav .row {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: #818181;
	    display: block;
	    transition: 0.3s
	}
	.drone{
	    font-size: 15px;
	}

	hr.style1{
		width: 200px;
		border-top: 2px solid white;
	}

	.sidenav .row:hover, .offcanvas .row:focus{
	    color: #f1f1f1;
	    text-decoration: none;
	}

	.sidenav .closebtn {
	    position: absolute;
	    top: 0;
	    right: 25px;
	    font-size: 36px;
	    margin-left: 50px;
	}

	#main {
	    transition: margin-left .5s;
	    padding: 20px;
	}

	@media screen and (max-height: 450px) {
	    .sidenav {padding-top: 15px;}
	    .sidenav .row {font-size: 18px;}
	}
</style>
<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
</script>
@section('livedrones')
	<span onclick="openNav()">open</span>
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
@stop

@section('body')
    <div id="mySidenav" class="sidenav">
  		<div class="row">
  		ONLINE FLIGHTS
  		</div>
      	@foreach($onlineflights as $drone)
      		<div class="row">
      			{{$drone->username}}
      			</br>
      			<div class="drone">
      				{{$drone->drone}}
      			</div>
      		</div>		
		@endforeach
    </div>

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