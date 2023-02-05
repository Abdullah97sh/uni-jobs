@extends('master')

@section('contact')
    <!-- Contact -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Contact Us</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Contact Us</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif

                    <form action="/contact-form" method="POST" id="contactForm" name="contactForm" class="contactForm">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="first_name">First Name</label>
                                <input type="text" id="first_name" class="form-control" name="first_name"
                                    placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="last_name">Last Name</label>
                                <input type="text" id="last_name" class="form-control" name="last_name"
                                    placeholder="Last Name">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="example@gmail.com">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control" name="subject" placeholder="text">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" name="message"
                                    placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">Al Hijaz Towers, Mecca St., Amman, Jordan </p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+962 7 7844 7305</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">unijobs@gmail.com</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Happy Candidates Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="block__87154 bg-white rounded">
                        <blockquote>
                            <p>&ldquo;I had been looking for a part-time job for months, but nothing seemed to fit my needs.
                                Thanks to UNIJOBS, I was finally able to find a job that not only pays well but also
                                allows me to pursue my passions.&rdquo;</p>
                        </blockquote>
                        <div class="block__91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                            <div>
                                <h3>Sara Ahmad</h3>
                                <span class="position">Languages Student</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="block__87154 bg-white rounded">
                        <blockquote>
                            <p>&ldquo;I was able to find a part-time job that fits perfectly with my class schedule, and I
                                couldn't be happier! The application process was simple and straightforward, and I was able
                                to get hired quickly.&rdquo;</p>
                        </blockquote>
                        <div class="block__91147 d-flex align-items-center">
                            <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div>
                                <h3>Khaled Anas</h3>
                                <span class="position">Business student</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
