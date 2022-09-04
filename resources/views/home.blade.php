@extends('layouts.home')
 
@section('content')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 col-xl-4">
            <img class="w-100" src="{{ URL::to('/img/logo.svg') }}" />
        </div>
        <div class="col">
            <div class="card rounded-5">
                <div class="card-body text-center">
                    <h1 class="ah border-bottom border-light">Adam Hayward</h1>
                    <h3 class="sd">Software Developer</h3>
                    <br>
                    <p class="lead">
                        I am a software developer based in Birmingham, UK.<br>
                        For the last 12 years’ I have been developing applications for a variety of platforms and I am looking for the next exciting project to be a part of.
                    </p>
                </div>
            </div>
        <div/>
        
    </div>
@endsection