
    <div class="sec_title mb-3">
        <h3 class="f_p f_size_22 f_600 t_color3 mb-4">Job Lists</h3>
        <a class="btn-sm btn button border text-dark border-dark " ><i class="ti-plus"></i>&nbsp; Add  </a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="jobs">
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



<script>
$(document).on('focusin', function(e) {
  if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
    e.stopImmediatePropagation();
  }
});

let jobs;

$.get("<?php echo base_url("/api/jobs") ?>", function(data){
    console.log("data", data);
    jobs = data;
    $("#jobs").html(jobs.map((r) => (`<tr>
                <th scope="row">${r.jobID}</th>
                <td>${r.jobDesc}</td>
                <td>
                    <a class="btn-sm btn button border text-dark" "><i class="ti-pencil"></i>&nbsp;   </a>
                    <a class="btn-sm btn button border text-danger "><i class="ti-trash"></i>&nbsp;   </a>
                </td>
            <tr>`)));
});


</script>
                                