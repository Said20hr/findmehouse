<x-guest-layout>
    <div id="dtr-main-content">

        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
            <!-- dtr-bg-shapes-type-1 : Class for shapes to background. Easy to change image color, refer local help doc -->
            <div class="dtr-box-wrapper-flat xl:px-20 lg:px-20 px-6 pt-12">

                <!--===== row 1 starts =====-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 bg-cover bg-center rounded-xl" style="background-image: url({{asset('assets/images/amsterdam.webp')}});"> </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 py-6 xl:py-12 xl:px-10 lg:px-10 bg-opacity-60 rounded-xl">
                        <!-- intro text -->
                        <div class="dtr-section-heading-wrapper">
                            <h2 class="">We'll find you a home</h2>
                        </div>
                        <p>
                            Relocate Me was formed in 2022 with the idea to bring a more personal touch to the home-finding market in the Netherlands.
                            Its founder and his business partner had worked for a global relocation company and saw how the relocation market
                            had become extremely automated and almost like a production factory.
                            Often clients had only contact by phone or email and never actually met their personal relocator, subsequently being passed through several people down the relocation chain on their journey.
                            We decided to bring that personal touch back to the market.
                        </p>
                        <div class="flex">
                            <!-- button 1 -->
                            <a href="{{route('form')}}" class="dtr-btn text-sm xl:text-base lg:text-base dtr-btn-right-icon dtr-mt-30 dtr-mr-5 btn-dark-blue">Get me Home <span class="btn-span bg-white color-dark-blue"><i class="icon-arrow-right"></i></span></a>
                            <!-- button 2 -->
                            <a href="{{route('contact')}}" class="dtr-btn text-sm xl:text-base lg:text-base dtr-btn-right-icon dtr-mt-30 btn-blue">Get In Touch<span class="btn-span bg-white color-blue"><i class="icon-arrow-right"></i></span></a>
                            <!-- buttons end -->
                        </div>
                        <div class="spacer-50"></div>
                        <div class="mx-auto">
                            <p class="tagline-style2 dtr-mb-0 color-dark">Price starts at</p>
                            <p class="text-size-xxl color-green text-shadow-green">600.00€</p>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                </div>
                <!--===== row 1 ends =====-->

            </div>
        </section>
        <!-- hero section ends
================================================== -->

        <!-- features section starts
================================================== -->
        <section id="features" class="dtr-section dtr-box-layout dtr-py-100 dtr-sm-py-20 xl:px-20 lg:px-20 px-6">

            <!-- heading starts -->
            <div class="dtr-section-heading-wrapper">
                <h3>We handle everything</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor<br>
                   incididunt soluta nobis assumenda labore quod maxime.</p>
            </div>
            <!-- heading ends -->

            <!--== row starts ==-->
            <div class="row mt-6">

                <!-- column 1 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top">
                    <div class="dtr-feature-img mb-4"><img src="assets/images/home.png" class="w-24" alt="image"></div>
                    <h4 class="my-2">Home Appraisal</h4>
                    <p>Professional relocation company based in Haarlem, The Netherlands. The owner of the company is an expat herself and moved here 10 years ago..</p>
                </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top">
                    <div class="dtr-feature-img mb-4"><img src="assets/images/money.png" class="w-24" alt="image"></div>
                    <h4 class="my-2">Price Negotiation</h4>
                    <p>We don't deal in problems, we deal in solutions. Moving is in the top ten list of stressful life events. We know things don't always go smoothly, therefore we work to quickly solve them..</p>
                </div>
                <!-- column 2 ends -->

                <!-- column 3 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top">
                    <div class="dtr-feature-img mb-4"><img src="assets/images/book-2.png" class="w-24" alt="image"></div>
                    <h4 class="my-2">Paperwork Handling</h4>
                    <p>OOne to one communication. Fast action and feedback. Competitive prices - no hidden costs.</p>
                </div>
                <!-- column 3 ends -->
                <!-- column 4 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top">
                    <div class="dtr-feature-img mb-4"><img src="assets/images/shop.png" class="w-24" alt="image"></div>
                    <h4 class="my-2">Home Appraisal</h4>
                    <p>Professional relocation company based in Haarlem, The Netherlands. The owner of the company is an expat herself and moved here 10 years ago..</p>
                </div>
                <!-- column 4 ends -->

            </div>
            <!--== row ends ==-->

        </section>
        <!-- features section ends
