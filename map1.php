<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-group row">
                                        <div id="map" style="width:100%;height:500px"></div>
                                    </div>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmtr8eTZOZU8O9jbf9jPjGi0p7fTQWRzI&callback=initMap&libraries=&v=weekly" async></script>

    <script src="js/jQuery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/all.js" type="text/javascript"></script>
    <script src="js/comboload.js" type="text/javascript"></script>
    <script src="js/sample_reg.js" type="text/javascript"></script>
    <script>
                                                // Initialize and add the map
                                                function initMap() {
                                                    const myLatlng = {lat: 7.888, lng: 80.655};
                                                    const map = new google.maps.Map(document.getElementById("map"), {
                                                        zoom: 10,
                                                        center: myLatlng,
                                                    });
                                                    // Create the initial InfoWindow.
                                                    let infoWindow = new google.maps.InfoWindow({
                                                        content: "Click the map to get Lat/Lng!",
                                                        position: myLatlng,
                                                    });

                                                    infoWindow.open(map);
                                                    // Configure the click listener.
                                                    map.addListener("click", (mapsMouseEvent) => {
                                                        // Close the current InfoWindow.
                                                        infoWindow.close();
                                                        // Create a new InfoWindow.
                                                        infoWindow = new google.maps.InfoWindow({
                                                            position: mapsMouseEvent.latLng,

                                                        });
                                                        infoWindow.setContent(
                                                                JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
                                                                );
                                                        infoWindow.open(map);
                                                        $('#lat').val(mapsMouseEvent.latLng.lat());
                                                        $('#lng').val(mapsMouseEvent.latLng.lng());
                                                    });
                                                }
</script>
</body>
</html>