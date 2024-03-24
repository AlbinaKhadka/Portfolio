@extends('layouts.app')
@section('title')
@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            @foreach ($sections as $section)
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="container-fluid px-md-0">
                        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                            data-scrollax-parent="true">
                            <div class="one-third order-md-last img"
                                style="background-image:url('{{ Voyager::image($section->image) }}');">
                                <div class="overlay"></div>
                                <div class="overlay-1"></div>
                            </div>
                            <div class="one-forth d-flex  align-items-center ftco-animate"
                                data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">{{ $section->title }}</span>
                                    <h1 class="mb-4 mt-3">{{ $section->description }}</h1>
                                    <p><a href="#" class="btn btn-primary">Hire me</a> <a href="#"
                                            class="btn btn-primary btn-outline-primary">Download CV</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img"
                            style="background-image:url('{{ Voyager::image($section->image) }}');">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">{{ $section->title }}</span>
                                <h1 class="mb-4 mt-3">{{ $section->description }}</h1>
                                <p><a href="#" class="btn btn-primary">Hire me</a> <a href="#"
                                        class="btn btn-primary btn-outline-primary">Download CV</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="text">
                        <strong class="number" data-number="{{ setting('projectcomplete.Projectcomplete') }}">0</strong>
                        <span>Project Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-calendar"></span>
                </div>
                <div class="text">
                    <strong class="number" data-number="{{ setting('projectcomplete.Experienced') }}">
                        {{ setting('projectcomplete.Experienced') === 'Experienced' ? 'Experienced' : 'Beginners' }}</strong>
                    <span>Experience</span>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url('{{ Voyager::image($page->image) }}')">


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">My Intro</span>
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">{{ $page->title }}
                                </h2>
                                <p>{{ $page->body }}</p>

                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>{{ $page->name }}</span></li>
                                    <li class="d-flex"><span>Date of birth:</span> <span>{{ $page->dateofbirth }}</span>
                                    </li>
                                    <li class="d-flex"><span>Address:</span> <span>{{ $page->address }}</span></li>
                                    <li class="d-flex"><span>Email:</span> <span>{{ $page->email }}</span></li>
                                    <li class="d-flex"><span>Phone: </span> <span>{{ $page->phone }}</span></li>
                                </ul>
                                <div class="col-md-12">
                                    <div class="my-interest d-lg-flex w-100">
                                        <div class="interest-wrap d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="flaticon-listening"></span>
                                            </div>
                                            <div class="text">Music</div>
                                        </div>
                                        <div class="interest-wrap d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="flaticon-suitcases"></span>
                                            </div>
                                            <div class="text">Travel</div>
                                        </div>
                                        <div class="interest-wrap d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="flaticon-video-player"></span>
                                            </div>
                                            <div class="text">Movie</div>
                                        </div>
                                        <div class="interest-wrap d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="flaticon-football"></span>
                                            </div>
                                            <div class="text">Sports</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="ftco-section bg-light" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Skills</span>
                    <h2>My Skills</h2>

                </div>
            </div>
            <div class="row progress-circle mb-5">
                @if ($skills->isEmpty())
                    <div class="col-md-12">
                        <p>No skills found!</p>
                    </div>
                @else
                    @foreach ($skills as $skill)
                        <div class="col-lg-4 mb-4">
                            <div class="bg-white rounded-lg shadow p-4">
                                <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill->title }}</h2>
                                <div class="progress mx-auto" data-value="{{ $skill->learncapacity }}">
                                    <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <div
                                        class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold">{{ $skill->learncapacity }}<sup
                                                class="small">%</sup></div>
                                    </div>
                                </div>
                                <div class="row text-center mt-4">
                                    <div class="col-6 border-right">
                                        <div class="h4 font-weight-bold mb-0">{{ $skill->lastweek }}%</div>
                                        <span class="small text-gray">Last week</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="h4 font-weight-bold mb-0">{{ $skill->lastmonth }}%</div>
                                        <span class="small text-gray">Last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Accomplishments</span>
                    <h2 class="mb-4">Projects</h2>
                </div>
            </div>
            <div class="row">
                @if (!empty($projects))
                    @foreach ($projects as $project)
                        <div class="col-md-3">
                            <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url('{{ Voyager::image($project->image) }}');"
                                aria-label="{{ $project->name }}">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a href="{{ route('showProjectDetails', $project->id) }}">{{ $project->title }}</a></h3>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact me</span>
                </div>
                <div class="row block-9">
                    <div class="col-md-8">
                        <form id="contact-form" method="POST"action="{{ route('contact.submit') }}"
                            class="bg-light p-4 p-md-5 contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 d-flex pl-md-5">
                        <div class="row">
                            <div class="dbox w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span>{{ setting('personal.Address') }}</p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a
                                            href="tel://{{ setting('personal.Phone') }}">{{ setting('personal.Phone') }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a
                                            href="mailto:{{ setting('personal.Email') }}">{{ setting('personal.Email') }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a
                                            href="{{ setting('personal.Website') }}">{{ setting('personal.Website') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // console.log("Script is connected and running.");
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                // console.log(formData);
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        toastr.success('Message sent successfully.');
                        $('#contact-form')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            Object.keys(errors).forEach(function(key) {
                                errorMessage += errors[key] + '\n';
                            });
                            alert(errorMessage);
                        } else {
                            toastr.error('Something went wrong. Please try again.');
                        }
                        console.error(xhr.responseText);
                    }

                });
            });
        });
    </script>
@endsection
