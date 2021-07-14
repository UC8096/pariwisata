@extends('layouts.app')
@section('content')
<!-- Background & Jumbotron  -->

<body class="topbg-1" style="background-image: url('{{ asset('img/jumbotron.jpg') }}')">
    <div>
        <div>
            <div>
                <div class="container padding-center">
                    <h1 class="text-light des-align">About Us</h1>
                    <br>
                    
                    <div class="features-wrap">
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/tio.jpg') }}" alt="Avatar"
                                    style="width:200px;">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Sulistio Sanjaya</h5>
                                <p class="text-sm">Role : Project Manager</p>
                                <p class="text-sm">NIM : 20180140084</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/musa.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Musafak</h5>
                                <p class="text-sm">Role : UML Diagram</p>
                                <p class="text-sm">NIM : 20180140093</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/tsaqif.png') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Tsaqif Aushaf F</h5>
                                <p class="text-sm">Role : Front-End Developer</p>
                                <p class="text-sm">NIM : 20180140109</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/arul.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Nashrul Saefullah</h5>
                                <p class="text-sm">Role : Front-End Developer</p>
                                <p class="text-sm">NIM : 20180140098</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/vyan.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Vyan Insya N. M.</h5>
                                <p class="text-sm">Role : Fullstack Developer</p>
                                <p class="text-sm">NIM : 20180140096</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/reza.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : M. Reza Rafli</h5>
                                <p class="text-sm">Role : Fullstack Developer</p>
                                <p class="text-sm">NIM : 20180140102</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/budiman.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Arif Budiman</h5>
                                <p class="text-sm">Role : UI/UX Designer</p>
                                <p class="text-sm">NIM : 2018140119</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/ifan.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : M. Ifan Rizky</h5>
                                <p class="text-sm">Role : Database Analys</p>
                                <p class="text-sm">NIM : 2018140085</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/fajar2.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Nur Fajar Ismail</h5>
                                <p class="text-sm">Role : Laporan & Documentation</p>
                                <p class="text-sm">NIM : 20180140115</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/arya.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : Abdul Eriawan N.</h5>
                                <p class="text-sm">Role : Tester</p>
                                <p class="text-sm">NIM : 20180140118</p>
                            </div>
                        </div>
                        <div class="feature des-align">
                            <div class="feature-inner">
                                <img class="circle-avatar" src="{{ asset('/img/about/miftah.jpg') }}" alt="Avatar"
                                    style="width:200px">
                                <br>
                                <br>
                                <h5 class="feature-title h3-mobile">Nama : M. Miftah Jailani</h5>
                                <p class="text-sm">Role : Tester</p>
                                <p class="text-sm">NIM : 20180140101</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
    .circle-avatar {
        border-radius: 50%;
    }

    .feature {
        padding: 15px;
        width: 280px;
        max-width: 280px;
        flex-grow: 1;
    }

    .feature:hover{
        transform: scale(1.05);
        transition: transform .3s;
        animation: ease-in-out
    }

    .feature-inner {
        height: 100%;
        border-radius: 10px;
        padding: 40px 24px;
        box-shadow: 0 16px 48px black;
        background: white;

    }

    .des-align {
        text-align: center;
    }

    .features-wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-right: -12px;
        margin-left: -12px
    }

    .padding-center {
        padding-top: 120px;
    }
</style>