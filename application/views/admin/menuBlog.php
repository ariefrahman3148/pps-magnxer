
    <div class="sec_title mb-3">
        <h3 class="f_p f_size_22 f_600 t_color3 mb-4">Daftar Artikel & Blog</h3>
        <a class="btn-sm btn button border text-dark border-dark "  data-toggle="modal" data-target="#addBlog"><i class="ti-plus"></i>&nbsp; Add  </a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Last Modified</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="blogs">
            <!-- <tr>
                <th scope="row"></th>
                <td> 8 Hard dan Soft Skill yang Harus Kamu Kuasai</td>
                <td>20-04-2022</td>
                <td>
                    <a class="btn-sm btn button border text-dark "><i class="ti-pencil"></i>&nbsp;   </a>
                    <a class="btn-sm btn button border text-danger "><i class="ti-trash"></i>&nbsp;   </a>
                </td>
            <tr> -->
        </tbody>
    </table>

    <!-- Modal Add Blog -->
<div class="modal fade" id="addBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width:80%" role="document">
    <div class="modal-content">
        <section class=" " >
            <div class="container">
                <div class="sign_info pt-3" >
                        <div class="col-lg-12">
                        <div class="job_apply text-dark">
                            <div class="sec_title mb_40">
                                <h3 class="f_p f_size_22 f_600 t_color3 mb_20">Add Blog</h3>
                            </div>
                            <form id="blogadd" action="#" class="row " method="post">
                                <div class="form-group text-dark col-lg-6">
                                    <input class="form-control" type="text" id="title" placeholder="judul">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="text" id="thumbnail" placeholder="Thumbnail Link">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea id="tiny" name="text"></textarea>
                                </div>
                                
                                <div class="col-lg-12">
                                    <button type="submit" id="blogadd_btn" class="btn_three">Simpan</button>
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
<!-- end modal add -->

<!-- modal edit -->
  <div class="modal fade" id="editBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width:80%" role="document">
    <div class="modal-content">
        <section class=" " >
            <div class="container">
                <div class="sign_info pt-3" >
                        <div class="col-lg-12">
                        <div class="job_apply text-dark">
                            <div class="sec_title mb_40">
                                <h3 class="f_p f_size_22 f_600 t_color3 mb_20">Edit Blog</h3>
                            </div>
                            <form id="blogadd" action="#" class="row " method="post">
                            <input class="form-control" hidden type="text" id="id2" placeholder="judul">
                                <div class="form-group text-dark col-lg-6">
                                    <input class="form-control" type="text" id="title2" placeholder="judul">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="text" id="thumbnail2" placeholder="Thumbnail Link">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea id="tiny2" name="text"></textarea>
                                </div>
                                
                                <div class="col-lg-12">
                                    <button type="submit" id="blogupdate_btn" class="btn_three">Simpan</button>
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
<!-- end modal edit -->

<script>
$(document).on('focusin', function(e) {
  if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
    e.stopImmediatePropagation();
  }
});

let user;
let blogs;

$.get("<?php echo base_url("/api/user") ?>", function(data){
    console.log("data", data);
    user = data;
});

$.get("<?php echo base_url("/api/blogs") ?>", function(data){
    console.log("data", data);
    blogs = data;
    $("#blogs").html(blogs.map((r) => (`<tr>
                <th scope="row">${r.id}</th>
                <td>${r.title}</td>
                <td>${r.lastUpdated}</td>
                <td>
                    <a class="btn-sm btn button border text-dark" data-toggle="modal" data-target="#editBlog" onclick="edit(${r.id})"><i class="ti-pencil"></i>&nbsp;   </a>
                    <a class="btn-sm btn button border text-danger "><i class="ti-trash"></i>&nbsp;   </a>
                </td>
            <tr>`)));
});

function edit(e){


 // Send the data using post
    let s = blogs.filter((r) => r.id == e)[0];
    console.log("s",s);
    $("#title2").val(s.title);
    $("#thumbnail2").val(s.thumbnail);
    tinyMCE.activeEditor.setContent(s.text);
    $("#id2").val(s.id);

};


$("#blogupdate_btn").click(function(e){
 
 // Stop form from submitting normally
    e.preventDefault();

    // console.log(tinyMCE.get('tiny2').getContent());

 // Send the data using post
    $.post( "<?php echo base_url() ?>api/blogupdate", 
    { 
        id: $("#id2").val(),
        title: $("#title2").val(),
        thumbnail: $("#thumbnail2").val(),
        text: tinyMCE.get('tiny2').getContent(),
        author: user.user.id
    },
    function(data, status){
    location.reload();
  });

});

$("#blogadd_btn").click(function(e){
 
 // Stop form from submitting normally
    e.preventDefault();

 // Send the data using post
    $.post( "<?php echo base_url() ?>api/blogadd", 
    { 
        title: $("#title").val(),
        thumbnail: $("#thumbnail").val(),
        text: tinyMCE.get('tiny').getContent(),
        author: user.user.id
    },
    function(data, status){
    location.reload();
  });

});


tinymce.init({
selector: 'textarea#tiny'
});

tinymce.init({
selector: 'textarea#tiny2'
});

</script>
                                