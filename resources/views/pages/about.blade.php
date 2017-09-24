@extends('layouts.main')
@section('title', '| About')

@section('content')




    <h1>Orange Map </h1>

    <div id="map"></div>

    <script>
        function initMap() {

//            Map Options

            var options ={

                zoom:8,
                center:{lat:12.6500000,lng:-8.0000000}
            };

//            New Map
            var map = new
            google.maps.Map(document.getElementById('map'),options);

            //listen map on click

            google.maps.event.addListener(map, 'click', function(event){

//                add marker
                addMarker({coords:event.latLng});


            });
//

////            Adding Marker

//            var marker = new google.maps.Marker({
//                position:{lat:12.633866 , lng:-8.024445},
//                map:map
////                icon:'http://www.clker.com/cliparts/I/l/L/S/W/9/map-marker-hi.png'
//
//            });

//
//            var infoWindow = new google.maps.InfoWindow({
//               content:'<h1>Orange Mali Aci 2000</h1>'
//
//            });
//
//            marker.addListener('click',function(){
//
//                infoWindow.open(map,marker);
//            });






            //Array of Markers

            var markers =[


                {
                    coords:{lat:12.630435 , lng: -8.028238},
                    iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                    content:'<h1>Orange Mali</h1>'
                },


                {
                    coords:{lat:12.633866 , lng:-8.024445},
                    content:'<h1>Orange Mall</h1>'
//                iconImage:'http://www.clker.com/cliparts/I/l/L/S/W/9/map-marker-hi.png'
                }

            ];


            //loop through markers

            for (var i = 0; i < markers.length; i++){

                //            add marker location to the map
                addMarker(markers[i]);


            }


            //add marker function


            function addMarker(props){
                var marker = new google.maps.Marker({
                position:props.coords,
                map:map
//                icon:props.iconImage
//                icon:'http://www.clker.com/cliparts/I/l/L/S/W/9/map-marker-hi.png'
//
            });

//                check for custom icon
                if(props.iconImage){

//                    set icon image

                    marker.setIcon(props.iconImage);

                }


                //check content

                if(props.content){


            var infoWindow = new google.maps.InfoWindow({
               content:props.content

            });

            marker.addListener('click',function(){

                infoWindow.open(map,marker);
            });

                }

            }



        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGkrBAgjF9LYMsVpgWyVZ_PhHWULDdpng&callback=initMap">
    </script>


@endsection
