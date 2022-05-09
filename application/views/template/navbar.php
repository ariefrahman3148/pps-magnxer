        <!-- <script>
            $( document ).ready(function() {
                let user;

                $.get("<?php echo base_url("/api/user") ?>", function(data){
                    console.log("data", data);
                    if (data != null) {
                        document.getElementById('logout').style.display = 'block';
                        document.getElementById('login').style.display = 'none';
                        // $("#user").text("Hello world!");
                    } else {
                        document.getElementById('logout').style.display = 'none';
                        document.getElementById('login').style.display = 'block';
                    }
                });
            });
        </script> -->

<div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one">
                <div class="container-fluid custom_container p0">
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url('asset/magnxer/logo.png') ?>" srcset="img/logo2x.png 2x" alt="logo"></a>
                    <a class="btn_get btn_hover mobile_btn ml-auto" href="#get-app">Get Started</a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto menu">
                            <li class="nav-item  submenu mega_menu mega_menu_two active">
                            <li class="nav-item  submenu <?php if($navroute == "Home"){ echo "active";} ?>">
                                <a class="nav-link" href="<?php echo base_url()?>"
                                    aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class=" submenu nav-item <?php if($navroute == "Class"){ echo "active";} ?>"><a title="Pages" class="nav-link"
                                 aria-haspopup="true" aria-expanded="false"
                                    href="#">Class</a>
                            </li>
                            <li class="nav-item  submenu <?php if($navroute == "Blog"){ echo "active";} ?>">
                                <a class="nav-link" href="#"
                                    aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item  submenu <?php if($navroute == "Community"){ echo "active";} ?>">
                                <a class="nav-link" href="#"
                                    aria-haspopup="true" aria-expanded="false">
                                    Community
                                </a>
                            </li>
                        </ul>
                        <?php if($user !== null): ?>
                        <div class="dropdown" >
                            <button class="btn_get btn_hover hidden-sm hidden-xs" id="dropdownMenu2" data-toggle="dropdown" data-target="#dropdownprofil">Profil</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" name="dropdownprofil">
                                <!-- <span class="dropdown-item-text" id="user"></span> -->
                                <span class="dropdown-item-text"><?php  echo $user['user']->first_name . " " . $user['user']->last_name . " (" . $user['group'][0]->description . ")"; ?></span>
                                <hr>
                                <?php if($user['group'][0]->id == 1): ?>
                                    <a class="dropdown-item" type="button" href="<?php echo base_url('/admin') ?>">Admin</a>
                                <?php endif ?>

                                <a class="dropdown-item" type="button" href="<?php echo base_url('/login/logout') ?>">Logout</a>
                            </div>
                        </div>
                        <?php else: ?>
                            <button  class="btn_get btn_hover hidden-sm hidden-xs" data-toggle="modal" data-target="#exampleModalCenter" >Sign In</button>
                        <?php endif ?>
                    </div>
                </div>
            </nav>
        </header>

        

<?php
$this->load->view('template/login');
?>