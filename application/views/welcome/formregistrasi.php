<?php
$this->load->view('template/header');
$this->load->view('template/preloader');
$this->load->view('template/navbar');
?>
  
   <div class="container mt-5 pt-5">
    <div class="row">
		<div class="col-md-2"></div>
           <div class="col-md-8">
       
            <div class="w3-form w3-white">
    			<div class="card">
					<div class="card-header w3-blue">Registrasi</div>
    			</div>
    			<div class="card-body">
                  <form id="register" action="<?php echo site_url('login/prosesregistrasi');?>" method="post">
                  <?php if ($message!=null): ?>
                      <!-- <div class="alert alert-warning"><?php echo $message;?></div> -->
                  <?php endif; ?>
                      <div class="form-group">
                        <label for="nama">Full Name</label>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama Depan">
                              <span class="text-error"><?php echo form_error('first_name'); ?></span>
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nama Belakang">
                              <span class="text-error"><?php echo form_error('last_name'); ?></span>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                              <div class="col-md-6 col-sm-6">
                                  <label for="phone">Phone</label>
                                  <input type="text" class="form-control" id="phone" name="phone" placeholder="nomer tlp">
                                  <span class="text-error"><?php echo form_error('phone'); ?></span>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                <label for="phone">Register as</label>
                                <select class="custom-select" id="group" name="group" onchange="changehandler(this)">
                                  <option value="3">Talent</option>
                                  <option value="4">Company</option>
                                </select>
                              </div>
                          </div>
                        
                      </div>
                      <div id="perusahaan_sec" style="display: none;">
                        <hr>
                        <div class="col-md-12">
                                <label for="company">Company</label>
                                <select class="custom-select" id="company" name="company">
                                </select>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        <span class="text-error"><?php echo form_error('email'); ?></span>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        <span class="text-error"><?php echo form_error('password'); ?></span>
                      </div>
                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary w3-blue" value="Daftar">
                      </div>
                  </form>
              </div>
			   </div>
            </div>
        </div>
    </div>
</div>

<script>

function changehandler(e){
  var value = e.value;
  if(value == 4){
    document.getElementById('perusahaan_sec').style.display = 'block';
  } else {
    document.getElementById('perusahaan_sec').style.display = 'none';
    $("#company").val("");
  }
}
var companies;

$.get("<?php echo base_url("/api/companies") ?>", function(data){
    console.log("data", data);
    companies = data;
    companies.map((r) => ( $("select#company").append( $("<option />").val(r.id).text(r.name) )));
});


</script>


<?php
$this->load->view('template/footer');
?>