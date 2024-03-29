<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
  <div class="modal-content">
  <section class="sign_in_area bg_color" >
            <div class="container">
                <div class="sign_info" >
                        <div class="col-lg-12">
                            <div class="login_info">
                                <h2 class="f_p f_600 f_size_24 t_color3 mb_40">Sign In</h2>
                                <div id="error_msg" class="bg-warning text-dark"></div>
                                <form id="login" class="login-form sign-in-form">
                                    <div class="form-group text_box">
                                    <?php echo form_error('email'); ?>
                                        <label class="f_p text_c f_400">Email</label>
                                        <input type="text" id="email" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group text_box">
                                        <?php echo form_error('password'); ?>
                                        <label class="f_p text_c f_400">Password</label>
                                        <input type="password" id="password" name="password" placeholder="******">
                                    </div>
                                    <div class="extra mb_20">
                                        <div class="checkbox remember">
                                            <label>
                                                <?php echo form_checkbox('remember','1',FALSE);?> Remember me
                                            </label>
                                            <!-- <label>
                                                <input type="checkbox" id="password" name="password"> Remember me
                                            </label> -->
                                        </div>
                                        <!--//check-box-->
                                        <div class="forgotten-password">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" id="login_btn" class="btn btn-md btn-primary">Sign in</button>
                                        <div class="social_text d-flex ">
                                            <div class="lead-text"> <a href="<?php echo base_url('registrasi'); ?>">Don't have an account? Create here</a></div>
                                            <!-- <ul class="list-unstyled social_tag mb-0">
                                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                <li><a href="#"><i class="ti-google"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </section>
</div>
  </div>
</div>

<script>

$(document).ready(function() {
    $("#login_btn").click(function(e){
 
 // Stop form from submitting normally
    e.preventDefault();

    // console.log(tinyMCE.get('tiny2').getContent());

 // Send the data using post
    $.post( "<?php echo base_url(); ?>api/login", 
        { 
            email: $("#email").val(),
            password: $("#password").val(),
        },
        function(data, status){
            location.reload();
        });

    });
    // $('#login').submit(function(event) { //Trigger on form submit
    //     $('#email + .throw_error').empty(); //Clear the messages first
    //     $('#success').empty();

    //     //Validate fields if required using jQuery

    //     var postForm = { //Fetch form data
    //         'email'     : $('input[name=email]').val(), //Store name fields value
    //         'password'     : $('input[name=password]').val() //Store name fields value
    //     };

    //     $.ajax({ //Process the form using $.ajax()
    //         type      : 'POST', //Method type
    //         url       : '<?php echo base_url(); ?>api/login', //Your form processing file URL
    //         data      : postForm, //Forms name
    //         dataType  : 'json',
    //         success   : function (response) {
    //             location.reload();
    //         },
    //         error     : function(response) {
    //             console.log("res",response);
    //             $('#error_msg').html(response.responseJSON.message);
    //         }
    //     });
    //     event.preventDefault(); //Prevent the default submit
    // });
});
</script>