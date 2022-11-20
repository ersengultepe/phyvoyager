@extends('layouts.app')

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="https://www.okler.net/previews/porto/9.8.0/img/page-header/page-header-parallax.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1> {{ __('physmart.contact') }} <strong>Physmart</strong></h1>
                        <span class="sub-title"> {{ __('physmart.getInTouch') }}  </span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="{{ route('homepage') }}"> {{ __('physmart.homePage') }}</a></li>
                            <li class="active"> {{ __('physmart.CONTACT') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">

                    <div class="offset-anchor" id="contact-sent"></div>

                    <h2 class="font-weight-bold text-7 mt-2 mb-0">{{ __('physmart.Contact Us') }}</h2>
                    <p class="mb-4">{{ __('physmart.contactSubTitle') }}</p>

                    <form id="contactFormAdvanced" action="contact-us-advanced.php#contact-sent" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="true" name="emailSent" id="emailSent">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label mb-1 text-2"> {{ __('physmart.yourName') }}</label>
                                <input type="text" value="" placeholder=" {{ __('physmart.yourNamePlaceholder') }}" maxlength="100" class="form-control text-3 h-auto py-2" name="name" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label mb-1 text-2"> {{ __('physmart.yourEmail') }} </label>
                                <input type="email" value="" placeholder=" {{ __('physmart.yourEmailPlaceholder') }}" maxlength="100" class="form-control text-3 h-auto py-2" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label mb-1 text-2"> {{ __('physmart.yourMessage') }} </label>
                                <textarea maxlength="5000" placeholder=" {{ __('physmart.yourMessagePlaceholder') }}" rows="6" class="form-control text-3 h-auto py-2" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 mb-5">
                                <input type="submit" id="contactFormSubmit" value=" {{ __('physmart.send') }}" class="btn btn-primary btn-modern pull-right" data-loading-text="yükleniyor...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-5">

                    <div class="overflow-hidden mb-1">
                        <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                            <strong>Physmart </strong> {{ __('physmart.companyName2') }}
                        </h4>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">
                            {{ __('physmart.companyPurpose') }}
                        </p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <h4 class="text-primary pt-5"><strong>Ofisimiz</strong></h4>
                        <ul class="list list-icons list-icons-style-3 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong> {{ __('physmart.address') }}:</strong> Cevat Dündar Cad., Kat:1 N:1/1/10 Ostim Teknopark/Ankara</li>
                            <li><i class="fas fa-phone top-6"></i> <strong> {{ __('physmart.telephone') }}:</strong> +90 507 745 51 87</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong> {{ __('physmart.email') }}:</strong> <span>info@physmart.com.tr</span> </li>
                        </ul>

                        <div class="row lightbox mt-4 mb-0 pb-0" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <a class="img-thumbnail p-0 border-0 d-block" href="https://www.okler.net/previews/porto/9.8.0/img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid" src="https://www.okler.net/previews/porto/9.8.0/img/office/our-office-1.jpg" alt="Office">
                                </a>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <a class="img-thumbnail p-0 border-0 d-block" href="https://www.okler.net/previews/porto/9.8.0/img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid" src="https://www.okler.net/previews/porto/9.8.0/img/office/our-office-2.jpg" alt="Office">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="img-thumbnail p-0 border-0 d-block" href="https://www.okler.net/previews/porto/9.8.0/img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid" src="https://www.okler.net/previews/porto/9.8.0/img/office/our-office-3.jpg" alt="Office">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-primary pt-5"> <strong>{{ __('physmart.businessHours') }} </strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> {{ __('physmart.businessHoursMidweek') }}</li>
                            <li><i class="far fa-clock top-6"></i> {{ __('physmart.businessHoursSaturday') }}</li>
                            <li><i class="far fa-clock top-6"></i> {{ __('physmart.businessHoursSunday') }}</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map m-0" style="height: 650px;"></div>

    </div>
@stop

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2nEWP9eGegHX7-DCX_CFXJKqx_RWZdT0"></script>
    <script>

        /*
        Map Settings

            Find the Latitude and Longitude of your address:
                - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

        */

        // Map Markers
        var mapMarkers = [{
            address: "Cevat Dündar Cad. Kat:1 N:1/1/10 Ostim Teknopark/Ankara",
            html: "<strong style='font-size: large'>Physmart</strong><br>Cevat Dündar Cad. Kat:1 N:1/1/10 <br>Ostim Teknopark/Ankara<br><br><a href='#' onclick='mapCenterAt({latitude: 39.9805522, longitude: 32.7420487, zoom: 14}, event)'>[+]  {{ __('physmart.zoom') }} </a>",
            icon: {
                image: "porto/img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46],
                view:true
            },
            popup:true
        }];

        // Map Initial Location
        var initLatitude = 39.9805522;
        var initLongitude = 32.7420487;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 13
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Map Center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }

        // Styles from https://snazzymaps.com/
        var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');

    </script>
@stop