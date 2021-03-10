@extends('layouts.layout')

@section('content')
    @csrf
    @if(!$ads->isEmpty())
        <div class="container">
            @foreach ($ads as $ad)
            <div class="card-header">{{$ad->id}} -> {{$ad->title ?? "no date"}}</div>
                @endforeach
                <div class="result">
                        @php($last_id = $ad->id)
                </div>
                <div class="load-more-button" style="margin-top:5px">
                    <button class="btn btn-info" data-id="{{$last_id}}" id="loadMoreButton">Load More</button>
                </div>
        </div>
    @else 
    <h4 class="">No date</h4>
    @endif
    <div class="load-more-btn text-center">
                <a href="{{ route('ads.index') }}" class="theme-btn btn-style-two" style="background: #2f4f4f">Load More</a>
            </div>
@endsection


