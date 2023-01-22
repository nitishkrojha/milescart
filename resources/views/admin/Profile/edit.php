 <?= $this->extend('Common/layout') ?>

 <!--
    Everything between `section()` and `endSection()
    is inserted into the `layout` view where it calls
    `$this->renderSection('content')`.
-->
 <?= $this->section('content') ?>

 <main class="layout-page-content css-zyg32b">
     <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-h2qpui">
         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-lovg0e">
             <h5 class="MuiTypography-root MuiTypography-h5 css-f2gabn" style="float:left">Admin Users</h5>
             <a href="/profile/users"><button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" tabindex="0" type="button" style="float:right">
                     Users List
                 </button></a>
         </div>
         <!-- <div class="row"> -->


         <!-- </div> -->

         <div class="row" style="    width: 100%;background: white;padding: 20px;margin-left: 10px;margin-top: 10px;">

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">User Name</label>
                     <input type="text" class="form-control" placeholder="Nitish">
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Email</label>
                     <input type="text" class="form-control" placeholder="mail@gmail.com">
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Phone</label>
                     <input type="text" class="form-control" placeholder="+91 8804118590">
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Gender</label>
                     <select class="form-control">
                         <option value="">Male</option>
                         <option value="">Female</option>

                     </select>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Role</label>
                     <select class="form-control">
                         <option value="">Admin</option>
                         <option value="">Subadmin</option>
                         <option value="">Operation</option>
                         <option value="">Operation</option>



                     </select>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Password</label>
                     <input type="hidden" class="form-control" placeholder="">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Attach Image</label>
                     <input type="file" class="form-control" placeholder="Attachement">

                 </div>
             </div>



             <div class="col-md-6">
                 <div class="form-group">

                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">

                     <input type="submit" class="form-control" value="Draft User" style="background:#e9e0f9;">

                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">

                     <input type="submit" class="form-control" value="Create User" style="background:#9256fd;color:#fff;">
                 </div>
             </div>


         </div>

     </div>





     </div>


     </div>

 </main>
 <?= $this->endSection() ?>