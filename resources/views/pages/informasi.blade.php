@extends('layouts.app')

@section('content')

<div>

    <div class="topbg-4" style="background-image: url('{{ asset('img/jumbotron2.jpg') }}')">
        <div>
            <div class="position-custom-4 text-light">
                <div>
                    <h1 class="display-4 ">Informasi</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">

        @foreach ($info_data as $info)
        <article class="postcard light red">
            <a class="postcard__img_link a-link" href="#">
                <img class="postcard__img" src="{{ Voyager::image($info->gambar_info) }}" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title red"><span> {{ $info->judul_info }}</span></h1>
                <div class="postcard__subtitle small">
                    <time datetime="{{ $info->tgl_info }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                            <path
                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path
                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            <use xlink:href="#calendar3"></use>

                        </svg>
                        <i class=" mr-2"></i>{{ $info->tgl_info }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $info->info }}</div>
            </div>
        </article>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <div class="mx-auto">

            {!! $info_data->links('pagination::bootstrap-4') !!}

        </div>
    </div>
</div>

@endsection

<style>
    .topbg-4 {
        background-position-y: -400px;
        background-size: cover;
        background-attachment: fixed;
        height: 400px;
    }

    .position-custom-4 {
        align-self: center;
        text-align: center;
        padding-top: 200px;
    }
</style>