================================================== -->

        <!-- cta section starts
================================================== -->
        <section id="cta" class="dtr-section dtr-box-layout xl:px-20 lg:px-20 px-6">
            <!-- dtr-bg-shapes-type-2 : Class for shapes to background. Easy to change image color, refer local help doc -->
            <div class="dtr-box-wrapper-round dtr-bg-shapes-type-2 dtr-box-padding bg-white">

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-5 dtr-cta-box">
                        <!-- img -->
                        <span class="dtr-cta-img"> <i class="icon-home1"></i></span>
                        <!-- content -->
                        <div class="dtr-cta-content">
                            <div class="dtr-cta-content-left">
                                <h1>Want to find a room in the Amsterdam?</h1>
                                <p>Get in touch with our broker!</p>
                            </div>
                            <div class="dtr-cta-content-right"> <a href="#" class="dtr-btn btn-blue"><i class="icon-arrow-right"></i></a> </div>
                        </div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-5 dtr-cta-box offset-md-2 small-device-space">
                        <!-- img -->
                        <span class="dtr-cta-img"> <i class="icon-umbrella1"></i></span>
                        <!-- content -->
                        <div class="dtr-cta-content">
                            <div class="dtr-cta-content-left">
                                <h1>Want to find a room in the Haarlem?</h1>
                                <p>Call the broker for a quote!</p>
                            </div>
                            <div class="dtr-cta-content-right"> <a href="#" class="dtr-btn btn-blue"><i class="icon-arrow-right"></i></a> </div>
                        </div>
                    </div>
                    <!-- column 2 ends -->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- cta section ends
================================================== -->

        <!-- about section starts
================================================== -->
        <section id="about" class="dtr-section dtr-box-layout xl:px-20 lg:px-20 px-6">

            <!--===== row 1 starts =====-->
            <div class="row dtr-mr-0">

                <!-- column 1 starts -->
                <div class="col-12 col-md-6 dtr-py-100 dtr-sm-py-40 dtr-pr-100">

                    <!-- heading starts -->
                    <div class="dtr-section-heading-wrapper dtr-mb-20">
                        <h3>We Connect People With Their Dreams</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt soluta nobis assumenda labore quod maxime.</p>
                    </div>
                    <!-- heading ends -->

                    <!-- text -->
                    <p>There are many variations of passages of lorem ipsum available. Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. </p>

                    <!-- photo chain starts -->

                    <!-- photo chain ends -->

                    <!-- nested row starts -->
                    <div class="row dtr-mt-30">
                        <div class="col-12 col-md-6">
                            <p class="tagline-style1 color-green text-shadow-green">$1,40,221+</p>
                            <p>Average buyer savings</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="tagline-style1 color-green text-shadow-green">#1</p>
                            <p>Resource for housing info</p>
                        </div>
                    </div>
                    <!-- nested row ends -->

                </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-6 dtr-box-full-img rounded-lg px-12 dtr-rounded-left-bottom" style="background-image: url({{asset('assets/images/haarlem.webp')}});"> </div>
                <!-- column 2 ends -->

            </div>
            <!--===== row 1 ends =====-->

        </section>
        <!-- about section ends
================================================== -->

        <!-- properties section starts
