@extends('layouts.app')
@section('title', 'single')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_4.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">

                    <p class="breadcrumbs"><span class="mr-2"><a href="#home-section">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                                href="#project-section">Project <i class="fa fa-chevron-right"></i></a></span> <span>Project
                            Single <i class="fa fa-chevron-right"></i></span></p>

                    <h1 class="mb-0 bread">{{$project->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{ $project->title }}</h2>
                    <p>{{ $project->description }}</p>
                    @if($project->image)
                        <p>
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                        </p>
                    @endif
                </div>
                    </div>


                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Web Development
                                    <span>{{ setting('differents.web_Development') }}</span></a></li>
                            <li><a href="#">Mobile App Development
                                    <span>{{ setting('differents.Mobile_Development') }}</span></a></li>

                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Tag Cloud</h3>
                        <div class="tagcloud">


                            @if (isset($skills))
                                @foreach ($skills as $skill)

                                    <a href="#" class="tag-cloud-link">{{ $skill->title }}</a>
                                @endforeach
                            @else
                                <p>Skills not found.</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
