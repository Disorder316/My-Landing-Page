function GeoLocate() {
    this.latitude = 42;
    this.longitude = -89;
}


GeoLocate.prototype = {
    constructor: GeoLocate,
    initGeolocation: function() {
        if (navigator.geolocation) {
            // this is an asynchronous call. nothing can happen until geolocation is determined.
            navigator.geolocation.getCurrentPosition(this.getPosition, this.geolocationFailed);
        }
    },

    getPosition: function(pos) {
        this.latitude = pos.coords.latitude;
        this.longitude = pos.coords.longitude;

        // dispatch the custom event once the asynchronous geolocation call has finished executing
        $.event.trigger({
            type: "coordsLoaded",
            message: 'geolocation coordinates received',
            time: new Date()
        });

    },
    geolocationFailed: function(error) {
        $('#loader').css('display', 'block');
        $.ajax({
            url: "/outside/ZipSearch/controller.locations.php?isAjax=true&action=ShowZipSearchForm",
            processData: false,
            method: 'GET',
            success: function(msg) {
                $('#map-canvas').html(msg);
                $.event.trigger({
                    type: "coordsFailed",
                    message: "geolocation coordinates failed",
                    time: new Date()
                })
            $('#loader').css('display', 'none');
            },
            error: function(msg) {
                alert(msg);
            }
        });

    },

    getClosestLocation: function(e) {
        $('#loader').css('display', 'block');
        $.ajax({
            url: "/outside/ZipSearch/controller.locations.php?how_many=10&isAjax=true&action=getClosestLatLang&lat=" + this.latitude + "&long=" + this.longitude,
            processData: false,
            method: 'GET',
            success: function(msg) {

                $('#map-canvas').html(msg);

                $.event.trigger({
                    type: 'locationsLoaded',
                    message: 'locations loaded',
                    time: new Date()
                })
                $('#loader').css('display', 'none');

            },
            error: function(msg) {
                alert(msg);
            }
        });


    },

    getLatitude: function(){
        return this.latitude;
    },
    getLongitude: function() {
        return this.longitude;
    }

}