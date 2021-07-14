@extends('layouts.app')
@section('content')
{{-- 
<div class="topbg-1" style="background-image: url('{{ Voyager::image($wisata_data->gambar) }}')">
</div> --}}
{{-- <h2>{{$wisata_data->nama}}</h2>
<h5>{{$wisata_data->alamat}}</h5>
<p>{{$wisata_data->deskripsi}}</p> --}}

<!-- intro 4 -->

<body class="topbg-1" style="background-image: url('{{ asset('img/jumbotron.jpg') }}')">
    <div>
        <div id="intro" class="basic-1 text-light">
            <div class="container">
                <article class="postcard dark green">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img_2" src="{{ Voyager::image($wisata_data->gambar) }}" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title green"><span href="#">{{$wisata_data->judul_wisata}}</span></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    <use xlink:href="#calendar3"></use>

                                </svg>
                                <i class="mr-2">{{ $wisata_data->tgl_wisata }}</i>
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">{{$wisata_data->info_wisata}}</div>
                    </div>
                </article>
            </div>
        </div>
    </div>


</body>

@endsection

<style>
    .postcard .postcard__img_2 {
        max-width: 500px;
        max-height: 100%;
        object-fit: cover;
        position: relative;
        transition: transform 0.3s ease;
    }

    .postcard:hover .postcard__img_2 {
        transform: scale(1.1);
    }

    /* intro */

    .basic-1 {
        padding-top: 250px;
        padding-bottom: 3rem;
    }

    .basic-1 .text-container {
        margin-bottom: 3rem;
    }

    .basic-1 .section-title {
        margin-bottom: 0.5rem;
    }

    .basic-1 h2 {
        margin-bottom: 1.375rem;
    }

    .basic-1 .testimonial-author {
        color: #484a46;
    }

    .text-container-padding-4 {
        padding-top: 50px;
    }

    /* Hover Animation */

    .basic-1 .content-align {
        text-align: center;
    }

    .basic-1 .image-container {
        overflow: hidden;
        border-radius: 0.25rem;
    }

    .basic-1 .image-container img {
        margin: 0;
        border-radius: 0.25rem;
        transition: all 0.3s;
    }

    .basic-1 .image-container:hover img {
        -moz-transform: scale(1.15);
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
    }
/* 
    .dp-gambar:hover {
        transform: scale(1.05);
        transition: transform .2s;
        animation: ease-in-out
    } */
</style>