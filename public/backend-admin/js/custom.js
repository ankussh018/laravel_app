$(document).ready(function(){

$('#login').validate({



     rules: {

      

      password: "required",

      email: {

        required: true,

        email: true

      },

    },

    submitHandler: function(form) {

        $.ajax({

         headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },

            url: form.action,

            type: form.method,

            data: $(form).serialize(),

            beforeSend: function() {

              $("#loginnow").text('Loading...');

           },

            success: function(response) {

              var response=JSON.parse(response);

               var messages=response.message;

              if(response.StatusCode==200){

               window.location.href=$('#login').data('url');

              }else{

                setTimeout(function() {

                  

              document.getElementById('login').reset();

              	Swal.fire({

                icon: 'error',

                title: 'Oops...',

                text: messages

              });

                $("#loginnow").text('Sign in');

                  return false;

},3000);

              }

            },error:function(response){

              alert(response);

              console.log(response);

            }              

        });

    }

});



$('#forgot_pass').validate({



     rules: {

      forgot_email: {

        required: true,

        email: true

      },

    },errorPlacement: function (error, element) {

            var name = $(element).attr("name");

            error.appendTo($("#" + name + "_validate"));

        },

    // Specify validation error messages

    messages: {

      forgot_email: "Please enter a valid email address"

    },



    submitHandler: function(form) {

        $.ajax({

         headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },

            url: form.action,

            type: form.method,

            data: $(form).serialize(),

            beforeSend: function() {

              $("#forgotnow").text('Resting...');

           },

            success: function(response) {

              var response=JSON.parse(response);

               var messages=response.message;

              if(response.StatusCode==200){

              	document.getElementById('forgot_pass').reset();

               Swal.fire({

                icon: 'success',

                title: 'success',

                text: messages

              }).then(function() {

                    $("#forgotnow").text('Forgot Password');  

                    $('#myModal').modal('hide');

                });

              }else{            

              	Swal.fire({

                icon: 'error',

                title: 'Oops...',

                text: messages

              });

                $("#forgotnow").text('Forgot Password');   

              }

            },error:function(response){

              alert(response);

              console.log(response);

            }              

        });

    }

});

});