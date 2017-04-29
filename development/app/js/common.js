$(function() {

    $('#searchform_fa').on('click', function () {
        $(this).children('form').trigger('submit');
    });

    $('#searchform input').on('click', function () {
        return false;
    });

    // slick slider
    $('.slick-single').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 700
    });

    $('.main-slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 700,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000
    });

    $('.news-category').slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 700,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // svg color painter
    $('#bottom_menu .container li a').on('mouseenter', function () {
        $(this).addClass('svg-color');
    }).on('mouseleave',function () {
        $(this).removeClass('svg-color');
        })

});
/**
 * Google maps API
 */
function initMap() {
    var customMapType = new google.maps.StyledMapType([
        {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#444444"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#f2f2f2"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "saturation": -100
                },
                {
                    "lightness": 45
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#46bcec"
                },
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f3f3f3"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [
                {
                    "saturation": "0"
                },
                {
                    "color": "#f3f3f3"
                }
            ]
        }
    ], {
        name: 'Map'
    });
    var customMapTypeId = 'custom_style';
    var myLatLng = { lat: 42.874229, lng: 74.618072 }; // Координаты .
    var image = '../../icon_map.png'; // Marker Icon
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        scrollwheel: false,
        center: myLatLng,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
        }
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });

    map.mapTypes.set(customMapTypeId, customMapType);
    map.setMapTypeId(customMapTypeId);
}