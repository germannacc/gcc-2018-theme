//run code only after the whole page is loaded
jQuery(document).ready( function($){


//when the button is clicked run the ajax function
$('#do-ajax').on('click', runMyAjax);

 function runMyAjax(){

  var $somedata = $('#my-ajax-item').val();
  var data = {
        'action': 'my_ajax_function', //the function in php functions to call
        'data_to_pass': $somedata,
        'nonce': frontEndAjax.nonce
    };

 //send data to the php file admin-ajax which was stored in the variable ajaxurl
   $.post(frontEndAjax.ajaxurl, data, function( response ) {

           //simple test. if new string brought back doesn't match old string.
           if(response.data_from_backend !== $somedata){
               $('#my-ajax-item').val(response.data_from_backend);
           }

        }, 'json' );

} //end runMyAjax



//end document ready
});
