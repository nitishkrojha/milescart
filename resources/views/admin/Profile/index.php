 <?= $this->extend('Common/layout') ?>

 <!--
    Everything between `section()` and `endSection()
    is inserted into the `layout` view where it calls
    `$this->renderSection('content')`.
-->
 <?= $this->section('content') ?>
 <main class="layout-page-content css-zyg32b">
     <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
         <div class="MuiTabs-root css-z37wqw">

             <section style="background-color: #fff;">
                 <div class="container py-5">

                     <div class="row">
                         <div class="col-lg-4">
                             <div class="card mb-4">
                                 <div class="card-body text-center">
                                     <img src="/images/1.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                     <h5 class="my-3">Nitish </h5>
                                     <p class="text-muted mb-1">Super Admin</p>
                                     <p class="text-muted mb-4">Indiranagar, Banagalore</p>
                                     <div class="d-flex justify-content-center mb-2">
                                         <button type="button" class="btn btn-primary" style="background: #ff4c51;border: #ff4c51;font-size: 14px;">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-8">
                             <div class="card mb-4">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <p class="mb-0">Full Name</p>
                                         </div>
                                         <div class="col-sm-9">
                                             <p class="text-muted mb-0">Nitish Kr Ojha</p>
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <p class="mb-0">Email</p>
                                         </div>
                                         <div class="col-sm-9">
                                             <p class="text-muted mb-0">mail@domain.com</p>
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <p class="mb-0">Phone</p>
                                         </div>
                                         <div class="col-sm-9">
                                             <p class="text-muted mb-0">+91 8804118590</p>
                                         </div>
                                     </div>

                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <p class="mb-0">Address</p>
                                         </div>
                                         <div class="col-sm-9">
                                             <p class="text-muted mb-0">Indiranagar,Bangalore</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card mb-4 mb-md-0">
                                         <button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" type="button" data-toggle="modal" data-target="#modalDiscount" style="float:right">
                                             <i class="fa fa-edit"></i> Update Profile
                                         </button>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card mb-4 mb-md-0">
                                         <button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" tabindex="0" type="button" style="float:right">
                                             <i class="fa fa-edit"></i> Change Password
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>


         </div>

 </main>




 <!--Modal: modalDiscount-->
 <div class="modal fade right" id="modalDiscount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
     <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
         <!--Content-->
         <div class="modal-content">
             <!--Header-->
             <div class="modal-header">
                 <p class="heading">
                     <strong>Update Profile</strong>>
                 </p>

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" class="white-text">&times;</span>
                 </button>
             </div>

             <!--Body-->
             <div class="modal-body">

                 <div class="row">
                     <div class="col-12">
                         <div class="form-group">
                             <label for="disabledSelect">Your Name</label>
                             <input type="text" class="form-control" placeholder="Nitish Kr Ojha">
                         </div>
                         <div class="form-group">
                             <label for="disabledSelect">Phone</label>
                             <input type="text" class="form-control" placeholder="8804118590">
                         </div>
                         <div class="form-group">
                             <label for="disabledSelect">Email</label>
                             <input type="text" class="form-control" placeholder="mail@gmail.com">
                         </div>
                         <div class="form-group">
                             <label for="disabledSelect">Role</label>
                             <select class="form-control">
                                 <option>Super Admin</option>
                                 <option>Admin</option>
                                 <option>Employee</option>

                             </select>
                         </div>
                         <div class="form-group">
                             <label for="disabledSelect">Profile Image</label>
                             <input type="file" class="form-control" placeholder="mail@gmail.com">
                         </div>
                     </div>


                 </div>
             </div>

             <!--Footer-->
             <div class="modal-footer flex-center">
                 <a type="button" class="close" data-dismiss="modal" aria-label="Close">Close
                     <i class="far fa-gem ml-1 white-text"></i>
                 </a>
                 <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Update</a>
             </div>
         </div>
         <!--/.Content-->
     </div>
 </div>
 <!--Modal: modalDiscount-->

 <?= $this->endSection() ?>