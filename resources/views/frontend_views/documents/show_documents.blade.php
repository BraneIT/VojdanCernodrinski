@extends('frontend_views.layout.layout')

@section('title', 'Документи')

@section('page_header')

<h1>{{$document->title}}</h1>
@endsection
@section('content')

<div class="erasmus-wrapper">
    <div class="erasmus-container">
        <object data="{{ asset($document->file) }}#toolbar=0" type="application/pdf" width="100%" height="600px">
        </object>
     
            <button class="open-pdf" onclick="openPDF('{{ asset($document->file) }}')">Погледни ПДФ</button>
        <a href="{{ asset($document->file) }}" download="{{$document->name}}">
            <button>Превземи ПДФ</button>
        </a>
    </div>
</div>

@endsection