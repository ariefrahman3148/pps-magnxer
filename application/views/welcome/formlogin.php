<?php
$this->load->view('template/header');
$this->load->view('template/preloader');

?>
<section class="sign_in_area bg_color" >
            <div class="container-fluid">
                <div class="sign_info" style="height:100vh">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="sign_info_content">
                                <h3 class="f_p f_600 f_size_24 t_color3 mb_40">First time here?</h3>
                                <h2 class="f_p f_400 f_size_30 mb-30">Join now and get<br> <span class="f_700">20%
                                        OFF</span> for all <br> products</h2>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="ti-check"></i> Premium Access to all Products</li>
                                    <li><i class="ti-check"></i> Free Testing Tools</li>
                                    <li><i class="ti-check"></i> Unlimited User Accounts</li>
                                </ul>
                                <button type="submit" class="btn_three sign_btn_transparent">Sign Up</button>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="login_info">
                                <h2 class="f_p f_600 f_size_24 t_color3 mb_40">Sign In</h2>
                                <form action="<?php echo site_url('login'); ?>" method="post" class="login-form sign-in-form">
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400">Email or Name</label>
                                        <input type="text" placeholder="saasland@gmail.com">
                                    </div>
                                    <div class="form-group text_box">
                                        <label class="f_p text_c f_400">Password</label>
                                        <input type="password" placeholder="******">
                                    </div>
                                    <div class="extra mb_20">
                                        <div class="checkbox remember">
                                            <label>
                                                <input type="checkbox"> Keep me Signed in
                                            </label>
                                        </div>
                                        <!--//check-box-->
                                        <div class="forgotten-password">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn_three">Sign in</button>
                                        <div class="social_text d-flex ">
                                            <div class="lead-text">Don't have an account?</div>
                                            <ul class="list-unstyled social_tag mb-0">
                                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                                <li><a href="#"><i class="ti-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
$this->load->view('template/footer');
?>