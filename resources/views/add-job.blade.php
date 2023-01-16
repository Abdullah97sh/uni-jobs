@extends('master')

@section('add-job')
    <!-- add-job -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Post A Job</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Job</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Post a Job</strong></span>
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
                        <div>
                            <h2>Post A Job</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" method="post" action="/add-job">
                        @csrf
                        <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

                        <div class="form-group">
                            <label for="company-name">Company Name</label>
                            <input name="company_name" type="text" class="form-control" id="company-name"
                                placeholder="e.g. New York" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="company_email" type="email" class="form-control" id="email"
                                placeholder="you@yourdomain.com" required>
                        </div>
                        <div class="form-group">
                            <label for="job-title">Job Title</label>
                            <input name="job_title" type="text" class="form-control" id="job-title"
                                placeholder="Product Designer" required>
                        </div>


                        <div class="form-group">
                            <label for="job-region">Job Region</label>
                            <select name="company_city" class="selectpicker border rounded" id="job-region"
                                data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region"
                                required>
                                <option value="Amman">Amman</option>
                                <option value="Irbid">Irbid</option>
                                <option value="Zarqa">Zarqa</option>
                                <option value="Balqaa">Balqaa</option>
                                <option value="Madaba">Madaba</option>
                                <option value="Aqaba">Aqaba</option>
                                <option value="Jarash">Jarash</option>
                                <option value="Ajlon">Ajlon</option>
                                <option value="Karak">Karak</option>
                                <option value="Tafila">Tafila</option>
                                <option value="Maan">Maan</option>
                                <option value="Mafraq">Mafraq</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="job-region">Job Hours/Week</label>
                            <select name="job_hours" class="selectpicker border rounded" id="job-region"
                                data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region"
                                required>
                                <option value="12">12</option>
                                <option value="18">18</option>
                                <option value="24">24</option>
                                <option value="30">30</option>
                                <option value="36">36</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="job-type">Job Category</label>
                            <select name="job_category" class="selectpicker border rounded" id="job-type"
                                data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type"
                                required>
                                <option value="Part">Part Time</option>
                                <option value="Full">Full Time</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="job-description">Job Description</label>
                            <div class="editor" id="editor-1">
                                <p>Write Job Description!</p>
                            </div>
                        </div>
                        {{-- <input name="hidden" id="hidden" type="text"> --}}
                        <textarea name="job_desc" id="textdesc" cols="30" rows="10"></textarea>

                        <div class="form-group">
                            <label for="company-website-tw d-block">Upload Logo</label> <br>
                            <label class="btn btn-primary btn-md btn-file">
                                Browse File<input name="company_logo" type="file" hidden>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 offset-lg-9 offset-md-8">
                                <button type="submit" class="btn btn-block btn-primary btn-md">Post the Job</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </section>
@endsection
