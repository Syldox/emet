@extends('layouts.main')
@section('title', '| Contact')

@section('content')

    <h1>Contact Me</h1>
    <hr>
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form action="{{url('contact')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" name="email"/></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="suggestions">Suggestions</option>
                                        <option value="product">Product Support</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning pull-right" id="btnContactUs" style="background-color: #f5861a">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                    <address>
                        <strong>Twitter, https://twitter.com/Orange_Mali</strong><br>
                        Orange Mali Aci 2000<br>
                        Bamako, Mali<abbr title="Phone">
                            P:</abbr>
                        +223 44 99 99 03
                    </address>
                    <address>
                        <a href="mailto:#">OrangeMali@gmail.com</a>
                    </address>
                </form>
            </div>
        </div>
    </div>



    <h1>Google Map</h1>

    <div id="map"></div>

    <script>
        function initMap() {

            var options ={

                zoom:8,
                center:{lat:12.6500000,lng:-8.0000000}
            }

            var map = new
            google.maps.Map(document.getElementById('map'),options);


        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGkrBAgjF9LYMsVpgWyVZ_PhHWULDdpng&callback=initMap">
    </script>
@endsection
