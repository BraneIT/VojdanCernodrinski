<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/frontend_css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/VojdanLogo.png') }}">
     <title>@yield('title')</title>
</head>
<body>
<header class="header">
    <div class="menu">
        <div class="logo-wrapper">
          <a href="/">
            <div class="logo-container">
                <img src="{{asset($logo)}}" alt="Vojdan Logo">
            </div>
            <div class="logo-content">
                
                <h2>ВОЈДАН ЧЕРНОДРИНСКИ</h2>
                
            </div>
          </a>
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
                    <a href="/novosti">НОВОСТИ</a>
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
                    <a href="/godisna_programa">ГОДИШНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО</a>
                    <a href="/razvojna_programa">РАЗВОЈНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО</a>
                    <a href="/izvestaj_od_samoevaluacija">ИЗВЕШТАЈ ОД САМОЕВАЛУАЦИЈА</a>
                    <a href="/integralna_inspekcija">ИНТЕГРАЛНА ИНСПЕКЦИЈА</a>
                    <a href="/skica">ПЛАН/СКИЦА НА УЧИЛИШТЕТО</a>
                    <a href="/pravilnici_i_propisi">ПРАВИЛНИЦИ И ПРОПИСИ</a>
                    <a href="/finansiski_dokumenti">ФИНАНСИСКИ ДОКУМЕНТИ</a>
                    <a href="/prvacinja">ПРВАЧИЊА</a>
                    <a href="/javni_nabavki">ЈАВНИ НАБАВКИ</a>
                </div>
            </div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">ПРОЕКТИ</button>
                <div class="dropdown-content">
                    <a href="/erazmus">ЕРАЗМУС+</a>
                    <a href="/etvining">ЕТВИНИНГ</a>
                    <a href="/aktivnosti">АКТИВНОСТИ</a>
                    <a href="/megjuetnicka_integracija_vo_obrazovanieto">МЕЃУЕТНИЧКА ИНТЕГРАЦИЈА ВО ОБРАЗОВАНИЕТО</a>
                </div>
            </div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">НАСТАВА</button>
              
              <div class="dropdown-content">
                <a href="#">НАСТАВНИ ПРОГРАМИ ПО ГЕНЕРАЦИИ ПРЕДМЕТИ И ЗАКОНИ</a>
                <a href="/planiranja_za_ocenuvanje">ПЛАНИРАЊА ЗА ОЦЕНУВАЊЕ</a>
                <a href="/dodatna_nastava">ДОДАТНА НАСТАВА</a>
                <a href="/dopunska_nastava">ДОПУНСКА НАСТАВА</a>
                <a href="/vonnstavni_aktivnosti">ВОННАСТАВНИ АКТИВНОСТИ</a>
                <a href="/biblioteka">БИБЛИОТЕКА</a>
                <a href="/raspored_na_nastava">РАСПОРЕД НА НАСТАВА</a>
                <a href="/raspored_na_smeni">РАСПОРЕД НА СМЕНИ</a>
                <a href="/raspored_na_zvonenje">РАСПОРЕД НА ЅВОНЕЊЕ</a>

            </div>
            </div>
            <div class="menu-item dropdown">
              <button class="menu-buttons">ВРАБОТЕНИ</button>
              
              <div class="dropdown-content">
                <a href="/direktor">ДИРЕКТОР</a>
                <a href="/administrativen_kadar">АДМИНИСТРАТИВЕН КАДАР</a>
                <a href="/strucna_sluzba">СТРУЧНА СЛУЖБА</a>
                <a href="/nastavni_kadar_odelenska_nastava">НАСТАВНИ КАДАР ОДДЕЉЕНСКА НАСТАВА</a>
                <a href="/nastavni_kadar_predmetna_nastava">НАСТАВНИ КАДАР ПРЕДМЕТНА НАСТАВА</a>
                <a href="/oddelenski_sovet">ОДДЕЉЕНСКИ СОВЕТ</a>
                <a href="/strucni_aktivi">СТРУЧНИ АКТИВИ</a>

            </div>
            </div>
            
            <div class="menu-item"><a href="/kontakt">КОНТАКТ</a></div>
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
      <div class="copyright"><p>Copyright © 2024 - OOU "Vojdan Černodrinski"</p></div>
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