================================================== -->
        <!-- dtr-bg-shapes-type-3 : Class for shapes to background. Easy to change image color, refer local help doc -->
        <section id="properties" class="dtr-section dtr-bg-shapes-type-3 dtr-py-100 mt-4">
            <div class="dtr-box-layout xl:px-20 lg:px-20 px-6">
                <!-- heading starts -->
                <div class="dtr-section-heading-wrapper">
                    <h2>Our Featured Porperties</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor<br>
                       incididunt soluta nobis assumenda labore quod maxime.</p>
                </div>
                <!-- heading ends -->

                <!--===== row 1 starts =====-->
                <div class="row d-flex align-items-center dtr-mt-70">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <div class="dtr-label-wrapper">
                            <!-- label -->
                            <span class="dtr-label dtr-label-green">For Rent</span>
                            <!-- image -->
                            <img src="assets/images/room.webp" alt="image" class="dtr-rounded-img"></div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <div class=" dtr-pl-40 dtr-sm-pl-0 small-device-space">
                            <p class="text-size-sm dtr-mb-10"><i class="icon-map-pin1 dtr-mr-10"></i>55 CZ Spaanwoude, Haarlem</p>
                            <h2 class="dtr-mb-10">Room mate</h2>
                            <p class="tagline-style1 color-green text-shadow-green">100€ per night</p>

                            <!-- box wrapper starts -->
                            <div class="dtr-mt-30 dtr-mb-30">

                                <!-- box 1 -->
                                <div class="dtr-box-sm dtr-mr-5 bg-medium-blue"> <i class="icon-bed"></i><br>
                                    11 <br>
                                    Bedrooms</div>

                                <!-- box 3 -->
                                <div class="dtr-box-sm bg-medium-blue"> <i class="icon-ruler-combined"></i><br>
                                    24 <br>
                                    Squate Feet</div>
                            </div>
                            <!-- box wrapper ends -->

                            <p class="dtr-mb-30">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. </p>

                            <!-- button -->
                            <a class="dtr-btn dtr-video-popup dtr-btn-right-icon dtr-mr-5 btn-dark-blue" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio">Take a Tour<span class="btn-span bg-white color-blue"><i class="icon-play1"></i></span></a>
                            <!-- button ends -->

                            <!--== share starts ==-->
                            <div class="dtr-share"> <div class="dtr-btn dtr-btn-only-icon btn-blue"><i class="icon-share-2"></i></div>
                                <ul class="dtr-share-dropdown dtr-social dtr-share-list">

                                    <!-- twitter -->
                                    <li><a href="" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" class="dtr-twitter text-dark" title="twitter"></a></li>

                                    <!-- facebook -->
                                    <li> <a href="" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" class="dtr-facebook text-dark" title="facebook"> </a> </li>

                                    <!-- linkedin -->
                                    <li> <a href=""  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" class="dtr-linkedin text-dark" title="instagram"> </a> </li>
                                </ul>
                            </div>
                            <!--== share ends ==-->

                        </div>
                    </div>
                    <!-- column 2 ends -->

                </div>
                <!--===== row 1 ends =====-->

                <!--===== row 2 starts =====-->
               {{--
                <div class="row d-flex align-items-center dtr-mt-100">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <div class=" dtr-pr-40 dtr-sm-pl-0 small-device-space">
                            <p class="text-size-sm dtr-mb-10"><i class="icon-map-pin1 dtr-mr-10"></i>995 Fifth Avenue, New York</p>
                            <h2 class="dtr-mb-10">Penthouse Duplex</h2>
                            <p class="tagline-style1 color-green text-shadow-green">$50,000,000</p>

                            <!-- box wrapper starts -->
                            <div class="dtr-mt-30 dtr-mb-30">

                                <!-- box 1 -->
                                <div class="dtr-box-sm dtr-mr-5 bg-medium-blue"> <i class="icon-bed"></i><br>
                                    6 <br>
                                    Bedrooms</div>

                                <!-- box 2 -->
                                <div class="dtr-box-sm dtr-mr-5 bg-medium-blue"> <i class="icon-bath"></i><br>
                                    7 <br>
                                    Bathrooms</div>

                                <!-- box 3 -->
                                <div class="dtr-box-sm bg-medium-blue"> <i class="icon-ruler-combined"></i><br>
                                    6891 <br>
                                    Squate Feet</div>
                            </div>
                            <!-- box wrapper ends -->

                            <p class="dtr-mb-30">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. </p>

                            <!-- button -->
                            <a class="dtr-btn dtr-video-popup dtr-btn-right-icon dtr-mr-5 btn-dark-blue" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio">Take a Tour<span class="btn-span bg-blue color-white"><i class="icon-play1"></i></span></a>
                            <!-- button ends -->

                            <!--== share starts ==-->
                            <div class="dtr-share"> <div class="dtr-btn dtr-btn-only-icon btn-blue"><i class="icon-share-2"></i></div>
                                <ul class="dtr-share-dropdown dtr-social dtr-share-list">

                                    <!-- twitter -->
                                    <li><a href="https://twitter.com/share?text=Title%20Goes%20Here&amp;url=http://yourlink.com" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" class="dtr-twitter" title="twitter"></a></li>

                                    <!-- facebook -->
                                    <li> <a href="https://www.facebook.com/sharer/sharer.php?u=http://yourlink.com" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" class="dtr-facebook" title="facebook"> </a> </li>

                                    <!-- linkedin -->
                                    <li> <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://yourlink.com&amp;title=Title%20Goes%20Here&amp;summary=Summary%20Goes%20Here&amp;source=#"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" class="dtr-linkedin" title="instagram"> </a> </li>
                                </ul>
                            </div>
                            <!--== share ends ==-->

                        </div>
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 small-device-space">
                        <div class="dtr-label-wrapper">
                            <!-- label -->
                            <span class="dtr-label dtr-label-green">For Sale</span>
                            <!-- image -->
                            <img src="assets/images/img-4.jpg" alt="image" class="dtr-rounded-img"></div>
                    </div>
                    <!-- column 2 ends -->

                </div>--}}
                <!--===== row 2 ends =====-->


            </div>
        </section>
        <!-- properties section ends
