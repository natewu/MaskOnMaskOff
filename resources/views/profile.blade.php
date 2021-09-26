@extends('header')

@section('title')
        <title>Mask Off? {{$profile->name}}'s stats</title>
@endsection

@section('page-content')
    <div>
            <div class="profile-flex">
                <img class="avatar" src="{{asset('storage/maskon/'.$profile->maskonimg)}}" alt="">
                <div style="margin-left: 12px;">
                    <h1 style="margin-bottom: 2.4px;">$ {{$profile->name}} $</h1>
                    <copyusername v-bind:code="{{json_encode($profile->code)}}"></copyusername>
                </div>
            </div>
            
            <p>grade: {{$profile->grade}}</p>
            @if($profile->contact)
                <p>contact: {{$profile->contact}}</p>
            @endif
            
            <p>classes: chemistry, ethics, french 30-1(moes, aline)</p>
            <p>33% of churchill students think {{$profile->name}} looks hotter without a mask</p>
            <p style="margin-bottom: 6px;">comments:</p>
            <comments 
                v-bind:code="{{json_encode($profile->code)}}">
            </comments>
        </div>
@endsection