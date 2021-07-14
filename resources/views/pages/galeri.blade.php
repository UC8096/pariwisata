@extends('layouts.app')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

<div>
    <div class="topbg-5" style="background-image: url('{{ asset('img/jumbotron3.jpg') }}')">
        <div>
            <div class="position-custom-5 text-light">
                <div>
                    <h1 class="display-4 ">Galeri</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container gallery-container mt-5">

        <div class="tz-gallery">

            <div class="row">
                @foreach ($galeri_data as $item)
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ Voyager::image($item->gambar_galeri) }}">
                        <img src="{{ Voyager::image($item->gambar_galeri) }}" alt="Park">
                    </a>
                </div>
                @endforeach

            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
    baguetteBox.run('.tz-gallery');
</script>

@endsection



<style>
    .topbg-5 {
        background-position-y: -400px;
        background-size: cover;
        background-attachment: fixed;
        height: 400px;
    }

    .position-custom-5 {
        align-self: center;
        text-align: center;
        padding-top: 200px;
    }
</style>