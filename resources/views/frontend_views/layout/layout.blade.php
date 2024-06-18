<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC:wght@300;400;700&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/frontend_css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-manji.png') }}">
     <title>@yield('title')</title>
    <link rel="preload" href="{{ asset('assets/images/logo-manji.webp') }}" as="image">
</head>
<body>
<header class="header">
    <div class="menu">
        <div class="logo-wrapper">
            <div class="logo-container">
                <img src="{{asset('assets/images/VojdanLogo.png')}}" alt="Vojdan Logo">
            </div>
            <div class="logo-content">
                
                <h2>ВОЈДАН ЧЕРНОДРИНСКИ</h2>
                
            </div>
        </div>
        <button class="hamburger-menu-btn">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
       
      
        <nav class="menu-items">
            <div class="menu-item"><a href="/">ДОМА</a></div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">ЗА НАС</button>
                <div class="dropdown-content">
                    <a href="/licna_karta">ЛИЧНА КАРТА</a>
                    <a href="/razvoj_i_istorijat">RАЗВОЈ И ИСТОРИЈАТ</a>
                    <a href="/organizacija">ОРГАНИЗАЦИЈА</a>
                    <a href="/za_nasiot_patron">ЗА НАШИОТ ПАТРОН</a>
                    <a href="/vizija_i_misija">МИСИЈА И ВИЗИЈА</a>
                    <a href="/prijemni_denovi_na_ucilisteto">ПРИЈЕМНИ ДЕНОВИ НА УЧИЛИШТЕТО</a>
                    <a href="/prijemni_denovi_na_nastavnicite">ПРИЈЕМНИ ДЕНОВИ НА НАСТАВНИЦИТЕ</a>
                    <a href="/galerija">ГАЛЕРИЈА</a>
                    <a href="/informacii_od_javen_karakter">ИНФОРМАЦИИ ОД ЈАВЕН КАРАКТЕР</a>
                </div>
            </div>
            <div class="menu-item dropdown">
                <button class="menu-buttons">ДОКУМЕНТИ</button>
                <div class="dropdown-content ">
                    <a href="/statut">СТАТУТ</a>
                    <a href="/godisna_programa">ГОДИШНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО И ГОДИШНИ И ПОЛУГОДИШНИ ИЗВЕШТАИ</a>
                    <a href="/razvojna_programa">РАЗВОЈНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО</a>
                    <a href="/izvestaj_od_samoevaluacija">ИЗВЕШТАЈ ОД САМОЕВАЛУАЦИЈА</a>
                    <a href="/integralna_inspekcija">ИНТЕГРАЛНА ИНСПЕКЦИЈА</a>
                    <a href="/skica">ПЛАН/СКИЦА НА УЧИЛИШТЕТО</a>
                    <a href="/pravilnici_i_propisi">ПРАВИЛНИЦИ И ПРОПИСИ</a>
                    <a href="/finansiski_dokumenti">ФИНАНСИСКИ ДОКУМЕНТИ</a>
                    <a href="#">ПРВАЧИЊА</a>
                    <a href="/javni_nabavki">ЈАВНИ НАБАВКИ</a>
                </div>
            </div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">ПРОЕКТИ</button>
                <div class="dropdown-content">
                    <a href="#">ЕРАЗМУС+</a>
                    <a href="#">ЕТВИНИНГ</a>
                    <a href="#">АКТИВНОСТИ</a>
                    <a href="#">МЕЃУЕТНИЧКА ИНТЕГРАЦИЈА ВО ОБРАЗОВАНИЕТО</a>
                </div>
            </div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">НАСТАВА</button>
              
              <div class="dropdown-content">
                <a href="#">НАСТАВНИ ПРОГРАМИ ПО ГЕНЕРАЦИИ ПРЕДМЕТИ И ЗАКОНИ</a>
                <a href="#">ПЛАНИРАЊА ЗА ОЦЕНУВАЊЕ</a>
                <a href="#">ДОДАТНА НАСТАВА</a>
                <a href="#">ВОННАСТАВНИ АКТИВНОСТИ</a>
                <a href="#">БИБЛИОТЕКА</a>
                <a href="#">РАСПОРЕД НА НАСТАВА</a>
                <a href="#">РАСПОРЕД НА СМЕНИ</a>
                <a href="#">РАСПОРЕД НА ЅВОНЕЊЕ</a>

            </div>
            </div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">ВРАБОТЕНИ</button>
              
              <div class="dropdown-content">
                <a href="/direktor">ДИРЕКТОР</a>
                <a href="/administrativen_kadar">АДМИНИСТРАТИВЕН КАДАР</a>
                <a href="#">СТРУЧНА СЛУЖБА</a>
                <a href="#">НАСТАВНИ КАДАР ОДДЕЉЕНСКА НАСТАВА</a>
                <a href="#">НАСТАВНИ КАДАР ПРЕДМЕТНА НАСТАВА</a>
                <a href="#">ОДДЕЉЕНСКИ СОВЕТ</a>
                <a href="#">СТРУЧНИ АКТИВИ</a>

            </div>
            </div>
            <div class="menu-item"><a href="#">КОНТАКТ</a></div>
        </nav>
    </div>
</header>   
    <div class="content">
        @if(Request::path() !== '/' && Request::path() !== '/under_construction')
        <div class="pages-intro">
            <div class="pages-intro-container">
                @yield('page_header')
            </div>
        </div>  
        @endif
        
        @yield('content')
    </div>
    <div class="footer">
        <div class="map-wrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.0696169291155!2d21.40800427679346!3d41.998781457848786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13541446d1dfcb0d%3A0x9b570b12bba9cbb6!2sElementary%20School%20%22Vojdan%20%C4%8Cernodrinski%22!5e0!3m2!1ssr!2smk!4v1717580758392!5m2!1ssr!2smk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer-info">
          <p><strong>Работно време:</strong></p>
          <p><h5>ПОНЕДЕЛНК-ПЕТОК</h5> 07:00– 15:00</p>
          <p><strong>Контакт телефон:</strong></p>
          <p>02/30 66 610, 02/30 61 922</p>
          <p><strong>Контакт емаил:</strong></p>
          <p>vojdancernodrinski@yahoo.com</p>
          <p><strong>Адреса:</strong></p>
          <p>ул „Дрезденска“ бр.3 н. Тафталиџе – Скопје</p>
        </div>
      
      </div>
      <div class="copyright"><p>Copyright © 2024 OOU "Vojdan Černodrinski"</p></div>
    </div>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
        const swiper = new Swiper('.swiper', {
          // Optional parameters
        
          // If we need pagination
          pagination: {
            el: '.swiper-pagination',
          },
        
          // Navigation arrows
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        
          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        });
        </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" /> --}}

  

</body>
</html>