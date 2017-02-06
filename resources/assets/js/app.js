
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// const app = new Vue({
//     el: '#app'
// });

$( document ).ready(function() {
  $('#controls select').select2();
});


$( ".fonts-card-title-family" ).on( "change", function() {

	var fontFamily =  $(this).val();
	WebFont.load({
		google: {
			families: [ fontFamily ]
		}
	});

    $('.wombos-cs .card-title').css("font-family",  fontFamily);

	return false;
});

$( ".fonts-card-text-family" ).on( "change", function() {

	var fontFamily =  $(this).val();
	WebFont.load({
		google: {
			families: [ fontFamily ]
		}
	});

    $('.wombos-cs .card-text').css("font-family",  fontFamily);

	return false;
});


$( ".fonts-button-text-family" ).on( "change", function() {

	var fontFamily =  $(this).val();
	WebFont.load({
		google: {
			families: [ fontFamily ]
		}
	});

    $('.wombos-cs .button-text').css("font-family",  fontFamily);

	return false;
});

