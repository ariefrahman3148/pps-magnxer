        <script>
            $( document ).ready(function() {
                let user;
                document.getElementById('logout').style.display = 'none';
                document.getElementById('login').style.display = 'block';
                document.getElementById('admin').style.display = 'none';
                document.getElementById('perusahaan').style.display = 'none';
                

                $.get("<?php echo base_url("/api/user") ?>", function(data){
                    console.log("data", data);
                    document.getElementById('logout').style.display = 'block';
                    document.getElementById('login').style.display = 'none';
                    $("#user").text(data.user.first_name+" "+data.user.last_name+" ("+data.group[0].description+")");
                    if(data.group.filter((g) => g.id == 1).length > 0){
                        document.getElementById('admin').style.display = 'block';
                    } else  if(data.group.filter((g) => g.id == 4).length > 0){
                        document.getElementById('perusahaan').style.display = 'block';
                    }
                })
                .fail(function() {
                })
            });
        </script>

<div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one">
                <div class="container-fluid custom_container p0">
                    <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('asset/magnxer/logo.png') ?>" srcset="img/logo2x.png 2x" alt="logo"></a>
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
                                <a class="nav-link" href="<?php echo base_url("/blogs")?>"
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

                        <div class="dropdown" id="logout" >
                            <button class="btn_get btn_hover hidden-sm hidden-xs" id="dropdownMenu2" data-toggle="dropdown" data-target="#dropdownprofil">Profil</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" name="dropdownprofil">
                                <span class="dropdown-item-text" id="user"></span>
                                 <hr>
                                <a class="dropdown-item" type="button" id="admin" href="<?php echo base_url('/admin') ?>">Admin</a>
                                <a class="dropdown-item" type="button" id="perusahaan" href="<?php echo base_url('/company') ?>">Company</a>
                                <a class="dropdown-item" type="button" href="<?php echo base_url('/login/logout') ?>">Logout</a>
                            </div>
                        </div>
                            <button  class="btn_get btn_hover hidden-sm hidden-xs" data-toggle="modal" data-target="#exampleModalCenter" id="login" >Sign In</button>

                    </div>
                </div>
            </nav>
        </header>

        

<?php
$this->load->view('template/login');
?>