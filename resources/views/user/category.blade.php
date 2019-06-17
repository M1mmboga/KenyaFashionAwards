@extends("layouts.user.app")

@section("main")
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Awards Category</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Awards Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="mona-about-us-area mb-30 section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- About Us Thumbnail -->
                <div class="col-12 col-sm-12 col-lg-4">
                    <div class="about-us-thumbnail mb-50">
                        <span class="line"></span>
                        <img src="{{ asset('/img/bg-img/kenya1.jpg')}}" alt="">
                        <span class="line2"></span>
                    </div>
                </div>

                <!-- About Us Thumbnail -->
            {{-- <div class="col-12 col-lg-4">
              <div class="about-us-thumbnail mb-50">
                <span class="line"></span>
                <img src="./img/bg-img/17.jpg" alt="">
                <span class="line2"></span>
              </div>
            </div> --}}

            <!-- About Us Content -->
                <div class="col-12 col-lg-8">
                    <div class="about-us-content mb-50">
                        <h2>Fashion Exhibition</h2>
                        <p>Kenya Fashion Awards Fashion Exhibition (Fashion Photography / Fashion designs) will take place
                            in August (or end of July). Ehxibition will run for two weeks. </p>
                        <h1>Application Criteria</h1>
                        <p>Your collection should consist of women’s / men"s ready-to-wear / Couture / Jewelry. it should be latest/new collection. You should have been
                            in business for at least 3 years. If you have been in business for less than 3 years, you should look at applying for NEWGEN (up-coming).</p>
                        <p>Every designer will be provided with 1 complimentary ticket.</p>
                        <p>Send your application with 5 photos of your designers, working contacts and short biography to designers@kenyafashionawards.co.ke</p>
                        <p><strong>DESIGNER OPTIONS / FEES</strong><br />

                            International Designer full collection of 15 looks $ 500<br />

                            Intarnational Designer full collection of 10 looks $ 400</p>
                    </div>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="container">

                <div class="service-area mt-80">
                    <h1>Fashion Awards Categories And Requirements</h1><br />
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="single-service-area mb-50">
                                <h5>1. Fashion Designer Men’s/Women’s</h5>
                                <p>Individual who specializes in creating ready to wear/tailor/custom/urban garments for men and/or women.
                                    Ready-to-wear clothing is defined as clothing marketed in a finished condition,
                                    made in standard sizes/ Individual who makes custom-designed garments made to the client’s measure</p><br />

                                <h5>2. Fashion Photographer</h5>
                                <p>Must specialize in the genre of fashion, commercial or related photography.</p><br />

                                <h5>3. Clothing Stylist</h5>
                                <p>Individual who coordinates the styling of women’s and/or men’s clothing and accessories used in
                                    photography and/or runway presentations.  This category does not include clothing design and/or sewing.</p><br />

                                <h5>4. Boutique </h5>
                                <p>A small retail store that specializes in the sale of women’s and/or men’s fashion, shoes and/or accessories.
                                    Boutiques in this category must have a physical store location.</p><br/>

                                <h5>5. Accessorizes/Jewelry Designer</h5>
                                <p>Individual, boutique or group who designs and creates accessories for men or women,
                                    for use in photography, runway presentations and/or for sale to the general public.</p><br />

                            </div>
                        </div>


                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="single-service-area mb-50">

                                <h5>6. Media Member (Fashion Journalist/Blogger)</h5>
                                <p>Blogger- An individual who writes fashion-related articles, describing garments, fashion trends, coverage of fashion events, etc.
                                    for their personal blog website, this person maintains their own fan base, and is not affiliated with
                                    a fashion organization or publication.</p><br />

                                <h5>7. Male Model</h5>
                                <p>Individual male with advanced runway and/or print experience and presence, possess the skills and the
                                    look to make it to the top markets and major runway shows/ print ads.</p><br />

                                <h5>8. Female Runway Model</h5>
                                <p>Individual female with advanced runway experience and presence, possess the skills and the look to make it to the top markets and
                                    major runway shows. Must be between 5’7 and 6’0.</p><br />

                                <h5>9. High Fashion Hair Stylist</h5>
                                <p>Individual who specializes in “high fashion” style hair, likely used for the following examples:   runway/ fashion show hair, high fashion or Avant-garde photo shoots/ ad campaigns
                                    any other uses for high fashion hair styling</p><br/>

                                <h5>10. Wezesha Fashion Awards (Wezesha is a Swahili word meaning enable)</h5>
                                <p>This Awards will be presented to the company which has showned a great support to the Fashion Industry in Kenya.</p><br/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Core Value Area Start ***** -->
    {{-- <section class="mona-core-value-area bg-gray section-padding-80-0">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Our Core Value</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="mona-benefits-area mb-80">

              <!-- Single Benefits Area -->
              <div class="single-benefits-area d-flex mb-30">
                <!-- Icon -->
                <div class="benefits-icon">
                  <i class="icon_box-checked"></i>
                </div>
                <!-- Content -->
                <div class="benefits-content">
                  <h5>Expert Advice</h5>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                </div>
              </div>

              <!-- Single Benefits Area -->
              <div class="single-benefits-area d-flex mb-30">
                <!-- Icon -->
                <div class="benefits-icon">
                  <i class="icon_like_alt"></i>
                </div>
                <!-- Content -->
                <div class="benefits-content">
                  <h5>Clients Satisfaction</h5>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                </div>
              </div>

              <!-- Single Benefits Area -->
              <div class="single-benefits-area d-flex mb-30">
                <!-- Icon -->
                <div class="benefits-icon">
                  <i class="icon_calendar"></i>
                </div>
                <!-- Content -->
                <div class="benefits-content">
                  <h5>Planning & Strategy</h5>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="mona-video-area mb-80">
              <img src="./img/bg-img/21.jpg" alt="">
              <!-- Play Button -->
              <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="btn video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- ***** Core Value Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area section-padding-0-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Nazrul Islam</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Williams Rodney</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="{{asset('/img/bg-img/6.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('/img/bg-img/7.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('/img/bg-img/8.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('/img/bg-img/6.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('/img/bg-img/7.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="mona-cta-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <h2>Do You Want To Be A Model?</h2>
                        <h6>Apply Now!</h6>
                        <a href="/contacts" class="btn mona-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->
@endsection