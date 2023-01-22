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
             <a href="/events/create"><button class="MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButtonBase-root css-6mtojy" tabindex="0" type="button" style="float:right">
                     Create New +
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
         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 css-rpybyc">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-h2qpui">
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-7 css-ea6x8l">
                         <div class="MuiCardContent-root css-12evlce">
                             <h6 class="MuiTypography-root MuiTypography-h6 css-10n93l7">100 Km Activity (Cycling)</h6>
                             <p style="color:#56ca00;font-weight:300;margin:2px;"> Ongoing Event</p>
                             <p style="margin:2px;">15 Jan 22 - 26 Feb 22</p>
                             <p class="MuiTypography-root MuiTypography-body2 css-eemp71">Before there was a United States of America, there were coffee houses, because how are you supposed to build.</p>
                         </div>

                         <div class="MuiCardActions-root MuiCardActions-spacing card-action-dense css-1g3mdot">
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LockOpenOutlineIcon">
                                 <path d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">₹ 1000/-</p>
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountOutlineIcon">
                                 <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">15 Members</p>
                         </div>
                     </div>
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-5 css-8jknw0">
                         <div class="MuiCardContent-root css-3osu7n"><img alt="Stumptown Roasters" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjxebk7UwGW9iU1oriJ2EoE8ZD1JkI45WxfOaM6zBNevYNNekPeUMNkrwjkydoW6Zu_mo&usqp=CAU" class="css-1qa0psm" /></div>
                     </div>
                 </div>
             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Reg From 18'July 22-19'July 22</p>
                 <p style="float:right"> See More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                 </p>
             </div>
         </div>



         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 css-rpybyc">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-h2qpui">
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-7 css-ea6x8l">
                         <div class="MuiCardContent-root css-12evlce">
                             <h6 class="MuiTypography-root MuiTypography-h6 css-10n93l7">100 Km Activity (Cycling)</h6>
                             <p style="color:#56ca00;font-weight:300;margin:2px;"> Ongoing Event</p>
                             <p style="margin:2px;">15 Jan 22 - 26 Feb 22</p>
                             <p class="MuiTypography-root MuiTypography-body2 css-eemp71">Before there was a United States of America, there were coffee houses, because how are you supposed to build.</p>
                         </div>

                         <div class="MuiCardActions-root MuiCardActions-spacing card-action-dense css-1g3mdot">
                             <i class="fa fa-unlock" aria-hidden="true" style="color:#56ca00"></i>

                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp" style="color:#56ca00; margin-left:10px;margin-right :10px;">Free Event</p>
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountOutlineIcon">
                                 <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">15 Members</p>
                         </div>
                     </div>
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-5 css-8jknw0">
                         <div class="MuiCardContent-root css-3osu7n"><img alt="Stumptown Roasters" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjxebk7UwGW9iU1oriJ2EoE8ZD1JkI45WxfOaM6zBNevYNNekPeUMNkrwjkydoW6Zu_mo&usqp=CAU" class="css-1qa0psm" /></div>
                     </div>
                 </div>
             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Reg From 18'July 22-19'July 22</p>
                 <p style="float:right"> See More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                 </p>
             </div>
         </div>



         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 css-rpybyc">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-h2qpui">
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-7 css-ea6x8l">
                         <div class="MuiCardContent-root css-12evlce">
                             <h6 class="MuiTypography-root MuiTypography-h6 css-10n93l7">100 Km Activity (Cycling)</h6>
                             <p style="color:#fc5501;font-weight:300;margin:2px;"> Upcoming Event</p>
                             <p style="margin:2px;">15 Jan 22 - 26 Feb 22</p>
                             <p class="MuiTypography-root MuiTypography-body2 css-eemp71">Before there was a United States of America, there were coffee houses, because how are you supposed to build.</p>
                         </div>

                         <div class="MuiCardActions-root MuiCardActions-spacing card-action-dense css-1g3mdot">
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LockOpenOutlineIcon">
                                 <path d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">₹ 500/-</p>
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountOutlineIcon">
                                 <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">15 Members</p>
                         </div>
                     </div>
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-5 css-8jknw0">
                         <div class="MuiCardContent-root css-3osu7n"><img alt="Stumptown Roasters" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjxebk7UwGW9iU1oriJ2EoE8ZD1JkI45WxfOaM6zBNevYNNekPeUMNkrwjkydoW6Zu_mo&usqp=CAU" class="css-1qa0psm" /></div>
                     </div>
                 </div>
             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Reg From 18'July 22-19'July 22</p>
                 <p style="float:right"> See More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                 </p>
             </div>
         </div>



         <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 css-rpybyc">
             <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root css-1k3q5ab">
                 <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-6 css-h2qpui">
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-7 css-ea6x8l">
                         <div class="MuiCardContent-root css-12evlce">
                             <h6 class="MuiTypography-root MuiTypography-h6 css-10n93l7">100 Km Activity (Cycling)</h6>
                             <p style="color:#56ca00;font-weight:300;margin:2px;"> Ongoing Event</p>
                             <p style="margin:2px;">15 Jan 22 - 26 Feb 22</p>
                             <p class="MuiTypography-root MuiTypography-body2 css-eemp71">Before there was a United States of America, there were coffee houses, because how are you supposed to build.</p>
                         </div>

                         <div class="MuiCardActions-root MuiCardActions-spacing card-action-dense css-1g3mdot">
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LockOpenOutlineIcon">
                                 <path d="M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10A2,2 0 0,1 6,8H15V6A3,3 0 0,0 12,3A3,3 0 0,0 9,6H7A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,17A2,2 0 0,1 10,15A2,2 0 0,1 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">₹ 1100/-</p>
                             <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-95m1ec" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountOutlineIcon">
                                 <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z"></path>
                             </svg>
                             <p class="MuiTypography-root MuiTypography-body2 css-4yvesp">15 Members</p>
                         </div>
                     </div>
                     <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-5 css-8jknw0">
                         <div class="MuiCardContent-root css-3osu7n"><img alt="Stumptown Roasters" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjxebk7UwGW9iU1oriJ2EoE8ZD1JkI45WxfOaM6zBNevYNNekPeUMNkrwjkydoW6Zu_mo&usqp=CAU" class="css-1qa0psm" /></div>
                     </div>
                 </div>
             </div>
             <div class="eventBorder">
                 <p style="float:left;font-weight:400">Reg From 18'July 22-19'July 22</p>
                 <p style="float:right"> See More <i class="fa fa-arrow-right" aria-hidden="true"></i>
                 </p>
             </div>
         </div>

     </div>

 </main>

 <?= $this->endSection() ?>