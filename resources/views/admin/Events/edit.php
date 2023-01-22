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
             <h5 class="MuiTypography-root MuiTypography-h5 css-f2gabn" style="float:left">Events</h5>
             <a href="/events/"><button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" tabindex="0" type="button" style="float:right">
                     Event List
                 </button></a>
         </div>
         <!-- <div class="row"> -->

         <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedStart css-1jqhuxz col-md-6">
             <input type="text" class="form-control" placeholder="Search Events...">
         </div>
         <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedStart css-1jqhuxz col-md-6">
             <select class="form-select col-md-6">
                 <option hidden>Filter By</option>
                 <option>Newly Added</option>
                 <option>Ongoing Events</option>
                 <option>Upcoming Events</option>
                 <option>All</option>
             </select>
         </div>

         <!-- </div> -->

         <div class="row" style="    width: 100%;background: white;padding: 20px;margin-left: 10px;margin-top: 10px;">

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event Title</label>
                     <input type="text" class="form-control" placeholder="100 Km Running">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Host By</label>
                     <select id="disabledSelect" class="form-control">
                         <option>Mentric</option>
                         <option>Milescart</option>

                     </select>
                 </div>
             </div>



             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event Location</label>
                     <input type="text" class="form-control" placeholder="Bangalore">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Activity Type</label>
                     <select id="disabledSelect" class="form-control">
                         <option>Running</option>
                         <option>Walking</option>
                         <option>Cycling</option>


                     </select>
                 </div>
             </div>


             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Distance(Km)</label>
                     <input type="number" class="form-control" placeholder="10 Km">
                 </div>
             </div>






             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event Mode</label>
                     <label>
                         <input type="radio" name="colorCheckbox" value="free" checked> Free
                     </label>
                     <label>
                         <input type="radio" name="colorCheckbox" value="paid"> Paid
                     </label>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="form-group">

                     <div class="form-b" style="display: none">
                         <label for="disabledSelect">Entry Fee (INR)</label>
                         <input type="number" name="Entry Fee">
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">


                 </div>
             </div>




             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event Start Date</label>
                     <input type="date" class="form-control" placeholder="Date">

                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event End Date</label>
                     <input type="date" class="form-control" placeholder="Date">

                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Reg Start Date</label>
                     <input type="date" class="form-control" placeholder="Date">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Reg End Date</label>
                     <input type="date" class="form-control" placeholder="Date">

                 </div>
             </div>



             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event Rule</label>
                     <textarea id="form22" class="md-textarea form-control" rows="3"></textarea>
                 </div>
             </div>


             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Event Description</label>
                     <textarea id="form22" class="md-textarea form-control" rows="3"></textarea>
                 </div>

             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Max Enrollment</label>
                     <input type="number" class="form-control" placeholder="Max Enrollment">
                 </div>
             </div>



             <div class="col-md-6">

                 <label for="disabledSelect">Prize Distribution</label>

                 <table id="myTable" class=" table order-list">

                     <tbody>
                         <tr>
                             <td class="col-sm-4">
                                 <input type="text" name="name" placeholder="Prize Title" class="form-control" />
                             </td>
                             <td class="col-sm-4">
                                 <input type="number" name="prize" placeholder="Prize Money" class="form-control" />
                             </td>

                             <td class="col-sm-2"><a class="deleteRow"></a>

                             </td>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td colspan="5" style="text-align: right;">
                                 <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add New +" style="font-size: 12px !important;background:#9256fd;color:#fff" />
                             </td>
                         </tr>
                         <tr>
                         </tr>
                     </tfoot>
                 </table>

             </div>

             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Rewards Point</label>
                     <input type="text" class="form-control" placeholder="Rewards">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="disabledSelect">Attach Event thumbnail</label>
                     <input type="file" class="form-control" placeholder="Attachement">

                 </div>
             </div>



             <div class="col-md-6">
                 <div class="form-group">

                     <input type="submit" class="form-control" value="Draft Event" style="background:#e9e0f9;">

                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">

                     <input type="submit" class="form-control" value="Create Event" style="background:#9256fd;color:#fff;">
                 </div>
             </div>


         </div>

     </div>





     </div>





     </div>

 </main>


 <script type="text/javascript">
     $(document).ready(function() {
         $('input[name=colorCheckbox]:radio').change(function(e) {
             let value = e.target.value.trim()


             switch (value) {
                 case 'paid':
                     $('.form-b').show()
                     break;
                 case 'free':
                     $('.form-b').hide()
                     break;

                 default:
                     break;
             }
         })
     })






     $(document).ready(function() {
         var counter = 0;

         $("#addrow").on("click", function() {
             var newRow = $("<tr>");
             var cols = "";

             cols += '<td><input type="text" class="form-control" placeholder="Prize Title" name="name' + counter + '"/></td>';
             cols += '<td><input type="number" class="form-control" placeholder="Prize Money" name="prize' + counter + '"/></td>';

             cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
             newRow.append(cols);
             $("table.order-list").append(newRow);
             counter++;
         });



         $("table.order-list").on("click", ".ibtnDel", function(event) {
             $(this).closest("tr").remove();
             counter -= 1
         });


     });



     function calculateRow(row) {
         var price = +row.find('input[name^="price"]').val();

     }

     function calculateGrandTotal() {
         var grandTotal = 0;
         $("table.order-list").find('input[name^="price"]').each(function() {
             grandTotal += +$(this).val();
         });
         $("#grandtotal").text(grandTotal.toFixed(2));
     }
 </script>
 <?= $this->endSection() ?>