<?php
$this->load->view('template/header');
$this->load->view('template/preloader');
$this->load->view('template/navbar');
$this->load->view('template/title');

?>

<section class="blog_area_two sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="blogs" class="mb-5">

                        </div>
                        <!-- <div class="blog_list_item blog_list_item_two">
                            <a href="#" class="post_date">
                                <h2>01 <span>Jan</span></h2>
                            </a>
                            <a href="blog-single.html"><img class="img-fluid" src="img/new/blog/blog_img1.png"
                                    alt=""></a>
                            <div class="blog_content">
                                <a href="#">
                                    <h5 class="blog_title">Why I say old chap that is, spiffing jolly good.</h5>
                                </a>
                                <p>Only a quid bobby brilliant bugger Jeffrey owt to do with me lurgy blimey, cheers
                                    well me old mucker geeza bodge some dodgy chav. Say me old mucker bobby I a he lost
                                    his bottle a load of old tosh cup of char cheers bleeding bugger.!</p>
                                <div class="post-info-bottom">
                                    <a href="blog-single.html" class="learn_btn_two">Read More <i
                                            class="arrow_right"></i></a>
                                    <a class="post-info-comments" href="#">
                                        <i class="icon_comment_alt" aria-hidden="true"></i>
                                        <span>3 Comments</span>
                                    </a>
                                </div>

                            </div>
                        </div> -->
                        <div class="blog_list_item qutoe_post">
                            <div class="blog_content">
                                <i class="fas fa-quote-left"></i>
                                <a href="blog-single.html">
                                    <h6>Why I say old chap that is spiffing spend penny tosser brolly the little rotter
                                        fanny around argy bargy.</h6>
                                </a>
                                <span class="author_name">Phillip Anthropy</span>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="list-unstyled page-numbers shop_page_number text-left mt_30">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul>
                        <!-- end pagination -->
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget sidebar_widget search_widget_two">
                                <form action="#" class="search-form input-group">
                                    <input type="search" class="form-control widget_input" placeholder="Search">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <div class="widget sidebar_widget recent_post_widget_two mt_60">
                                <h3 class="widget_title_two">Recent posts</h3>
                                <div class="media post_item">
                                    <img src="img/new/blog/post1.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>Fast App development</h3>
                                        </a>
                                        <a href="#" class="entry_post_info">March 14, 2019</a>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/new/blog/post2.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>Proin gravi nibh velit</h3>
                                        </a>
                                        <a href="#" class="entry_post_info">March 14, 2019</a>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/new/blog/post3.jpg" alt="">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>Massive Integrations</h3>
                                        </a>
                                        <a href="#" class="entry_post_info">March 14, 2019</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar_widget categorie_widget_two mt_60">
                                <h3 class="widget_title_two">Categories</h3>
                                <ul class="list-unstyled">
                                    <li> <a href="#"><span>Fashion</span><em>(54)</em></a> </li>
                                    <li> <a href="#"><span>Food for thought</span><em>(83)</em></a> </li>
                                    <li> <a href="#"><span>Gaming</span><em>(96)</em></a> </li>
                                    <li> <a href="#"><span>Music</span><em>(38)</em></a> </li>
                                    <li> <a href="#"><span>Uncategorized</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>SaasLand</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>Project Management</span><em>(44)</em></a> </li>
                                    <li> <a href="#"><span>Wireframing</span><em>(44)</em></a> </li>
                                </ul>
                            </div>
                            <div class="widget sidebar_widget tag_widget_two mt_60">
                                <h3 class="widget_title_two">Tags</h3>
                                <div class="post-tags">
                                    <a href="#">SaasLand</a>
                                    <a href="#">Web Design</a>
                                    <a href="#">Saas</a>
                                    <a href="#">Cooling System</a>
                                    <a href="#">Corporate</a>
                                    <a href="#">Software</a>
                                    <a href="#">Landing</a>
                                    <a href="#">Wheels</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<script>
    
let blogs;

$.get("<?php echo base_url("/api/blogs") ?>", function(data){
    console.log("data", data);
    blogs = data;
    $("#blogs").html(blogs.map((r) => (`
                        <div class="blog_list_item blog_list_item_two">
                            <a href="#" class="post_date">
                                <h2>${moment(r.lastUpdated).format('DD')}<span>${moment(r.lastUpdated).format('MMM')}</span></h2>
                            </a>
                            <a href="#"><img class="img-fluid" src="${r.thumbnail}"
                                    alt=""></a>
                            <div class="blog_content">
                                <a href="#">
                                    <h5 class="blog_title">${r.title}</h5>
                                </a>
                                <p>${r.text.slice(0,250)}...</p>
                                <div class="post-info-bottom">
                                    <a href="#" class="learn_btn_two">Read More <i
                                            class="arrow_right"></i></a>
                                   
                                </div>

                            </div>
                        </div>
            `)));
});

</script>
<?php
    $this->load->view('template/footer');
?>