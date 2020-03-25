<template>
    <div class="map__wrapper">
        <div id="map" ref="map"></div>
    </div>
</template>
<script>

    import {primaryColor, secondaryColor, triColor, darkColor, muteColor} from "../defaults";

    var google

    export default {
        name: "GoogleMap",
        data() {
            return {
                map: null,
                google: null,
                zoomLevel: 14,
                myLatLng: {lat: -33.950739, lng: 18.705159},
                data: null,
                loading: true,
                style: [
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#2c2e33"
            },
            {
                "saturation": 7
            },
            {
                "lightness": 19
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": "-3"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#f39247"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#f39247"
            },
            {
                "saturation": "0"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ff6f00"
            },
            {
                "saturation": "100"
            },
            {
                "lightness": 31
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#f39247"
            },
            {
                "saturation": "0"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#008eff"
            },
            {
                "saturation": -93
            },
            {
                "lightness": 31
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#f3dbc8"
            },
            {
                "saturation": "0"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#bbc0c4"
            },
            {
                "saturation": -93
            },
            {
                "lightness": -2
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -90
            },
            {
                "lightness": -8
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": 10
            },
            {
                "lightness": 69
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#e9ebed"
            },
            {
                "saturation": -78
            },
            {
                "lightness": 67
            },
            {
                "visibility": "simplified"
            }
        ]
    }
]
            }
        },
        methods: {
            loadMap() {
                google = window.google
                this.map = new google.maps.Map(this.$refs.map, {
                    center: this.myLatLng,
                    zoom: this.zoomLevel,
                    // mapTypeId: this.mapType,
                    disableDefaultUI: false,
                    styles: this.style,
                    gestureHandling: 'cooperative'
                })
                var marker = new google.maps.Marker({
                    position: this.myLatLng,
                    map: this.map,
                    // icon: {
                    //     url: "img/logos/small-logo.png",
                    //     // This marker is 20 pixels wide by 32 pixels high.
                    //     size: new google.maps.Size(100, 57),
                    //     // The origin for this image is (0, 0).
                    //     origin: new google.maps.Point(0, 0),
                    //     // The anchor for this image is the base of the flagpole at (0, 32).
                    //     anchor: new google.maps.Point(6, 57)
                    // },
                    // label: 'DesignByCode',
                    title: 'Coenie Marais Inhouse Finishing'
                });
            }
        },
        mounted() {
            this.loadMap()
        }


    }
</script>