================================================== -->

        <!-- services section starts
================================================== -->
        <section id="services" class="dtr-section dtr-box-layout dtr-box-wrapper-round dtr-box-padding bg-white">

            <!--== row 1 starts ==-->
            <div class="row">

                <!-- column 1 starts -->
                <div class="col-12 col-md-6">

                    <!-- heading starts -->
                    <div class="dtr-section-heading-wrapper">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing<br>
                           elit sed do eiusmod tempor.</p>
                    </div>
                    <!-- heading ends -->

                </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                    <div class="dtr-feature-img bg-medium-blue color-dark-blue"><i class="icon-city"></i></div>
                    <h5>Leasing Advisory</h5>
                    <p>There are many variations of passages of lorem ipsum available. </p>
                </div>
                <!-- column 2 ends -->

                <!-- column 3 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                    <div class="dtr-feature-img bg-medium-red color-dark-brown"><i class="icon-user-tag"></i></div>
                    <h5>Strategy & Consulting</h5>
                    <p>There are many variations of passages of lorem ipsum available.</p>
                </div>
                <!-- column 3 ends -->

            </div>
            <!--== row 1 ends ==-->

            <!--== row 2 starts ==-->
            <div class="row">

                <!-- column 1 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                    <div class="dtr-feature-img bg-medium-green color-dark-green"><i class="icon-door-open"></i></div>
                    <h5>Space Enablement</h5>
                    <p>There are many variations of passages of lorem ipsum available.</p>
                </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                    <div class="dtr-feature-img bg-medium-purple color-dark-purple"><i class="icon-walking"></i></div>
                    <h5>Portfolio Services</h5>
                    <p>There are many variations of passages of lorem ipsum available.</p>
                </div>
                <!-- column 2 ends -->

                <!-- column 3 starts -->
                <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                    <div class="dtr-feature-img bg-light-red color-dark-brown"><i class="icon-wind"></i></div>
                    <h5>Facilities Management</h5>
                    <p>There are many variations of passages of lorem ipsum available.</p>
                </div>
                <!-- column 3 ends -->

            </div>
            <!--== row 2 ends ==-->

        </section>
        <!-- services section ends
================================================== -->

        <!-- testimonial section starts
