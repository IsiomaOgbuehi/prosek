$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#menu-toggle").toggleClass("is-active");
        $("#wrapper").toggleClass("toggled");
});

$(document.body ).click(function(e) {
        console.log();
        const searchInput = document.getElementById('side-search');
        if ($('#side-search').is('.collapse.show') && e.target.tagName.toUpperCase() !== 'INPUT') {
            $("#side-search").collapse('hide');
        }
});
    AOS.init();

// Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = { lat: 6.574399, lng: 3.34028 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }

     function submitOnEnter(inputElement, event) {
         if(event.keyCode === 13){
         inputElement.form.submit();
         }
    }

