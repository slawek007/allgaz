
@extends('layouts.layout')
@section('title') Lista marek z zainstalowanymi instalacjami LPG @endsection

@section('addCssJs')
<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
@endsection

@section('description') Przedstawiamy marki samochodów w kórych zamontowaliśmy instalację LPG @endsection
@section('content')

<div class="container pt-4">
    <h2>Zamontowane instalacje LPG</h2>
    <hr class="mt-1 mb-2">
    Poniżej przedstawiamy marki samochodów w kórych zamontowaliśmy instalację LPG, klikając w markę można obejrzeć modele aut z zamontowaną instalacją LPG.
    <div>
        @foreach ($categories as $category)
            <a class="btn btn-info my-2 text-center" href="{{ url('/zamontowane-instalacje-lpg') }}/{{ $category->slug }}">{{ $category->name }}</a>
        @endforeach
    </div>
</div>

<div class="container pt-4">

    @foreach ($realizations as $realization)

        <p>Model: <strong>{{ $realization->Realizationcategories->name }} {{ $realization->car_name }}</strong>

            @if ($realization->car_engine)
                Silnik:<strong>{{ $realization->car_engine }}</strong>,
            @endif

            @if ($realization->lpg_type)
                Instalacja LPG:<strong>{{ $realization->lpg_type }}</strong>
            @endif
        </p>
        <div class="realization-thumbnail">
            @foreach(json_decode($realization->images, true) as $image)
               <a href="\storage\{{ $image }}" data-toggle="lightbox" data-gallery="gallery-{{ $loop->parent->index }}" title="Instalacja LPG, {{ $realization->Realizationcategories->name }} {{ $realization->car_name }} {{ $realization->car_engine ? $realization->car_engine : '' }}">
               <img src="{{ croppedImage($image) }}" class="img-fluid" alt="Instalacja LPG,  {{ $realization->car_name }} {{ $realization->car_engine ? $realization->car_engine : '' }}">
               </a>
            @endforeach
        </div>

        @if (! $loop->last)
        <hr class="mt-5 mb-4">
        @endif

    @endforeach
</div>

@endsection

@section('addJs')
    <script>
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
@endsection
