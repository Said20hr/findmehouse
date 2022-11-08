<x-guest-layout>
    <div id="dtr-main-content" class="dtr-hero-section-top-padding">

        <!--===== section 1 starts =====-->
        <section class="py-4">
            <div class="container xl:px-24 lg:px-24 px-6">
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
        <section class="dtr-pt-100 dtr-sm-py-20 dtr-pb-70 bg-white">
            <div class="container xl:px-24 lg:px-24 px-6 ">
                <div class="col-lg-8 col-sm-12 mx-auto">
                    <form id="contactform" method="post" action="">
                        <fieldset>
                       <!-- form two columns start -->
                       <div class="dtr-form-row dtr-form-row-2 clearfix">
                           <div class="dtr-form-column">
                               <p class="dtr-form-field"> <div class="dtr-form-subtext pb-2">Your Name</div>
                                   <input name="name"  type="text" placeholder="Johnathon Doelsen">
                               </p>
                           </div>
                           <div class="dtr-form-column">
                               <p class="dtr-form-field"> <div class="dtr-form-subtext pb-2">Email Address</div>
                                   <input name="email"  class="required email" type="text" placeholder="john@example.com">
                               </p>
                           </div>
                       </div>
                       <!-- form two columns ends -->

                       <p class="dtr-form-field"> <div class="dtr-form-subtext pb-2">I'm Looking for ...</div>
                           <input name="subject"  type="text" placeholder="3 Bedroom villa apartment">
                       </p>
                       <p class="antispam">Leave this empty: <br />
                           <input name="url" />
                       </p>
                       <p class="dtr-form-field"> <div class="dtr-form-subtext pb-2">Your Message</div>
                           <textarea rows="6" name="message" id="message" class="required"  placeholder="Please write in brief..."></textarea>
                       </p>
                       <p class="text-center dtr-mb-0">
                           <button class="dtr-btn dtr-btn-right-icon w-full text-white bg-dark-blue" type="submit">Send Message <span class="btn-span bg-blue color-white"><i class="icon-send"></i></span></button>
                       </p>
                       <div id="result"></div>
                   </fieldset>
               </form>
                </div>
            </div>
        </section>
        <!--== section 2 ends ==-->



    </div>
</x-guest-layout>
