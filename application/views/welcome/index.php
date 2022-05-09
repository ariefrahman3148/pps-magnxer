<?php
$this->load->view('template/header');
$this->load->view('template/preloader');
$this->load->view('template/navbar');
$this->load->view('template/title');

// var_dump($user);
?>

<section class="shop_list_area mt-5 pb-5 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-5">
                        <div class="shop_menu_left">
                            <p>Showing 1–14 of 22 results</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-7">
                        <div class="shop_menu_right d-flex align-items-center justify-content-end">
                            <h5>Sort by </h5>
                            <form method="get" action="#">
                                <select class="selectpickers">
                                    <option value="menu_order">Default Sorting</option>
                                    <option value="popularity">Popularity</option>
                                    <option value="rating">Average rating</option>
                                    <option value="date">Feature</option>
                                    <option value="date">Newness</option>
                                </select>
                            </form>
                            <div class="view-style shop_grid">
                                <div class="list-style">
                                    <a href="#"><i class="ti-layout-grid2"></i></a>
                                </div>
                                <div class="grid-style active">
                                    <a href="#"><i class="ti-menu-alt"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-0 job_listing ">
					<div class="col-md-6 listing_tab ">
						<div class="item lon new " style="height:90%">
                            <div class="list_item  h-100" >
                                <figure><a href="#"><img src="<?php echo base_url('asset/magnxer/jobicon.png')?>" alt=""></a></figure>
                                <div class="joblisting_text">
                                    <div class="job_list_table">
                                        <div class="jobsearch-table-cell">
                                            <h4><a href="#" class="f_500 t_color3">Property Finder in are Agent</a></h4>
                                            <ul class="list-unstyled">
                                                <li class="p_color">Full Time</li>
                                                <li>London, United Kingdom</li>
                                                <li>Published 4 months ago</li>
                                            </ul>
                                        </div>
                                        <div class="jobsearch-table-cell">
                                            <div class="jobsearch-job-userlist">
                                                <a href="#" id="aply" class="apply_btn">Apply</a>
                                                <!-- <div class="like-btn">
                                                    <a href="javascript:void(0);" class="shortlist"> <i
                                                            class="ti-heart"></i> </a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
                <div class="col-lg-12">
                    <ul class="list-unstyled page-numbers shop_page_number">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <script> 
    $("#aply").click(function(){
        alert("Data: ");
        $.get("<?php base_url('welcome/user') ?>", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    }); 
    </script>