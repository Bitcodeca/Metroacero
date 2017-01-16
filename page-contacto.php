<?php get_header(); $x=0; ?>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9z2GzXFGr58UimvCs5ZqXVXVREC36DwM&callback=initialize">
    </script>
 <script>
        function initialize() { 
            
            var myLatLng = {lat: 10.018488, lng: -69.210859};
          
            var styleArray = [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              },
              {
                "weight": 7.5
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#fe5e00"
              },
              {
                "weight": 1
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "stylers": [
              {
                "color": "#80ffff"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#00a0fe"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ];

          var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(10.018488, -69.210859),
            styles: styleArray,
            zoomControl: false,
            scaleControl: true,
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            draggable: false,
          };

          var map = new google.maps.Map(document.getElementById('map'),
            mapOptions);
         
            
          setMarkers(map);
        }
             
        function setMarkers(map) {
               
            var myLatLng = {lat: 10.018488, lng: -69.210859};
            var image = {
                url: 'https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png',
                // This marker is   20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32)
              };
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }
             
        google.maps.event.addDomListener(window, 'load', initialize);

</script>
    <div class="tab-empresa">
        
        <div class="row">
            <div id="map" style="height:412px; width:100%"></div>
        
        <div class="fondogris">
            <div class="container">
                <div class="row marginbot0">
                    <h3 class="letranaranja center-align" style="margin: 12px 0 7px 0;">COMPROMETIDOS CON VENEZUELA</h3>
                </div>
            </div>
        </div>
        
        <div class="container paddingbot50">
            <div class="row">
				<div class="col-xs-12 col-md-6">
                    <h2 class="letranaranja marginbot10 bold">Contacto</h2>
                    <div class="clearfix"></div>
                    <dl>
                        <dt class=" wow fadeIn">
                            <h4><i class="material-icons">&#xE0C8;</i> Dirección</h4>
                        </dt>
                        <dd class=" wow fadeIn">
                            <p>Zona industrial de Cabudare, Sector La Montañita, Cabudare, Edo. Lara. Venezuela.</p>
                        </dd>
                        <dt class=" wow fadeIn">
                            <h4><i class="material-icons">&#xE0CD;</i> Teléfonos</h4>
                        </dt>
                        <dd class=" wow fadeIn">
                            <p><b>Compras</b> 0424-5786047</p>
                            <p><b>Ventas</b> 0424-5790861</p>
                        </dd>
                        <dt class=" wow fadeIn">
                            <h4><i class="material-icons">&#xE0BE;</i> Correos</h4>
                        </dt>
                        <dd class=" wow fadeIn">
                            <p>Ventas@metroacero.com</p>
                            <p>Gerenciadeventas@metroacero.com</p>
                        </dd>
                    </dl>
				</div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="letranaranja marginbot10 bold">Escríbenos</h2>
                    <div class="clearfix"></div>
                    <div class="margintop25" ng-controller=ContactController>
                        <form ng-submit=submit(contactform) name=contactform method=post role=form> 
                                <span class="input-field wow fadeIn" ng-class="{ 'has-error': contactform.empresa.$invalid && submitted }">
                                    <input id=empresa type=text class=validate ng-model=formData.empresa placeholder=Empresa >
                                </span>
                                <span class="input-field wow fadeIn" ng-class="{ 'has-error': contactform.nombre.$invalid && submitted }">
                                    <input id=nombre type=text class=validate ng-model=formData.nombre placeholder=Nombre >
                                </span>
                                <span class="input-field wow fadeIn" ng-class="{ 'has-error': contactform.telefono.$invalid && submitted }">
                                    <input id=telefono type=number class=validate ng-model=formData.telefono placeholder=Teléfono >
                                </span>
                                <span class="input-field wow fadeIn" ng-class="{ 'has-error': contactform.email.$invalid && submitted }">
                                    <input id=email type=email class=validate ng-model=formData.email placeholder=Email >
                                </span>
                                <span class="input-field wow fadeIn" ng-class="{ 'has-error': contactform.motivo.$invalid && submitted }">
                                    <select ng-model=formData.motivo id="motivo" name="motivo" class="validate" >
                                      <option value="" disabled selected>Seleccionar Motivo</option>
                                      <option value="compra">Compras</option>
                                      <option value="venta">Ventas</option>
                                      <option value="gerencia">Gerencia de Ventas</option>
                                      <option value="otro">Otro</option>
                                    </select>
                                </span>
                                <div class="input-field wow fadeIn" ng-class="{ 'has-error': contactform.message.$invalid && submitted }">
                                    <textarea id=message class=materialize-textarea ng-model=formData.message placeholder=Mensaje ></textarea>
                                </div>
                                <button class="waves-effect waves-light btn btn-ma wow fadeIn" type=submit ng-disabled=submitButtonDisabled>ENVIAR</button>
                        </form>
                        <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/app.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/controllers.js"></script>
<script>
  jQuery(document).ready(function() {
      jQuery('select').material_select();
    });
</script>