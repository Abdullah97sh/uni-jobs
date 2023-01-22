@extends('master')

@section('job-details')
    <!-- job-details -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Profile</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Job</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Profile</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        {{-- <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="images/job_logo_5.jpg" alt="Image">
                        </div> --}}
                        <div>
                            <h2>Profile</h2>
                            <div>
                                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>Puma</span>
                                <span class="m-2"><span class="icon-room mr-2"></span>New York City</span>
                                <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Full
                                        Time</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Save Job Button --}}
                {{-- <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-light btn-md"><span
                                    class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                {{-- big images --}}
                {{-- <div class="col-lg-8">
                    <div class="mb-5">
                        <figure class="mb-5"><img src="images/job_single_img_1.jpg" alt="Image"
                                class="img-fluid rounded"></figure>
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-align-left mr-3"></span>Job Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti
                            asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis
                            iste eius officia minus.</p>
                        <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis
                            nihil quia officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt
                            impedit quidem, vitae mollitia!</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-rocket mr-3"></span>Responsibilities</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam
                                    facilis</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas
                                    reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est
                                    itaque</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis
                                    nihil quia officiis dolor</span></li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-book mr-3"></span>Education + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam
                                    facilis</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas
                                    reiciendis non sapiente labore</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est
                                    itaque</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis
                                    nihil quia officiis dolor</span></li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-turned_in mr-3"></span>Other Benifits</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam
                                    facilis</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Velit unde aliquam et voluptas
                                    reiciendis non sapiente labore</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est
                                    itaque</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit</span></li>
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis
                                    nihil quia officiis dolor</span></li>
                        </ul>
                    </div>

                    <div class="row mb-5">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-light btn-md"><span
                                    class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                        </div>
                    </div>

                </div> --}}
                {{-- Personal --}}
                <div class="col-lg-12 ">
                    <div class="d-flex justify-content-btween align-items-center  bg-light p-3 border rounded mb-4">
                        <div class="w-50">
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Personal</h3>
                            <ul class="list-unstyled pl-3 mb-0">
                                <li class="mb-2"><strong class="text-black">Name: </strong> {{auth()->user()->name}}</li>
                                <li class="mb-2"><strong class="text-black">Mobile Number: </strong> {{auth()->user()->phone}}</li>
                                <li class="mb-2"><strong class="text-black">Age: </strong> {{auth()->user()->age}}</li>
                                <li class="mb-2"><strong class="text-black">Gender: </strong> {{auth()->user()->gender}}</li>
                                <li class="mb-2"><strong class="text-black">City: </strong> {{auth()->user()->city}}</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center rounded h-75 w-50">
                            <img src="https://cdn2.vectorstock.com/i/1000x1000/54/36/businessman-profile-colorful-avatar-isolated-flat-vector-9685436.jpg" style="max-width: 12rem" alt="profileImage">
                        </div>
                    </div>

                </div>
                {{-- <div class="col-lg-4">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                        <img src="images/job_logo_5.jpg" alt="Image">
                    </div>
                </div> --}}
            </div>

            <div class="row">
                {{-- Professional --}}
                <div class="col-lg-6">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Professional</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            @if (count(auth()->user()->experiences)>0)
                                <li class="mb-2"><strong class="text-black">Experience: </strong> {{auth()->user()->experiences[0]->experience}}</li>
                                <li class="mb-2"><strong class="text-black">Recent Job Title: </strong> {{auth()->user()->experiences[0]->recent_job}}</li>
                            @else
                                <li class="mb-2"><strong class="text-black">You Dont Add Experience</strong></li>
                            @endif
                                <li class="mb-2"><strong class="text-black">Skills: </strong> 
                                    @if (count(auth()->user()->skills)>0)
                                        @foreach (auth()->user()->skills as $skill)
                                            {{$skill->skill}} ,
                                        @endforeach
                                    @else
                                        You Dont Add any skill
                                    @endif
                                </li>
                            
                        </ul>
                    </div>
                </div>

                {{-- Educational --}}
                <div class="col-lg-6">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary mt-3 h5 pl-3 mb-3 ">Educational</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            @if (count(auth()->user()->educations)>0)
                                <li class="mb-2"><strong class="text-black">Level of Education: </strong>{{auth()->user()->educations[0]->degree}}</li>
                                <li class="mb-2"><strong class="text-black">Univercity/School Name: </strong> Univercity of
                                    Jordan</li>
                                <li class="mb-2"><strong class="text-black">Major: </strong>Managemant Information System</li>
                                <li class="mb-2"><strong class="text-black">GPA: </strong>Very Good</li>
                            @else
                                <li class="mb-2"><strong class="text-black">You Dont Add Education</strong></li>
                            @endif
                            

                        </ul>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                {{-- Job Opportunities Saved --}}
                <div class="col-lg-6">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Opportunities Saved</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            @if (count(auth()->user()->savedJobs)>0)
                                @foreach (auth()->user()->savedJobs as $savedJob)
                                    <a href="/jobs/{{$savedJob->job->id}}"><li class="mb-2">{{$savedJob->job->job_title}}</li></a>
                                @endforeach
                            @else
                                <li class="mb-2"><strong class="text-black">You Dont Save any job</strong> </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>

                {{-- Jobs applied before --}}
                <div class="col-lg-6">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Jobs applied before</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            @if (count(auth()->user()->appliedJobs)>0)
                                @foreach (auth()->user()->appliedJobs as $applyJob)
                                    <a href="/jobs/{{$applyJob->job->id}}"><li class="mb-2">{{$applyJob->job->job_title}}</li></a>
                                @endforeach
                            @else
                                <li class="mb-2"><strong class="text-black">You Dont Apply any job</strong> </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row">
                {{-- Recommended Jobs --}}
                {{-- <div class="col-lg-6">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Recommended Jobs</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <li class="mb-2"><strong class="text-black">Link</strong> .</li>
                            <li class="mb-2"><strong class="text-black">Link</strong> .</li>
                            <li class="mb-2"><strong class="text-black">Link</strong> .</li>
                            <li class="mb-2"><strong class="text-black">Link</strong> .</li>
                        </ul>
                    </div>
                </div> --}}
            </div>


        </div>
    </section>

    {{-- Related Jobs --}}
    {{-- <section class="site-section" id="next">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">22,392 Related Jobs</h2>
                </div>
            </div>

            <ul class="job-listings mb-5">
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_1.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Profile</h2>
                            <strong>Adidas</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> New York, New York
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger">Part Time</span>
                        </div>
                    </div>

                </li>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_2.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Digital Marketing Director</h2>
                            <strong>Sprint</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Overland Park, Kansas
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
                        </div>
                    </div>
                </li>

                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_3.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Back-end Engineer (Python)</h2>
                            <strong>Amazon</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Overland Park, Kansas
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
                        </div>
                    </div>
                </li>

                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_4.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Senior Art Director</h2>
                            <strong>Microsoft</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Anywhere
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
                        </div>
                    </div>
                </li>

                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_5.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Profile</h2>
                            <strong>Puma</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> San Mateo, CA
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
                        </div>
                    </div>
                </li>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_1.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Profile</h2>
                            <strong>Adidas</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> New York, New York
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger">Part Time</span>
                        </div>
                    </div>

                </li>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
                    <div class="job-listing-logo">
                        <img src="images/job_logo_2.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Digital Marketing Director</h2>
                            <strong>Sprint</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Overland Park, Kansas
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
                        </div>
                    </div>
                </li>




            </ul>

            <div class="row pagination-wrap">
                <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                    <span>Showing 1-7 Of 22,392 Jobs</span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="custom-pagination ml-auto">
                        <a href="#" class="prev">Prev</a>
                        <div class="d-inline-block">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                        </div>
                        <a href="#" class="next">Next</a>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}


    {{-- <section class="bg-light pt-5 testimony-full">

        <div class="owl-carousel single-carousel">


            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center text-center text-lg-left">
                        <blockquote>
                            <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero
                                dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum
                                repudiandae.&rdquo;</p>
                            <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-right">
                        <img src="images/person_transparent_2.png" alt="Image" class="img-fluid mb-0">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center text-center text-lg-left">
                        <blockquote>
                            <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero
                                dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum
                                repudiandae.&rdquo;</p>
                            <p><cite> &mdash; Chris Peters, @Google</cite></p>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-right">
                        <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    {{-- <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-white">Get The Mobile Apps</h2>
                    <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora
                        adipisci impedit.</p>
                    <p class="mb-0">
                        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span
                                class="icon-apple mr-3"></span>App Store</a>
                        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span
                                class="icon-android mr-3"></span>Play Store</a>
                    </p>
                </div>
                <div class="col-md-6 ml-auto align-self-end">
                    <img src="images/apps.png" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section> --}}
@endsection
