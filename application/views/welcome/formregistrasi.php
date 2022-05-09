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
                  <form action="<?php echo site_url('login/prosesregistrasi');?>" method="post">
                  <?php if ($message!=null): ?>
                      <!-- <div class="alert alert-warning"><?php echo $message;?></div> -->
                  <?php endif; ?>
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
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
                                  <label for="phone">No Tlp</label>
                                  <input type="text" class="form-control" id="phone" name="phone" placeholder="nomer tlp">
                                  <span class="text-error"><?php echo form_error('phone'); ?></span>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                <label for="phone">Daftar Sebagai</label>
                                <select class="custom-select" id="group" name="group">
                                  <option value="3">Talent</option>
                                  <option value="4">Perusahaan</option>
                                </select>
                              </div>
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


<?php
$this->load->view('template/footer');
?>