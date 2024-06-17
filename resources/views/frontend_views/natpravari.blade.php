@extends('frontend_views.layout.layout')

@section('title', 'Натправари')

@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>Учество на НАТПРАВАРИ и остали награди</h1>
    </div>
</div>    
<div class="erasmus-wrapper">
    @if(sizeof($documents)==0)
        <div class="documents-container">     
            <p>Тренутно нема објављених докумената</p>
        </div>
     @else 
   <?php $lastYear = null;
   $endYear = null;
   $lastYearForEndYears = null;?>
    <div class="documents-container">
        @foreach ($documents as $item)
        
        @if($item->end_year !== NULL)
            @if ($lastYear !== $item->year || $endYear !== $item->end_year)
                <div class="year-container"><h1>{{$item->year}}/{{$item->end_year}}</h1></div>
                <a href="/ucestvo_na_natprevari_i_ostali_nagradi/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                <?php $lastYearForEndYears = $item->year;
                     ?>
            @else

                <a href="/ucestvo_na_natprevari_i_ostali_nagradi/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                <?php $lastYearForEndYears = $item->year;
                     ?>
            @endif
        @else
        @if ($lastYear != $item->year && $item->end_year == NULL)
                    <div class="year-container"><h1>{{$item->year}}</h1></div>
                    <a href="/ucestvo_na_natprevari_i_ostali_nagradi/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                    <?php $lastYear = $item->year; ?>
                @else
                    
                    <a href="/ucestvo_na_natprevari_i_ostali_nagradi/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                    <?php $lastYear = $item->year; ?>
                @endif
        @endif
        <?php
            
            $endYear = $item->end_year;
         ?>
        @endforeach

    </div>
    @endif
</div>
       

@endsection