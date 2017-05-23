@extends('layouts.master')

@section('title', 'Live Map')
<style>
   #map {
    height: 94%;
    width: 100%;
    z-index: 1;
   }

   .sidenav {
   		z-index: 3;
	    height: 100%; /* 100% Full-height */
	    width: 0; /* 0 width - change this with JavaScript */
	    position: fixed; /* Stay in place */
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
	.row-min {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 15px;
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

	#of-button {
	  margin-left: 20px;
	  position: absolute;
	  text-align: center;
	  z-index: 4;
	}

	.smGlobalBtn{ /* global button class */
	    display: inline-block;
	  	z-index: 4;
	    cursor: pointer;
	    width: 150px;
	    padding: 0px;
	    text-decoration: none;
	    text-align: center;
	    vertical-align: middle;
	    color: #fff;
	    font-size: 15px;
	    font-weight: normal;
	    line-height: 2em;
	    position: fixed; 
    	top: 48px; 
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
	<div id="of-button">
		<span class="smGlobalBtn" onclick="openNav()">	
			<img src="images/record.png" style="height: 15px; padding-bottom: 3px; margin-right: 7px;">
			LIVE FLIGHTS
		</span>
	</div>
@stop

@section('body')
<div id="mySidenav" class="sidenav">
	
</div>

<div id="map">
</div>

<script>
	var list;
	var markersListOld = [];
	var markersListNew;
	var map;
	var icon;
	var icon2;
	var markerSelected;

	function selectMarker(id) {
		for (var i = 0; i<markersListOld.length; i++) {
			if (markersListOld[i].bdId == id){
				markerSelected = markersListOld[i];
				markersListOld[i].setIcon(icon2);
				map.panTo(markerSelected.getPosition());
			}else{
				markersListOld[i].setIcon(icon);
			}
		}
	}

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
		icon2 = {
			url: 'images/droneBlue.png',
			scaledSize: new google.maps.Size(50,50)
		}		
		list = <?php echo $onlineflights; ?>;

		google.maps.event.addListener(map, 'click', function(event) {
		    if(markerSelected){
					markerSelected.setIcon(icon);
					markerSelected = null;
				}
		});
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
	}											// 5min = 300000
												//20min = 1200000
	var timeoutMap = setInterval(timeoutSession, 300000);
	function timeoutSession() {
		window.location.replace("http://hidroneapi.azurewebsites.net/timeout");
	}

	var myVar = setInterval(myTimer, 1000);
	function myTimer() {	 
		var client = new HttpClient();
		//'http://hidroneapi.azurewebsites.net/api/onlineflights'
		//'http://localhost/hidrone_api/public/api/onlineflights'
		client.get('http://hidroneapi.azurewebsites.net/api/onlineflights', function(response) {
			var listGet = JSON.parse(response);
		    markersListNew = listGet.data;
			compareMarkers(markersListOld, markersListNew);
			onlineflightsList();
		});		
	}

	function onlineflightsList() {	 
		var htmlOnlineFlights ='<div class="row">ONLINE FLIGHTS</div>';
		for (var i = 0; i<markersListNew.length; i++){
			htmlOnlineFlights = htmlOnlineFlights + '<div class="row" id="'+markersListNew[i].id+'" onclick="selectMarker(this.id)"> '+markersListNew[i].username+' </br> <div class="drone"> '+markersListNew[i].drone+' </div> </div>';
		}
		if(markersListNew.length == 0){
			document.getElementById("mySidenav").innerHTML = htmlOnlineFlights+'<div class="row-min">Clear Skies</div>'
		}else{
			document.getElementById("mySidenav").innerHTML = htmlOnlineFlights;
		}
	}

	var infowindow;
	function putMarkers(list, map, icon){
		if(list){
			for (var i in list){
			    var markerPos = {lat: list[i].Lat, lng: list[i].Lon};
			    var marker = new google.maps.Marker({
			      position: markerPos,
			      map: map,
			      animation: google.maps.Animation.DROP,
			      icon: icon,
			      title: list[i].username,
			      bdId: list[i].id,
			      drone: list[i].drone
			    });
			    markersListOld.push(marker);
			    var content = list[i].username+" is flying with a "+list[i].drone;
			    infowindow = new google.maps.InfoWindow()

			    google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
			     return function() {
			       map.panTo(marker.getPosition());
			       infowindow.setContent(content);
			       infowindow.open(map, marker);
			       for (var j = 0; j < markersListOld.length; j++) {
				      markersListOld[j].setIcon(icon);
				    }
				    marker.setIcon(icon2);
				    markerSelected=marker;
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
					if(markerSelected){
						if(markerSelected.bdId == oldMarkers[j].bdId)
						map.panTo(markerSelected.getPosition());
					}
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
				markersListOld[k].remove;
			}
		}		
	}

	document.getElementById("map-page").classList.add('active');
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd21KjkoMYZm_A3xlui58HtxXd5TW0J1k&callback=initMap"></script>
@endsection