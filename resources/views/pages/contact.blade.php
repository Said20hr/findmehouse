<x-guest-layout>
    <div id="dtr-main-content" class="dtr-hero-section-top-padding">

        <!--===== section 1 starts =====-->
        <section class="py-4 bg-white">
            <div class="container">
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 text-center">

                        <!-- heading starts -->
                        <div class="dtr-section-heading-wrapper dtr-mb-20">
                            <h2 class="my-4">Start your house search</h2>
                            <p class="text-dark">
                                Find Me a House publishes properties that we have found in our secure member's section.  This section is only for our approved, registered clients.  Leave us your search order to get access to this section.
                                Be sure to choose a suiting home finding programme.
                            </p>
                        </div>
                        <!-- heading ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 mx-auto my-3">
                        <div class="dtr-slick-slider dtr-img-slider-1col">
                            <!-- img 1 -->
                            <div> <img src="assets/images/contact.jpg" class="rounded-2xl" alt="image"> </div>
                            <!-- img 2 -->
                            <div> <img src="assets/images/c2.jpg" class="rounded-2xl" alt="image"> </div>
                            <!-- img 3 -->
                            <div> <img src="assets/images/c3.jpg" class="rounded-2xl" alt="image"> </div>
                            <!-- img 4 -->
                            <div> <img src="assets/images/c4.jpg" class="rounded-2xl" alt="image"> </div>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                </div>
            </div>
        </section>
        <!--===== section 1 ends =====-->

        <!--== section 2 starts ==-->
        <section class="dtr-pt-100 dtr-pb-70">
            <div class="container">
           <div class="col-8 mx-auto">
               <form id="contactform" method="post" action="php/contact-form.php">
                   <fieldset>

                       <!-- form two columns start -->
                       <div class="dtr-form-row dtr-form-row-2col clearfix">
                           <div class="dtr-form-column">
                               <p class="dtr-form-field"> <span class="dtr-form-subtext">Your Name</span>
                                   <input name="name"  type="text" placeholder="Johnathon Doelsen">
                               </p>
                           </div>
                           <div class="dtr-form-column">
                               <p class="dtr-form-field"> <span class="dtr-form-subtext">Email Address</span>
                                   <input name="email"  class="required email" type="text" placeholder="john@example.com">
                               </p>
                           </div>
                       </div>
                       <!-- form two columns ends -->

                       <p class="dtr-form-field"> <span class="dtr-form-subtext">I'm Looking for ...</span>
                           <input name="subject"  type="text" placeholder="3 Bedroom villa apartment">
                       </p>
                       <p class="antispam">Leave this empty: <br />
                           <input name="url" />
                       </p>
                       <p class="dtr-form-field"> <span class="dtr-form-subtext">Your Message</span>
                           <textarea rows="6" name="message" id="message" class="required"  placeholder="Please write in brief..."></textarea>
                       </p>
                       <p class="text-center dtr-mb-0">
                           <button class="dtr-btn dtr-btn-right-icon btn-outline-dark" type="submit">Send Message <span class="btn-span bg-blue color-white"><i class="icon-send"></i></span></button>
                       </p>
                       <div id="result"></div>
                   </fieldset>
               </form>
           </div>


            </div>
        </section>
        <!--== section 2 ends ==-->

        <!--== section 3 starts ==-->
        <section class="dtr-section dtr-box-layout dtr-py-50 bg-white text-center">
            <div class="container">

                <!-- box wrapper starts -->
                <div class="dtr-box-sm dtr-mr-5 bg-medium-blue"> <i class="icon-bed"></i><br>
                    8 <br>
                    Apartment
                </div>
                <!-- box 2 -->
                <div class="dtr-box-sm dtr-mr-5 bg-medium-blue"> <i class="icon-bath"></i><br>
                    9 <br>
                    Rooms
                </div>
                <!-- box 3 -->
                <div class="dtr-box-sm bg-medium-blue"> <i class="icon-ruler-combined"></i><br>
                    9542 <br>
                    Studio
                </div>
                <!-- box wrapper ends -->

            </div>
        </section>
        <!--== section 3 ends ==-->

        <!--== section 4 starts ==-->
        <section class="bg-white dtr-py-100 dtr-mt-100">

        </section>
        <!--== section 4 ends ==-->

    </div>
</x-guest-layout>
