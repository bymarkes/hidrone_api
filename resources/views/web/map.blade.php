@extends('layouts.master')

@section('title', 'Live Map')
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
	    background-color: #05272E; /* Black*/
	    overflow-x: hidden; /* Disable horizontal scroll */
	    padding-top: 60px; /* Place content 60px from the top */
	    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
	}

	.sidenav .row {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: white;
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
	    color: #19BDDE;
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
	#social {
	  margin-left: 20px;
	  text-align: center;
	}

	.smGlobalBtn{ /* global button class */
	    display: inline-block;
	    cursor: pointer;
	    width: 8%;
	    padding: 0px;
	    text-decoration: none;
	    text-align: center;
	    vertical-align: middle;
	    color: #fff;
	    font-size: 15px;
	    font-weight: normal;
	    line-height: 2em;
	    position: fixed; 
    	top: 9%; 
    	right: 0.5%;
	    background: #DF4444;
	}

</style>
<script>
	function openNav() {
		if(document.getElementById("mySidenav").style.width == "250px"){
	    	document.getElementById("mySidenav").style.width = "0";
		}else{
	    	document.getElementById("mySidenav").style.width = "250px";
		}
	}
</script>
@section('livedrones')
	<div id="social">
		<span class="smGlobalBtn" onclick="openNav()">LIVE FLIGHTS</span>
	</div>
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

<div id="map">
</div>

<script>
	var list;
	var markersListOld = [];
	var markersListNew;
	var map;
	var icon;
	function initMap() {
	  	var cameraPos = {lat: 41.2, lng: 2.5};
	  	map = new google.maps.Map(document.getElementById('map'), {
	    	zoom: 6,
	    	center: cameraPos
	  	});
	
	  	icon = {
			url: 'images/drone.png',
			scaledSize: new google.maps.Size(50,50)
		}	
		list = <?php echo $onlineflights; ?>;

		putMarkers(list, map, icon);		    
	}

	var HttpClient = function() {
	    this.get = function(aUrl, aCallback) {
	        var anHttpRequest = new XMLHttpRequest();
	        anHttpRequest.onreadystatechange = function() { 
	            if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
	                aCallback(anHttpRequest.responseText);
	        }
	        anHttpRequest.open( "GET", aUrl, true );            
	        anHttpRequest.send( null );
	    }
	}
	
	
	var myVar = setInterval(myTimer, 2000);
	function myTimer() {	 
		var client = new HttpClient();
		client.get('http://hidroneapi.azurewebsites.net/api/onlineflights', function(response) {
			var listGet = JSON.parse(response);
		    markersListNew = listGet.data;
			console.log("xx "+markersListNew.length)
			compareMarkers(markersListOld, markersListNew);
		});
	}

	function putMarkers(list, map, icon){
		if(list){
			for (var i in list){
			    var markerPos = {lat: list[i].Lat, lng: list[i].Lon};
			    var marker = new google.maps.Marker({
			      position: markerPos,
			      map: map,
			      animation: google.maps.Animation.DROP,
			      icon: icon,
			      title:list[i].username,
			      bdId: list[i].id
			    });
			    markersListOld.push(marker);
			    var content = list[i].username+" is flying with a "+list[i].drone;
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

	function compareMarkers(oldMarkers, newMarkers){
		var newMarkersToAdd = new Array();

		for (var i in newMarkers){
			var found = false;
			for (var j in oldMarkers){
				if(newMarkers[i].id == oldMarkers[j].bdId){
					var latlng = {lat: newMarkers[i].Lat, lng: newMarkers[i].Lon};
					oldMarkers[j].setPosition(latlng);
					found = true;
				}
				if (found){
					break;
				}
			}
			if (!found){
				newMarkersToAdd.push(newMarkers[i]);
			}
		}
		if (newMarkersToAdd.length>0){
			putMarkers(newMarkersToAdd, map, icon);
		}

		for (var k in oldMarkers){
			var found = false;

			for(var l in newMarkers){
				if(oldMarkers[k].bdId == newMarkers[l].id){
					found = true;
				}
				if (found){
					break;
				}
			}
			if (!found){
				oldMarkers[k].setMap(null);
			}
		}
		
		
	}
	
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd21KjkoMYZm_A3xlui58HtxXd5TW0J1k&callback=initMap"></script>
@endsection