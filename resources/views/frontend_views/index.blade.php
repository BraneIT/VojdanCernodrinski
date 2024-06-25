@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
    {{--  --}}

    <section id="hero">
        <div class="hero-content">
          <div class="hero-content-background main-title">
      
            <p><span class="hero-content-title">ВОЈДАН ЧЕРНОДРИНСКИ</span> <br> </p>
            <h1>
                "Основно училиште - првите чекори кон бескрајните можности"
            </h1>
          </div>
        </div>
      
        {{-- <div class="custom-shape-divider-bottom-1717538745">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
          </svg>
      </div> --}}
      </section>
   
    <section id="news-wrapper" class="hidden">
        <div class="news-label-container">
            <h1>НОВОСТИ</h1>
            
        </div>
        @if (sizeof($news) == 0)
            <h1 class="no-news">Моментално нема објавени новости</h1>
            @else
        <div class="news-container hidden">
            
            @foreach($news as $item)
                <div class="news hidden">
                    <div class="news-image-container">
                        @if($item->image === "")
                            <img src="{{ asset('assets/images/VojdanLogo.png') }}" class="default-image">
                        @else
                            <img src="{{$item->image}}" alt="{{$item->title}}" class="news-images">
                        @endif
                        
                    </div>
                    <div class="news-details">
                        <div class="date"> 
                            <p>{{ $item->created_at->format('d/n/Y') }}</p>
                        </div>
                        
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->short_content }}</p>
                    </div>
                    <div class="news-button">

                        <a href="/novosti/{{ $item->slug }}">Прочитај повеке</a>
                    </div>
                </div>
            @endforeach
            
            
        </div>
        <a href="/novosti" class="all-news">
            Види ги сите новости</a>
            @endif
    </section>
   
    {{-- <section id="gallery" class="hidden">
        <h1>ГАЛЕРИЈА</h1>
        <div class="gallery-index hidden">
            @foreach($gallery as $item)
                <figure class="card">
                    <img
                    src="{{$item->image}}"
                    
                    />
                </figure>
            @endforeach
                
        </div>
        <a href="/gallery" class="all-news" style="margin-top: 20px">
            Види ги сите слики</a>
        
    </section> --}}
    <section id="gallery" class="hidden">

        <h1>ГАЛЕРИЈА</h1>
        @if(sizeof($gallery)==0)
        <h1 class="no-news">Моментално нема објавени слики</h1>
        @else
        <div class="carousel">
        <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              @foreach ($gallery as $item)
                  
              <div class="swiper-slide"><img class="carousel-img" src="{{$item->image}}"></div>
              @endforeach
              
              ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
      
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
      
      
          </div>
        </div>
        <button class="see-more">Погледни ги сите слики</button>
        @endif
      </section>
    <section id="video" class="hidden">
        <div class="video-label">
            <h1>Детска химна за „Карпош“ кој го сакаме</h1>
        </div>
       <a class="video-link" href="https://youtu.be/mYGZfv4GyS8?si=KqWuSumVPnsYNZSb"> <img class="video-img" src="{{asset('assets/images/Thumbnail-min.PNG')}}" alt=""> </a>
    </section>
    <section class="links hidden" >
        <h1>Корисни линкови:</h1>
        <div class="institutions">
          <a href="https://mon.gov.mk/"><img src="{{asset('assets/images/usefulLinks/Ministerstvo.png')}}" alt=""></a>
          <a href="https://karpos.gov.mk/"><img src="{{asset('assets/images/usefulLinks/Karposh.jpg')}}" alt=""></a>
          <a href="https://dic.edu.mk/"><img src="{{asset('assets/images/usefulLinks/IspitenCentar.jpeg')}}" alt=""></a>
          <a href="https://ednevnik.edu.mk/"><img src="{{asset('assets/images/usefulLinks/ednevnik-logo.png')}}" alt=""></a>
          <a href="https://www.bro.gov.mk/"><img src="{{asset('assets/images/usefulLinks/Biro.png')}}" alt=""></a>
        </div>
      </section>
    
@endsection
