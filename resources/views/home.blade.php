@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="grid">
            <div class="box-1">@include('_sidebar-link')</div>
            <div class="box-2">
                @include('_publish-tweet-panel')
                <div class="time-line mt-4">
                    @include('_tweet')
                    @include('_tweet')
                    @include('_tweet')
                </div>
            </div>
            <div class="box-3">@include('_friends-list')</div>
        </div>
    </div>
@endsection
