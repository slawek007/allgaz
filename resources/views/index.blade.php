@extends('layouts.layout')
@section('title') {{ setting('site.title') }} @endsection
@section('description') {{ setting('site.description') }} @endsection
@section('content')

@if($topInfo->status == 'ACTIVE')

<div class="pt-3 mt-0 bg-light rounded-3">
    <div class="container-fluid py-0">
      <div class="col px-5 fs-0">{!! $topInfo->body !!}</div>
    </div>
  </div>
@endif


<div id="myCarousel" class="carousel slide mt-2" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('storage/images/rotator-mechanika.jpg') }}" alt="">
        <div class="container">
          <div class="carousel-caption text-left">
            <h2><a class="" href="#">Serwis samochodów osobowych.</h2></a>
            <p>Firma All-Gaz oferuje swoim klientom kompleksowy serwis samochodów. Nasze doświadczenia obejmują wszystkie popularne marki, które jeżdżą po polskich drogach.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('storage/images/rotator-gaz.jpg') }}" alt="">
        <div class="container">
          <div class="carousel-caption text-left">
            <h2><a class="" href="#">Montaż i serwis instalacji gazowych (LPG)</a></h2>
            <p>W zakresie instalacji i serwisu profesjonalnych systemów gazowych LPG i CNG firma ALL-GAZ specjalizuje się od początku istnienia.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('storage/images/rotator-diagnostyka.jpg') }}" alt="">
        <div class="container">
          <div class="carousel-caption text-left">
            <h2><a class="" href="#">Diagnostyka komputerowa samochodów osobowych.</a></h2>
            <p>W ramach usług diagnostycznych dokonujemy odczytywania i kasowania błędów. Przeprowadzamy kompleksową komputerową diagnostykę systemów wtryskowych silników benzynowych i wysokoprężnych. Komputerowo sprawdzamy elektroniczne systemy bezpieczeństwa, takie, jak ABS, EPC, ASR, ESP, SRS czy AIRBAG</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal px-xl-5 px-lg-4"><a href="/kalkulator-lpg">Kalkulator LPG</a></h4>
        </div>
        <div class="card-body">
          <img class="img-fluid" src="{{ asset('storage/images/kalkulator-lpg.jpg') }}" alt="">
          <p class="mt-3 mb-4">
            Kalkulator LPG, pozwoli Państwu oszacować w jakim czasie zwróci się montaż instalacji gazowej, bądź też upewnić się, że warto do...
          </p>
          <a class="btn btn-lg btn-block btn-outline-primary" title="Kalkulator LPG" href="/kalkulator-lpg">Czytaj więcej</a>
        </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"><a href="/gwarancja-zadowolenia">Gwarancja zadowolenia</a></h4>
        </div>
        <div class="card-body">
          <img class="img-fluid" src="{{ asset('storage/images/gwarancja-zadowolenia.jpg') }}" alt="">
          <p class="card-text mt-3 mb-4">
            Kalkulator LPG, pozwoli Państwu oszacować w jakim czasie zwróci się montaż instalacji gazowej, bądź też upewnić się, że warto do...
          </p>
          <a class="btn btn-lg btn-block btn-outline-primary" title="Gwarancja zadowolenia" href="/gwarancja-zadowolenia">Czytaj więcej</a>
       </div>
      </div>

      <div class="w-100 d-none d-sm-block d-lg-none"></div>

      <div class="card mb-4 shadow-sm card-1">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"><a href="/informacje-o-lpg">Informacje <br>o LPG</a></h4>
        </div>
        <div class="card-body">
          <img class="img-fluid" src="{{ asset('storage/images/informacje-lpg.jpg') }}" alt="">
          <p class="card-text mt-3 mb-4">
            Poniżej wymieniamy najważniejsze elementy instalacji LPG które musi zawierać każdy samochód przystosowany do zasilania...
          </p>
          <a class="btn btn-lg btn-block btn-outline-primary" title="Informacje o LPG" href="/informacje-o-lpg">Czytaj więcej</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"><a href="http://konkurs.stag.pl/">Konkurs <br>3xSTAG</a></h4>
        </div>
        <div class="card-body">
          <img class="img-fluid" src="{{ asset('storage/images/konkurs400x400.jpg') }}" alt="">
          <p class="card-text mt-3 mb-4">
            Firma STAG organizuje konkurs dla wszystkich którzy zdecydują się na montaż samochodowej instalacji gazowej STAG...
          </p>
          <a class="btn btn-lg btn-block btn-outline-primary" href="http://konkurs.stag.pl/">Czytaj więce</a>
        </div>
      </div>
    </div>
  </div>

    <hr class="featurette-divider">

  <div class="container marketing">
    <div class="row featurette">
      <div class="">
          <h2 class="featurette-heading">ALL-GAZ - instalacje LPG i CNG - mechanika pojazdowa.</h2>
        <p class="lead">
            Firma All-Gaz to przedsiębiorstwo usługowe z tradycjami w dziedzinie montażu i serwisu instalacji gazowych LPG i CNG, <img style="float:right; padding:10px 0px 10px 10px" src="{{ asset('storage/images/mechanika_pojazdowa4.jpg') }}" /> diagnostyki i elektroniki samochodowej. Specjalizujemy się głównie w samochodowych instalacjach gazowych znanych firm włoskich, polskich i holenderskich. Oferujemy profesjonalny montaż produktów takich marek, jak <strong>BRC, LANDI RENZO czy AC STAG.</strong> Posiadamy odpowiednie, najwyższej jakości wyposażenie komputerowe naszych warsztatów, dzięki czemu każda usługa realizowana jest zgodnie z najnowszymi standardami. Usługi wykonują specjaliści o wysokim poziomie profesjonalizmu, z wieloletnim doświadczeniem w branży. Naszym credo jest nie tylko najwyższa jakość, ale również poszukiwanie sposobów oszczędności, dlatego usługi wykonujemy na najniższym z możliwych poziomów cenowych. Zawsze dbamy o zadowolenie klienta poszukując najkorzystniejszych dla niego rozwiązań. W tym zakresie służymy radą, jak najekonomiczniej dobrać odpowiednią instalację do marki i typu samochodu. Podczas napraw serwisowych korzystamy z oryginalnych jak i zamiennych części i podzespołów według życzenia klienta. Przeprowadzamy tylko montaż instalacji posiadających odpowiednie atesty bezpieczeństwa, a stosowane dodatkowo kontrole jakości zapewniają doskonałą sprawność i przejście przez każdy przegląd techniczny. Montowane przez nas systemy gazowe LPG i CNG posiadają liczne mechaniczne i elektroniczne zabezpieczenia, dzięki czemu nie stanowią żadnego ryzyka dla pasażerów. Tym samym gwarantujemy bezpieczeństwo kierowcom, oddającym w nasze ręce swoje samochody zarówno do bieżących napraw jak i instalacji LPG i CNG. Nasi klienci pochodzą niemalże z całego województwa świętokrzyskiego z naciskiem na miejscowości takie jak Połaniec, Staszów, Busko-Zdrój a nawet Kielce oraz okolice tych miejscowości.

        </p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <h2 class="featurette-heading">{{ $page->excerpt }}</h2>
        {!! $page->body !!}

    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <h2 class="featurette-heading text-center w-100">Posiadamy autoryzacje najpopularniejszych producentów Instalacji LPG</h2>
        <div class="container">
            <div class="row p-2">
            <div class="col-lg-1 col-md-12"></div>
            <div class="col-lg-2 col-md-4 text-center autoryzacja"><img class="img-fluid" src="{{ asset('storage/posiadamy-autoryzacje/log1.jpg') }}" alt="LPG BRC"></div>
            <div class="col-lg-2 col-md-4 text-center autoryzacja"><img class="img-fluid" src="{{ asset('storage/posiadamy-autoryzacje/log3.jpg') }}" alt="LPG Prins"></div>
            <div class="col-lg-2 col-md-4 text-center autoryzacja"><img class="img-fluid" src="{{ asset('storage/posiadamy-autoryzacje/log2.jpg') }}" alt="LPG STAG"></div>
            <div class="col-lg-2 col-md-6 text-center autoryzacja"><img class="img-fluid" src="{{ asset('storage/posiadamy-autoryzacje/log4.jpg') }}" alt="LPG Lovato"></div>
            <div class="col-lg-2 col-md-6 text-center autoryzacja"><img class="img-fluid" src="{{ asset('storage/posiadamy-autoryzacje/log5.jpg') }}" alt="LPG Landirenzo"></div>
            <div class="col-lg-1 col-md-12"></div>
            </div>
        </div>
  </div>
</div>
@endsection
