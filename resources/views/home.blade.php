@extends('layouts.app')

@section('content')

@include('components.jumbotron')

<div class="container px-4 py-5" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        @foreach ($wisata_data as $item)
        <a href="/{{$item->id}}/detail" style="text-decoration: none">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('{{ Voyager::image($item->gambar) }}'); background-size: cover;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="bottom: 0">
                            {{Str::limit($item->judul_wisata, $limit = 25, $end = "...")}}</h2>
                        <p>{{  Str::limit($item->info_wisata, $limit = 100, $end = "...")}}</p>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                {{-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white"> --}}
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    <use xlink:href="#calendar3"></use>

                                </svg>
                                <small>{{ $item->tgl_wisata }}</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        @endforeach

    </div>
    <div class="d-flex justify-content-center">
        <div class="mx-auto">

            {!! $wisata_data->links('pagination::bootstrap-4') !!}

        </div>
    </div>

</div>
@endsection

<style>
    /* background jumbotron home */

    .topbg-1 {
        background-position-y: 0px;
        background-size: cover;
        background-attachment: fixed;
        height: 500px;
    }

    .position-custom-1 {
        position: relative;
        padding-top: 130px;
        padding-left: 50px;
    }

    .deskripsi-box-custom-1 {
        width: 270px;
    }

    .col:hover {
        opacity: 90%;
        transform: scale(1.05);
        transition: transform .2s;
        animation: ease-in-out
    }

    @media (min-width: 655px) {
        .position-custom-1 {
            padding-left: 150px;
        }

        .deskripsi-box-custom-1 {
            width: 500px;
        }
    }

    @media (min-width: 768px) {
        .position-custom-1 {
            padding-left: 200px;
        }
    }
</style>
