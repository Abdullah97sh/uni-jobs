@extends('master')

@section('about')
    <!-- about -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">About Us</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>About Us</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section"
        style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">Discover Your Next Opportunity with UNIJOBS</h2>
                    <p class="lead text-white">Connecting University Students with Part-Time Jobs.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="1930">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="54">0</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="120">0</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="550">0</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>


            </div>
        </div>
    </section>


    <section class="site-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                        <span class="play-icon"><span class="icon-play"></span></span>
                        <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
                    </a>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-title mb-3">Our Mission</h2>
                    <p class="lead">Our mission is to provide a platform where university students can easily find
                        part-time jobs that fit their schedules and interests. We understand the challenges faced by
                        students in balancing their education and financial needs, and our goal is to make it easier for
                        them to find meaningful and flexible employment opportunities.</p>
                    <p>We believe that every student should have the chance to gain work experience, earn extra income, and
                        pursue their passions, and we are committed to helping them do just that.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
                    <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                        <span class="play-icon"><span class="icon-play"></span></span>
                        <img src="images/sq_img_8.jpg" alt="Image" class="img-fluid img-shadow">
                    </a>
                </div>
                <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
                    <h2 class="section-title mb-3">Our Team</h2>
                    <p class="lead">Our team is made up of experienced professionals who understand the needs of both
                        students and employers. We have a passion for technology and innovation, and we use our skills to
                        create a seamless and user-friendly platform for job seekers and employers alike.</p>
                    <p>From our developers to our customer support team, everyone at UNIJOBS is dedicated to
                        providing the best possible experience for our users. Whether you're a student looking for your next
                        gig or an employer looking for top talent, you can trust us to be your partner in success.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Our Team</h2>
                </div>
            </div>

            <div class="row align-items-center block__69944">

                <div class="col-md-6">
                    <img src="images/person_6.jpg" alt="Image" class="img-fluid mb-4 rounded">
                </div>

                <div class="col-md-6">
                    <h3>Elisabeth Smith</h3>
                    <p class="text-muted">Creative Director</p>
                    <p>Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores
                        repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae
                        voluptatibus ut? Ex vel ad explicabo iure ipsa possimus consectetur neque rem molestiae eligendi
                        velit?.</p>
                    <div class="social mt-4">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>

                <div class="col-md-6 order-md-2 ml-md-auto">
                    <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-4 rounded">
                </div>

                <div class="col-md-6">
                    <h3>Chintan Patel</h3>
                    <p class="text-muted">Creative Director</p>
                    <p>Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores
                        repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae
                        voluptatibus ut? Ex vel ad explicabo iure ipsa possimus consectetur neque rem molestiae eligendi
                        velit?.</p>
                    <div class="social mt-4">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
    </section> --}}
@endsection
