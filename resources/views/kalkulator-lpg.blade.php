@extends('layouts.layout')
@section('title') Kalkulator LPG @endsection
@section('description') Firma ALL-GAZ Piotr Nepelski - zajmujemy się montażem instalacji gazowych LPG i CNG, serwisem, diagnostyką, elektryką samochodową osobowych, serwisujemy również klimatyzacje, regenerujemy pompy, turbosprężarki, maglownice. @endsection
@section('content')

  <div class="container pt-4">
        <p>Kalkulator LPG, pozwoli Państwu oszacować w jakim czasie zwróci się <b>montaż instalacji gazowej</b>, bądź też upewnić się, że warto do samochodu zainwestować w instalację LPG. Kalkulator przyjmuje spalanie gazu wyższe o około 15% w stosunku do spalania benzyny, jest to norma która może się zmieniać o kilka procent w zależności od silnika i stylu jazdy.</b></p>

        <script language="javascript">

        function Round(n, k) {
            var factor = Math.pow(10, k);
            return Math.round(n*factor)/factor;
        }

        function licz()
        {
            a=document.formularz.cena_pb.value.replace(",","\.")*1; //Cena benzyny
            b=document.formularz.cena_lpg.value.replace(",","\.")*1; //Cena gazu
            c=document.formularz.cena_inst_lpg.value.replace(",","\.")*1; //Cena instalacji LPG
            d=document.formularz.spalanie_pb.value.replace(",","\.")*1; //Średnie spalanie benzyny
            e=document.formularz.przebieg.value.replace(",","\.")*1; //Średni roczny przebieg
            document.querySelector('.errorMsg').style.display="none";

            if (isNaN(a) || isNaN(b) || isNaN(c) || isNaN(d) || isNaN(e)) {
            erorrMsg = document.querySelector('.errorMsg').style.display="block";

            }
            else {
            document.querySelector('.obliczone_spalanie_lpg').innerText = Round(d*1.15,2);
            document.querySelector('.obliczone_koszt100_benzyna').innerText = Round(a*d,2);
            document.querySelector('.obliczone_koszt100_lpg').innerText = Round(d*1.15*b,2);
            document.querySelector('.obliczone_oszcz100_lpg').innerText = Round((a*d)-(d*1.15*b),2);
            document.querySelector('.obliczone_oszcz_mies_lpg').innerText = Round((e/12)*((a*d)-(d*1.15*b))/100,2);
            document.querySelector('.obliczone_oszcz_rok_lpg').innerText = Round(e*((a*d)-(d*1.15*b))/100,2);
            document.querySelector('.obliczone_przebieg_zwrot').innerText = Round(100*c/((a*d)-(d*1.15*b)),2);
            document.querySelector('.obliczone_mies_zwrot').innerText = Round((((100*c/((a*d)-(d*1.15*b)))/(e/12))+0.49),0);
            }
        }
        </script>

        <div>
        <form name="formularz" action="javascript:licz()">
                <div class="form-group row">
                    <label for="cenaBenzyny" class="col-sm-2 col-form-label">Cena benzyny</label>
                    <div class="col-sm-2">
                        <input type="text" id="cenaBenzyny" class="form-control ml-2" name="cena_pb" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cenaLPG" class="col-sm-2 col-form-label">Cena gazu</label>
                    <div class="col-sm-2">
                        <input type="text" id="cenaLPG" class="form-control ml-2" name="cena_lpg" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cenaInstLPG" class="col-sm-2 col-form-label">Cena instalacji LPG</label>
                    <div class="col-sm-2">
                        <input type="text" id="cenaInstLPG" class="form-control ml-2" name="cena_inst_lpg" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="spalaniePB" class="col-sm-2 col-form-label">Średnie spalanie benzyny</label>
                    <div class="col-sm-2">
                        <input type="text" id="spalaniePB" class="form-control ml-2" name="spalanie_pb" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="przebieg" class="col-sm-2 col-form-label">Średni roczny przebieg</label>
                    <div class="col-sm-2">
                        <input type="text" id="przebieg" class="form-control ml-2" name="przebieg" >
                    </div>
                </div>

                <div class="errorMsg alert alert-danger" style="display:none;">Wprowadzono błędne lub niekompletne dane</div>

                    <input type="submit" class="btn btn-success mb-4" value="Oblicz ile zaoszczędzisz"/>

                    <p>Obliczone spalanie LPG: <strong class="obliczone_spalanie_lpg"></strong></p>
                    <p>Koszt przejazdu 100km na benzynie: <strong class="obliczone_koszt100_benzyna"></strong></p>
                    <p>Koszt przejazdu 100km na LPG: <strong class="obliczone_koszt100_lpg"></strong></p>
                    <p>Oszczędność z przejazdu 100km na LPG : <strong class="obliczone_oszcz100_lpg"></strong></p>
                    <p>Oszczędnosć miesięczna z jazdy na LPG: <strong class="obliczone_oszcz_mies_lpg"></strong></p>
                    <p>Oszczędnosć roczna z jazdy na LPG: <strong class="obliczone_oszcz_rok_lpg"></strong></p>
                    <p style="color: red;">Instalacja LPG zwróci się po przebiegu <strong class="obliczone_przebieg_zwrot"></strong>
                     km czyli po <strong class="obliczone_mies_zwrot"></strong> miesiącach</p>

        </form>
    </div>
  </div>

@endsection
