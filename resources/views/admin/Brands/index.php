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
             <a href="/brands/create"><button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" tabindex="0" type="button" style="float:right">
                     Create New +
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






         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-4 css-1twzmnh">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiCardContent-root css-qkeyyk" style="padding-bottom: 0px !important;padding-top:10px !important">
                     <h6 class="MuiTypography-root MuiTypography-h6 css-1ig1r3r">Milescart</h6>
                     <div style="background: #ffe075;padding: 20px;border-radius: 10px;margin-bottom:20px;width:100%">
                         <img src="/images/brands/milescart.png" height="100px">

                     </div>

                     <p class="MuiTypography-root MuiTypography-body2 css-mmq31">
                         <i class="fa fa-user" aria-hidden="true"></i> Nitish Kr Ojha <br>
                         <i class="fa fa-phone" aria-hidden="true"></i> +91 8804118590 <br>
                         <i class="fa fa-envelope" aria-hidden="true"></i> mail@milescart.in <br>


                     </p>

                 </div>

             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Active</p>
                 <p style="float:right"> <i class="fa fa-edit"></i> Edit</i>
                 </p>
             </div>
         </div>


         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-4 css-1twzmnh">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiCardContent-root css-qkeyyk" style="padding-bottom: 0px !important;padding-top:10px !important">
                     <h6 class="MuiTypography-root MuiTypography-h6 css-1ig1r3r">Mentric</h6>


                     <div style="background: #ffe075;padding: 20px;border-radius: 10px;margin-bottom:20px;width:100%">
                         <img src="/images/brands/mentric.png" height="100px">

                     </div>

                     <p class="MuiTypography-root MuiTypography-body2 css-mmq31">
                         <i class="fa fa-user" aria-hidden="true"></i> Nitish Kr Ojha <br>
                         <i class="fa fa-phone" aria-hidden="true"></i> +91 8804118590 <br>
                         <i class="fa fa-envelope" aria-hidden="true"></i> mail@milescart.in <br>


                     </p>

                 </div>

             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Active</p>
                 <p style="float:right"> <i class="fa fa-edit"></i> Edit</i>
                 </p>
             </div>
         </div>

         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-4 css-1twzmnh">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiCardContent-root css-qkeyyk" style="padding-bottom: 0px !important;padding-top:10px !important">
                     <h6 class="MuiTypography-root MuiTypography-h6 css-1ig1r3r">Strava</h6>

                     <div style="background: #ffe075;padding: 20px;border-radius: 10px;margin-bottom:20px;width:100%">
                         <img src="/images/brands/strava.png" height="100px">

                     </div>

                     <p class="MuiTypography-root MuiTypography-body2 css-mmq31">
                         <i class="fa fa-user" aria-hidden="true"></i> Nitish Kr Ojha <br>
                         <i class="fa fa-phone" aria-hidden="true"></i> +91 8804118590 <br>
                         <i class="fa fa-envelope" aria-hidden="true"></i> mail@milescart.in <br>


                     </p>

                 </div>

             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Active</p>
                 <p style="float:right"> <i class="fa fa-edit"></i> Edit</i>
                 </p>
             </div>
         </div>




     </div>

 </main>

 <?= $this->endSection() ?>