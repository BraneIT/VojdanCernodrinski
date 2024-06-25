@extends('frontend_views.layout.layout')

@section('title', 'Еразмус')

@section('page_header')
<h1>Еразмус+</h1>
@endsection

@section('content')

<div class="erasmus-wrapper">
    <div class="documents-contianer">
        @if(count($erasmus)== 0)
        <p>Моментално нема објавени документи</p>
        @else
            @foreach ($erasmus as $item)
                <a href="/erazmus/{{ $item->slug }}">{{ $item->name}}</a>
            @endforeach
        @endif
    </div>
</div>
@endsection