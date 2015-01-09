// Google Browser API Key: AIzaSyBH1g2XPuq09rZ6QHcTde9vC4jMQn6Y0qI
function Map() {
    this.mappy = [];
    this.latitude = 42;
    this.longitude = -89;
}

Map.prototype = {
    constructor: Map,

    createMap: function() {

        // Create an array of styles.
        var styles = [
        {
            "featureType": "landscape.natural",
            "stylers": [
            {
                "color": "#4d3b1c"
            },
            {
                "invert_lightness": true
            },
            {
                "hue": "#ff8000"
            },
            {
                "disableDefaultUI": false
            },

            ]
        }
        ];

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles, {
            name: "Styled Map"
        });

        var mapOptions = {
            center: new google.maps.LatLng(this.latitude, this.longitude),
            zoom: 3,
            panControl: true,
            zoomControl: true,
            scaleControl: true

        };
        this.mappy = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        //Associate the styled map with the MapTypeId and set it to display.
        this.mappy.mapTypes.set('map_style', styledMap);
        this.mappy.setMapTypeId('map_style');

        $.event.trigger({
            type: "mapCreated",
            message: "map is available",
            time: new Date(),
            map: this.mappy
        })

    },
    placeMarkers: function(e) {

        theMap = e.map;

        for ( var i in location_array ) {

            lat = location_array[i]['latitude'];
            lng = location_array[i]['longitude'];
            var marker= new google.maps.Marker({
                position: new google.maps.LatLng(lat,lng),
                title: location_array[i]['company'],
                meta: 'Locations Map |Marker |' + location_array[i]['company']
            });

            marker.setMap(theMap);

            phoneNum = (location_array[i]['state'].toLowerCase() != 'z_can') ? 'Toll free: 866-298-7540' : 'BTR Canada: 905-751-1177';
            emailAddr = (location_array[i]['state'].toLowerCase() != 'z_can') ? '<a href="mailto:rentals@bigtruckrental.com" data-ga-string="Locations Map |Email Link |' + location_array[i]['company'] + '">rentals@bigtruckrental.com</a>' : '<a href="mailto:russ@bigtruckrental.com" data-ga-string="Locations Map |Email Link |' + location_array[i]['company'] + '">russ@bigtruckrental.com</a>'

            directionsLink = '<a href="https://maps.google.com/maps?f=q&daddr=';
            directionsLink += encodeURIComponent(location_array[i]['company']) + '%20'  + encodeURIComponent(location_array[i]['address_1'])  + '%20' + encodeURIComponent(location_array[i]['address_2']);
            directionsLink += '&q=' + encodeURIComponent(location_array[i]['company']) + '" target="_blank" data-ga-string="Locations Map |Directions Link |' + location_array[i]['company'] + '">Directions</a>';

            theMessage = '<div class="g-map-marker">';
            theMessage += '<h4>' + location_array[i]['company'] + '</h4>';
            theMessage += location_array[i]['address_1'] + '<br />';
            theMessage += location_array[i]['address_2'] + '<br />';
            theMessage += location_array[i]['phone'] + '<br />';
            theMessage += phoneNum + '<br />';
            theMessage += emailAddr + '<br />';

            theMessage += directionsLink + '<br />';
            theMessage += '</div>';

            attachMessage(marker, theMessage, theMap);

        }



        function attachMessage(marker, message, theMap) {
            var infowindow = new google.maps.InfoWindow({
                content: message
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(marker.getMap(theMap),marker);

                // binding this event every time a marker's clicked is sloppy. I'm running out of time to mess with it though
                $('*[data-ga-string]').click(function(e){
                    ga_vars = $(this).attr('data-ga-string').split('|');
                    _gat._getTrackerByName()._trackEvent(ga_vars[0], ga_vars[1], ga_vars[2]);
                })

                // marker clicked GA Event
                ga_vars = this.meta.split('|');
                _gat._getTrackerByName()._trackEvent(ga_vars[0], ga_vars[1], ga_vars[2]);
            });
        }
    }
}