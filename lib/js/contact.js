function initMap()
    {
        var uluru = {lat: 27.631447, lng: 85.369665};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h2 id="firstHeading" class="firstHeading">ASMAN</h2>'+
            '<div id="bodyContent">'+
            "<p><b>Association of St. Mary's Alumnae Nepal - ASMAN</b></br>" +
            'Thapathali, Kathmandu</br>'+
            '+977-01-4521563'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    }