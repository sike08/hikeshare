// $(document).ready(function(){

// });

// function initViewRideDetailsMap() {
//     var map = new google.maps.Map(document.getElementById('map'), {
//       mapTypeControl: false,
//       center: { lat: -33.8688, lng: 151.2195 },
//       zoom: 13
//     });
  
//     new AutocompleteDirectionsHandler(map);
//   }
  
//   /**
//    * @constructor
//    */
//   function AutocompleteDirectionsHandler(map) {
//     this.map = map;
//     this.originPlaceId = null;
//     this.destinationPlaceId = null;
//     this.travelMode = 'DRIVING';
//     this.directionsService = new google.maps.DirectionsService;
//     this.directionsRenderer = new google.maps.DirectionsRenderer;
//     this.directionsRenderer.setMap(map);
  
//     var originInput = document.getElementById('origin-input');
//     var destinationInput = document.getElementById('destination-input');
  
//     var originAutocomplete = new google.maps.places.Autocomplete(originInput);
//     // Specify just the place data fields that you need.
//     originAutocomplete.setFields(['place_id']);
  
//     var destinationAutocomplete =
//       new google.maps.places.Autocomplete(destinationInput);
//     // Specify just the place data fields that you need.
//     destinationAutocomplete.setFields(['place_id']);
  
//     this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
//     this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');
  
//   }
  
  
//   AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function (
//     autocomplete, mode) {
//     var me = this;
//     autocomplete.bindTo('bounds', this.map);
  
//     autocomplete.addListener('place_changed', function () {
//       var place = autocomplete.getPlace();
  
//       if (!place.place_id) {
//         window.alert('Please select an option from the dropdown list.');
//         return;
//       }
//       if (mode === 'ORIG') {
//         me.originPlaceId = place.place_id;
//       } else {
//         me.destinationPlaceId = place.place_id;
//       }
//       me.route();
//     });
//   };
  
//   AutocompleteDirectionsHandler.prototype.route = function () {
//     if (!this.originPlaceId || !this.destinationPlaceId) {
//       return;
//     }
//     var me = this;
  
//     this.directionsService.route(
//       {
//         origin: { 'placeId': this.originPlaceId },
//         destination: { 'placeId': this.destinationPlaceId },
//         travelMode: this.travelMode
//       },
//       function (response, status) {
//         if (status === 'OK') {
//           me.directionsRenderer.setDirections(response);
//         } else {
//           window.alert('Directions request failed due to ' + status);
//         }
//       });
//   };