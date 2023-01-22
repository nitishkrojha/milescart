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
             <h5 class="MuiTypography-root MuiTypography-h5 css-f2gabn" style="float:left">Brands</h5>
             <a href="/brands/"><button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" tabindex="0" type="button" style="float:right">
                     Brands List
                 </button></a>
         </div>
         <!-- <div class="row"> -->

         <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedStart css-1jqhuxz col-md-6">
             <input type="text" class="form-control" placeholder="Search Brands...">
         </div>
         <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedStart css-1jqhuxz col-md-6">
             <select class="form-select col-md-6">
                 <option hidden>Filter By</option>
                 <option>Newly Added</option>
                 <option>Active Brands</option>
                 <option>Inactive Brands</option>
                 <option>All</option>
             </select>
         </div>

         <!-- </div> -->

         <div class="row" style="    width: 100%;background: white;padding: 20px;margin-left: 10px;margin-top: 10px;">

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Brand Name</label>
                     <input type="text" class="form-control" placeholder="Milescart">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Attach Logo</label>
                     <input type="file" class="form-control" placeholder="Attachement">

                 </div>
             </div>



             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Contact Person Name</label>
                     <input type="text" class="form-control" placeholder="Varun">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Contact Number</label>
                     <input type="text" class="form-control" placeholder="+91 8804XXXX90">

                 </div>
             </div>


             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Email</label>
                     <input type="email" class="form-control" placeholder="mail@domain.com">
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">

                 </div>
             </div>



             <div class="col-md-6">
                 <div class="form-group">

                     <input type="submit" class="form-control" value="Draft Brand" style="background:#e9e0f9;">

                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">

                     <input type="submit" class="form-control" value="Create Brand" style="background:#9256fd;color:#fff;">
                 </div>
             </div>


         </div>

     </div>





     </div>





     </div>

 </main>
 <?= $this->endSection() ?>