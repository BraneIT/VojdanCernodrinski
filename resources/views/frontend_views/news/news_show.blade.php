@extends('frontend_views.layout.layout')

@section('title',  $news->title )

@section('page_header')
<h1>{{$news->title}}</h1>
@endsection
@section('content')

<div class="erasmus-wrapper">
    <div class="single-news-wrapper">
        @if($news->image !== "")
        <div class="show-news-image">
            <img src="{{asset($news->image)  }}" alt="">
        </div>
        @endif
        <div class="news-content-container">

            {!! $news->content !!}
        </div>
    </div>
</div>

@endsection