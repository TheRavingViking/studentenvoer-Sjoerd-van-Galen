
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $("#rm").remove();

            $(wrapper).append('<div id="divs"><input type="text" name="mytext[]"/>'); //add input box
            $(wrapper).append('<div id="divs"><input type="text" name="mytext[]"/>'); //add input box
            $(wrapper).append('<div id="divs"><input type="text" name="mytext[]"/></div>'); //add input box
            $(wrapper).append('<div id="divs"><input type="text" name="mytext[]"/><a href="#" id="rm" class="remove_field">Remove</a></div>'); //add input box
            $(wrapper).append('<br>')
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $("#divs").remove(); x--;
        $("#divs").remove(); x--;
        $("#divs").remove(); x--;
        $("#divs").remove(); x--;

    })
});