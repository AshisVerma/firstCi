 <?php
  if(!$this->session->userdata("login")){
   return redirect(base_url("/"));
  }

 ?>
<?php  $this->load->view("user/layout/header") ?>

<?php  $this->load->view("user/layout/sidebar") ?>
<style type="text/css">
  .image-box{
    width: 100px;
    height: 100px;
   /* box-shadow: 0px 0px 2px #ccc;*/
    position: relative;
    overflow: hidden;
    border-radius: 50%;


  }
  .image-box input{
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    top: 0;
    left: 0;
    z-index: 9999

  }
  .image-show{

    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 99;
  }
</style>
<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
         <!--  <a href="<?php echo site_url('brand') ?> "><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">BRAND LIST</button></a> -->
          </div>

          <div class="row">
           <div class="col-sm-12">
             <?php echo $this->session->flashdata("message")?>
           </div>
            <div class="col-sm-6 col-lg-6 col-md-6">
              <div class="card">
                <div class="card-header bg-primary">
                  <h5 class="text-white" >PROFILE INFORMATION</h5>
                 

                </div>
                <div class="card-body">
                   <form action="<?php echo site_url('user/profile_update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
                   <div class="row">
                     <div class="col-sm-3">
                        <div class="form-group">
                      <div class="image-box">
                        <input type="file" name="image">
                        <?php if(empty($data[0]['image'])){?>

                          <img class="image-show" src="<?php  echo base_url('public/upload-image.png') ?>">

                        <?php } else{ ?>
                       <img class="image-show" src="<?php  echo base_url("./upload/user/$data[0]['image']"); ?>">

                      <?php }?>
                    </div>
                    
                  </div>
                     </div>
                     <div class="col-sm-9 d-flex  align-items-center">
                       <div class="form-group">
                         <label>Username</label>
                         <input type="text" name="username" class="form-control shadow-none" placeholder="Username" style="width: 180%" value="<?php echo $data[0]['username']?>">
                       </div>

                     </div>
                   </div>

                   <div class="row">
                     <div class="col">
                       <div class="form-group">
                         <label>Email</label>
                         <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $data[0]['email']?>">
                       </div>
                     </div>
                   </div>
                    <div class="row">
                     <div class="col">
                       <div class="form-group">
                         <label>Password</label>
                         <input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo $data[0]['password']?>">
                       </div>
                     </div>
                   </div>
                    <div class="row">
                     <div class="col">
                       <div class="form-group">
                         <label>Phone</label>
                          <?php if(!empty($data[0]['address'])){?>
                       <input type="number" name="phone" class="form-control" placeholder="Phone" value="<?php echo $data[0]['phone']?>">
                      <?php } else{ ?>
                       <input type="number" name="phone" class="form-control" placeholder="Phone" >

                      <?php }?>
                         
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col">
                       <div class="form-group">
                         <label>Address</label>
                      <?php if(!empty($data[0]['address'])){?>
                        <textarea class="form-control" name="address">
                          <?php echo $data[0]['address']?>
                        </textarea>
                      <?php } else{ ?>
                        <textarea class="form-control shadow-none" name="address"></textarea>

                      <?php }?>
                       </div>
                     </div>
                   </div>
                   
         <button class="btn btn-primary">Update Profile</button>
       </form>
                </div>
              </div>
            </div>
          </div>

        </div>
<!---add BRAND modal ------->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning py-3">
        <h5 class="modal-title text-white" id="exampleModalLabel ">ADD BRAND</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
           <label>BRAND NAME</label>
           <input type="text" name="name" placeholder="BRAND Name" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>BRAND CODE</label>
           <input type="text" name="code" placeholder="BRAND Code" class="form-control" required="">
         </div>
         <div class="form-group">
           <label>DESCRITPION</label>
           <input type="text" name="desc" placeholder="Put some description" class="form-control" required="">
         </div>
          <div class="form-group">
           <label>STATUS</label>
          <select class="form-control">
            <option value="1">Active</option>
            <option value="o">Deactive</option>
            <
          </select>
         </div>

         <button class="btn btn-primary mb-0">ADD BRAND</button>
         
       </form>
      </div>
     
    </div>
  </div>
</div> -->
<!--end add BRAND modal ----------->
                          
<?php  $this->load->view("user/layout/footer") ?>

       <!-- <script type="text/javascript">
         var india="I love India";
            console.log(india.replace("love",""));

       </script> -->