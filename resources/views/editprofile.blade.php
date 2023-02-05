@extends('master')

@section('editprofile')
    <!-- editprofile -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Edit Profile</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Profile</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Edit Profile</strong></span>
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

                {{-- Personal --}}
                <div class="col-lg-12 ">
                    <div class="d-flex justify-content-btween align-items-center  bg-light p-3 border rounded mb-4">
                        <div class="w-50">
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Personal</h3>

                            <div class="row form-group pl-3">
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

                                <div class="col-md-6">
                                    <label class="text-black" for="mobile">Mobile Number</label>
                                    <input type="text" id="mobile" class="form-control" name="mobile"
                                        placeholder="079">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="age">Age</label>
                                    <input type="text" id="age" class="form-control" name="age"
                                        placeholder="23">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="city">City</label>
                                    <input type="text" id="city" class="form-control" name="city"
                                        placeholder="Amman">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="gender">Gender</label>
                                    <input type="text" id="gender" class="form-control" name="gender"
                                        placeholder="Male">
                                </div>
                            </div>

                            {{-- <ul class="list-unstyled pl-3 mb-0">
                                <li class="mb-2"><strong class="text-black">Name: </strong> {{auth()->user()->name}}</li>
                                <li class="mb-2"><strong class="text-black">Mobile Number: </strong> {{auth()->user()->phone}}</li>
                                <li class="mb-2"><strong class="text-black">Age: </strong> {{auth()->user()->age}}</li>
                                <li class="mb-2"><strong class="text-black">Gender: </strong> {{auth()->user()->gender}}</li>
                                <li class="mb-2"><strong class="text-black">City: </strong> {{auth()->user()->city}}</li>
                            </ul> --}}
                        </div>
                        <div class="d-flex justify-content-center rounded h-75 w-50">
                            <img src="https://cdn2.vectorstock.com/i/1000x1000/54/36/businessman-profile-colorful-avatar-isolated-flat-vector-9685436.jpg"
                                style="max-width: 12rem" alt="profileImage">
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
                            @if (count(auth()->user()->experiences) > 0)
                                <li class="mb-2"><strong class="text-black">Experience: </strong>
                                    {{ auth()->user()->experiences[0]->experience }}</li>
                                <li class="mb-2"><strong class="text-black">Recent Job Title: </strong>
                                    {{ auth()->user()->experiences[0]->recent_job }}</li>
                            @else
                                <li class="mb-2"><strong class="text-black">You Dont Add Experience</strong></li>
                            @endif
                            <li class="mb-2"><strong class="text-black">Skills: </strong>
                                @if (count(auth()->user()->skills) > 0)
                                    @foreach (auth()->user()->skills as $skill)
                                        {{ $skill->skill }} ,
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
                            @if (count(auth()->user()->educations) > 0)
                                <li class="mb-2"><strong class="text-black">Level of Education:
                                    </strong>{{ auth()->user()->educations[0]->degree }}</li>
                                <li class="mb-2"><strong class="text-black">Univercity/School Name: </strong> Univercity
                                    of
                                    Jordan</li>
                                <li class="mb-2"><strong class="text-black">Major: </strong>Managemant Information
                                    System</li>
                                <li class="mb-2"><strong class="text-black">GPA: </strong>Very Good</li>
                            @else
                                <li class="mb-2"><strong class="text-black">You Dont Add Education</strong></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
    </section>


    <section class="bg-light pt-5 testimony-full">

        <div class="owl-carousel single-carousel">


            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center text-center text-lg-left">
                        <blockquote>
                            <p>&ldquo;I never thought finding a part-time job could be so easy! UNIJOBS made the
                                process simple and stress-free, and I was able to start my new job in no time.&rdquo;</p>
                            <p><cite> &mdash; Eyad Fakhri</cite></p>
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
                            <p>&ldquo;At UNIJOBS, we not only match university students with suitable part-time jobs but
                                also foster strong relationships between employers and candidates. Our platform provides a
                                secure and efficient way to connect and leads to successful job experiences for all.&rdquo;</p>
                            <p><cite> &mdash; Omar Assad</cite></p>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-right">
                        <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-white">Get The Mobile Apps</h2>
                    <p class="mb-5 lead text-white">Get on-the-go access to your favorite part-time jobs with our
                        convenient mobile app!</p>
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
    </section>
@endsection
