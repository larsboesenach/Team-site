$(document).ready(function(){

    $(document).on('click', '#add_week', function(){
         $.post("../include/main/sidebar_AJAX.php",
        {
          add_week: $('#add_week').val(),
          last_week: $('#last_week').val(),
        },
        function(data,status){
             $("#change").html(data);
        });
       
    });
 $(document).on('click', '#back_week', function(){
         $.post("../include/main/sidebar_AJAX.php",
        {
          last_week: $('#last_week').val(),
          back_week: $('#back_week').val(),
        },
        function(data,status){
             $("#change").html(data);
        });
       
    });
 $(document).on('click', '.log_hyperlink', function(){
       event.preventDefault();

         $.post("../include/main/log_read_AJAX.php",
        {
           logtime: $(this).attr('logtime')

        },
        function(data,status){
             $("#log").html(data);
        });
       
    });

  $(document).on('submit', '.log_add', function(){
           event.preventDefault();
         $.post("log/log_submit.php",
        {
           timestamp: $(this).attr('timestamp'),
           type: $('#type').val(),
           name: $('#name').val(),
           calories: $('#calories').val(),
           amount: $('#amount').val(),

        },
        function(data,status){
          var divs = data.split('----');
          $('#log').html(divs[0]);
         // $('#counter-sidebar').html(divs[1]);  
        });
       
    }); 

 $(document).on('click', '.register-submit-1', function(){
         $.post("../include/ajax/register_AJAX.php",
        {
           username: $('.form-name').val(),
           password: $('.form-pass').val(),
           email: $('.form-email').val(),
        },
        function(data,status){
          var divs = data.split('----');
          $('.Header-box').html(divs[0]);

        });
       
    }); 

  $(document).on('click', '.UserSettings-button', function(){
         $.post("../include/ajax/user_settings_AJAX.php",
        {
           username: $('.form-name').val(),
           password: $('.form-pass').val(),
           password_current: $('.form-pass_current').val(),
           email: $('.form-email').val(),

        },
        function(data,status){
          var divs = data.split('----');
          $('.usercontentsettings-ajax').html(divs[0]);

        });
       
    }); 
}); //document.ready