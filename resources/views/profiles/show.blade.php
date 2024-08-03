@extends('layouts.app')

@section('title', 'Show Prfile')

@section('content')

    @include('components.navbar')

    <div class="container mt-5">
        <div class="row justify-content-center">

            <!-- prfile -->
            <div class="row col-lg-3 mx-auto p-0 d-flex justify-content-center">
                <form action="" method="" class="bg-white shadow rounded-3 p-2" enctype="multipart/form-data">
                    <div class="row col mx-auto p-2">
                        {{-- Abatar --}}
                        <div>
                            <img src="{{ asset('images\profile_sample1.png') }}" alt=""
                                class="mx-auto d-flex justify-content-center align-items-center" style="height: 100px;">
                        </div>
                        {{-- Name --}}
                        <div class="row mx-auto">
                            <h4>
                                <span>
                                    John Adam Smitd
                                </span>
                            </h4>
                        </div>

                        {{-- Introduction --}}
                        <div class="row mx-auto">
                            {{-- Introduction -Title --}}
                            <h6>Introduction</h6>
                            {{-- Introduction -Text --}}
                            <p class="text-start mx-auto p-1">Lorem ipsum dolor sit amet, </p>
                        </div>

                        {{-- Language --}}
                        <div class="row mx-auto mb-5">
                            <h6>Language <span>English</span></h6>
                        </div>

                        {{-- Button --}}
                        <div class="d-flex flex-column align-items-center">
                            {{-- Edit Profile --}}
                            <a href="#" class="btn btn-kurenai p-1 mb-2" style="height:60px; width:250px;">
                                Edit Profile
                            </a>
                            {{-- Delete Account --}}
                            <button type="button" class="btn btn-white p-1" style="height:60px; width:250px;">
                                Delete Account
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <!-- Posts-->
            <div
                class="col-lg-8
                                mx-auto p-0 d-flex justify-content-center>
                                <div class="row">
                <div class="row">
                    {{-- My Post --}}
                    <div class="section-header">
                        <h2>
                            <span class="px-2 heading-kurenai">
                                My Post
                            </span>
                        </h2>
                    </div>

                    {{-- New Post --}}
                    <div class="row">
                        <div class="col-6 mb-3">
                            @include('components.post')
                        </div>
                        <div class="col-6 mb-3">
                            @include('components.post')
                        </div>
                        <div class="col-6 mb-3">
                            @include('components.post')
                        </div>
                        <div class="col-6 mb-3">
                            @include('components.post')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
