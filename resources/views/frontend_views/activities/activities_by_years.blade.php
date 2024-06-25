@extends('frontend_views.layout.layout')

@section('title', 'Активности')

@section('page_header')
<h1>Активности</h1>
@endsection
@section('content')
<div class="erasmus-wrapper">
    <div class="documents-contianer">
        @if(count($activities)== 0)
        <p>Моментално нема објавени документи</p>
        @else
        <div class="all-years-container">
            @foreach ($activities as $item)
                <a href="/aktivnosti/{{ $item }}">{{ $item}}</a>
            @endforeach
        </div>
        @endif
    </div>
</div>

@endsection