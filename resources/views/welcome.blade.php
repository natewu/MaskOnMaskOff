@extends('header')

@section('title')
        <title>Mask Off?</title>
@endsection

@section('page-content')
    <div class="text-center">
        <div>
            <h1>Mask on, fuck it, mask off.</h1>
            <p>Do students at Churchill look hotter with or without the mask?</p>
            <div>
                <ranker></ranker>
            </div>
            <audio style="margin-top: 30px;" title="Future - Mask Off" controls>
                <source src="{{asset('storage/music/future.mp3')}}" type="audio/mpeg">
            </audio>
        </div>
    </div>
@endsection

