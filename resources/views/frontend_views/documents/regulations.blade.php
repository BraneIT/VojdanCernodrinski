@extends('frontend_views.layout.layout')

@section('title', 'Правиници и прописи')

@section('page_header')
<h1>Правиници и прописи</h1>
@endsection

@section('content')

    <div class="erasmus-wrapper">
        <div class="documents-container">

            <div class="year-container"></div>

            @foreach ($regulations as $item)
                <a href="/pravilnici_i_propisi/{{ $item->slug }}">{{ $item->name}}</a>
            @endforeach


        </div>
    </div>
@endsection
