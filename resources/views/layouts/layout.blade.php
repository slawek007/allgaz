<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <meta name="description" content="@yield('description')" />
    <title>@yield('title')</title>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    @yield('addCssJs')
  </head>
  <body style="background-color: #F7F7F7;">
    <header>
  <nav class="navbar navbar-light navbar-expand-lg pt-0 pb-0 mb-5 fixed-top border-bottom shadow-sm">
    <a class="navbar-brand" href="{{ route('mainPage') }}"><H1>ALL-GAZ</H1><span class="text-logo">Mechanika pojazdowa <br>Instalacje LPG</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="text-phone">
          <i class="fas fa-phone pr-2"></i><span>600 414 945</span>
        </div>
        {{ menu('TopMenu', 'menus.main') }}
    </div>
  </nav>
</header>

<main role="main" class="main">
    @yield('content')
</main>
  <!-- FOOTER -->
  <hr class="featurette-divider">
  <footer>
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 contact-1 d-none d-lg-block">
                <a class="navbar-brand" href="#"><H1>ALL-GAZ</H1></a>
                  <ul class="OurOffer">
                    <li>Mechanika pojazdowa</li>
                    <li>Serwis klimatyzacji</li>
                    <li>Diagnostyka komputerowa</li>
                    <li>Motaż i serwis LPG</li>
                  </ul>
            </div>
            <div class="col-md-6 col-lg-4 contact-2 d-block">
              <ul class="align-middle">
                <li>ALL-GAZ Piotr Nepelski</li>
                <li>ul. Zrębińska 76</li>
                <li>28-230 Połaniec</li>
                <li>NIP: 866-157-45-41</li>
                <li>tel.: 48 600 414 945</li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4 contact-3">
              <ul>
                <li>ZOBACZ TAKŻE</li>
                <li><a href="{{ url('diagnostyka-samochodow') }}"
                    title="Diagnostyka komputerowa samochodów">Diagnostyka komputerowa samochodów</a></li>
                <li><a href="{{ url('kalkulator-lpg') }}"
                    title="Kalkulator LPG">Kalkulator LPG</a></li>
                <li><a href="{{ url('gwarancja-zadowolenia') }}"
                    title="Gwarancja zadowolenia">Gwarancja zadowolenia</a></li>
                <li><a href="{{ url('serwis-aut') }}"
                    title="Sewis samochodów osobowych">Sewis samochodów osobowych</a></li>
                <li><a href="{{ url('montaz-lpg') }}"
                    title="Montaż instalacji gazowych">Montaż instalacji gazowych</a></li>
                <li><a href="{{ url('kontakt') }}"
                    title="Kontakt">Kontakt</a></li>
              </ul>
            </div>
          </div>
          <a class="politykaprywatnosci"
            href="#poolityka-prywatnosci-cookies">Polityka
            prywatnosci</a>
        </div>
    </footer>


<script>
  var navheight = document.querySelector(".navbar");
  document.querySelector(".main").style.marginTop=navheight.offsetHeight+'px';
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('addJs')
</html>
