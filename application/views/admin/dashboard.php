<?php
$this->load->view('template/header');
$this->load->view('template/preloader');
$this->load->view('template/navbar');
// $this->load->view('template/title');

// var_dump($user);
?>
<section class="job_apply_area sec_pad bg_color">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 pl_70">
                        <div class="job_info  p-0 ">
                            <div class="info_item p-2 text-primary" id="menu1">
                                <a class="h6 btn button"  >
                                    Artikel & Blog
                                </a>
                            </div>
                            <div class="info_item p-2" id="menu2">
                                <a class="h6  btn button" >
                                    Kelas & Materi
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="accordion">
                            <div class="card">
                                <div id="collapseOne" class="collapse in show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <?php $this->load->view('admin/menuBlog');?>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    menu 2
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $( "#menu1" ).click(function() {
                
                $("#menu1").addClass("text-primary");
                $("#menu2").removeClass("text-primary");
                $("#collapseOne").addClass("in show");
                $("#collapseTwo").removeClass("in show");
                
            });
            $( "#menu2" ).click(function() {
                $("#menu1").removeClass("text-primary");
                $("#menu2").addClass("text-primary");
                $("#collapseOne").removeClass("in show");
                $("#collapseTwo").addClass("in show");
            });
        </script>

<?php
    $this->load->view('template/footer');
?>