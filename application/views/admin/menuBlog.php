
    <div class="sec_title mb-3">
        <h3 class="f_p f_size_22 f_600 t_color3 mb-4">Daftar Artikel & Blog</h3>
        <a class="btn-sm btn button border text-dark border-dark "  data-toggle="modal" data-target="#addBlog"><i class="ti-plus"></i>&nbsp; Add  </a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Last Modified</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td> 8 Hard dan Soft Skill yang Harus Kamu Kuasai</td>
                <td>20-04-2022</td>
                <td>
                    <a class="btn-sm btn button border text-dark "><i class="ti-pencil"></i>&nbsp;   </a>
                    <a class="btn-sm btn button border text-danger "><i class="ti-trash"></i>&nbsp;   </a>
                </td>
            <tr>
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
                            <form action="#" class="row " method="post">
                                <div class="form-group text-dark col-lg-6">
                                    <input class="form-control" type="text" placeholder="judul">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="text" placeholder="Thumbnail Link">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div id="summernote"><p>Hello Summernote</p></div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <button type="submit" class="btn_three">Simpan</button>
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
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 250
      });
  </script>
                                