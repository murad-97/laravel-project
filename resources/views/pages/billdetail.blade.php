@extends('layouts.master')
@section('title' , 'Bill')
@section('content')
        <div class="container">
    <div class="sub-container">
        <div class="conten2t">
            <h3 style="margin-top: 70px">Thanks {{ Auth::user()->name }}</h3>
            <div class="flex">
                <p>You have donated :</p>

                <p>{{ session()->get('reques') }} JOD</p>
            </div>
            
            <hr>


        <h3 class="flex">Thank you for your donation</p>
            </h3>

            <div class="cont"> <a href="{{  url('/')  }}" class="btn btn-custom btn-play">home</a> <a href="{{ route("profile.edit") }}" class="btn btn-custom btn-playbtn">profile</a></div>
        </div>
    </div>
</div>
@endsection