================================================== -->
        <section id="reviews" class="dtr-section dtr-box-layout">

            <!--===== row 1 starts =====-->
            <div class="row dtr-mr-0 xl:px-20 lg:px-20 px-6">

                <!-- column 1 starts -->
                <div class="col-12 col-md-5 dtr-py-100">
                    <h2 class="dtr-section-heading">What clients say</h2>

                    <!--===== testimonial slider starts =====-->
                    <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots">

                        <!--== slide 1 starts ==-->
                        <div class="dtr-testimonial">
                            <h4 class="dtr-testimonial-tagline">Pristine & Gorgeous</h4>
                            <div class="dtr-testimonial-content clearfix"> There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. </div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="{{asset('assets/images/p1.jpg')}}" class="object-cover object-center" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h6 class="dtr-client-name">Eleanor Jensen</h6>
                                    <span class="dtr-client-job">Villa Owner, LA</span> </div>
                            </div>
                            <!-- client info ends -->
                        </div>
                        <!--== slide 1 ends ==-->

                        <!--== slide 2 starts ==-->
                        <div class="dtr-testimonial">
                            <h4 class="dtr-testimonial-tagline">Reliable People</h4>
                            <div class="dtr-testimonial-content clearfix"> Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt aute irure dolor in reprehenderit in voluptate velit esse cillum dolore beatae vitae dicta sunt explicabo magna aliqua. </div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="assets/images/user-2.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h6 class="dtr-client-name">Jerry Johnston</h6>
                                    <span class="dtr-client-job">Acme Boutique, UK</span> </div>
                            </div>
                            <!-- client info ends -->
                        </div>
                        <!--== slide 2 ends ==-->

                        <!--== slide 3 starts ==-->
                        <div class="dtr-testimonial">
                            <h4 class="dtr-testimonial-tagline">Smooth Process</h4>
                            <div class="dtr-testimonial-content clearfix"> Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro quisquam qui dolorem ipsum quia dolor sit consectetur. </div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="assets/images/user-3.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h6 class="dtr-client-name">Kamila Anderson</h6>
                                    <span class="dtr-client-job">House Buyer, Colorado</span> </div>
                            </div>
                            <!-- client info ends -->
                        </div>
                        <!--== slide 3 ends ==-->

                    </div>
                    <!--===== testimonial slider ends =====-->

                </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-6 offset-md-1 dtr-box-full-img dtr-mt-minus50 dtr-rounded-left-bottom shadow-lg" style="background-image: url({{asset("assets/images/Amsterdam.jpg")}});"> </div>
                <!-- column 2 ends -->

            </div>
            <!--===== row 1 ends =====-->

        </section>
        <!-- testimonial section ends
================================================== -->



        <!-- contact section starts
================================================== -->
        <!-- dtr-bg-shapes-type-4/5 : Classes for shapes to background. Easy to change image color, refer local help doc -->
        <section id="contact" class="dtr-section dtr-box-layout dtr-box-wrapper-round dtr-bg-shapes-type-5 dtr-box-padding bg-white mt-8">

            <!--== row starts ==-->
            <div class="row dtr-bg-shapes-type-4">

                <!-- column starts -->
                <div class="col-12 col-md-8 offset-md-2 text-center">

                    <!-- heading starts -->
                    <div class="dtr-section-heading-wrapper">
                        <h2>Get In Touch With Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod <br>
                           tempor incididunt ut labore et dolore.</p>
                    </div>
                    <!-- heading ends -->

                    <!--== form starts ==-->
                    <div class="dtr-form dtr-form-styled">
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
                    <!--== form ends ==-->

                    <div class="spacer-100"></div>
                    <p>007, Bond Street, Mighty Meadows, Haarlem<br>
                       0 000 000 00 00</p>
                    <p class="tagline-style1 color-green text-shadow-green">bettername@findmehouse.com</p>
                </div>
                <!-- column ends -->

            </div>
            <!--== row ends ==-->

        </section>
        <!-- contact section ends
================================================== -->

    </div>
</x-guest-layout>
