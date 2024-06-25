@extends('frontend_views.layout.layout')

@section('title', 'Првачиња')

@section('page_header')
<h1>Првачиња</h1>
@endsection

@section('content')

<div class="erasmus-wrapper">
    <div class="documents-wrapper">
        <div class="all-years-container">
            @foreach ($prvacinja as $item)

                <a href="/prvacinja/{{ $item }}">{{ $item }}</a>
                
            @endforeach
        </div>
    </div>
</div>

@endsection