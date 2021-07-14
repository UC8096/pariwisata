<!-- Navbar -->


<nav id="navi" class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top navbar-scale">

    <!-- Image Logo -->
    <ul class="navbar-nav ml-auto navbar-brand-position">

        <li class="nav-item">
            <a id="logobar" class="nav-link logo-size" href="/">Pariwisata</a>
        </li>
    </ul>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse navbar-link-position" id="navbarToggleExternalContent">
        <ul id="dropd" class="navbar-nav ml-auto bg-dropdown" style="padding-left: 10px">
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="sr-only">Pariwisata</span></a>
            </li>
            <!-- Dropdown Menu -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">About Trees</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><span class="item-text">Tree
                            Species</span></a>
                    <br>
                    <a class="dropdown-item" href="#"><span class="item-text">How To
                            Conserve</span></a>
                </div>
            </li> --}}
            <!-- end of dropdown menu -->
            <li class="nav-item">
                <a class="nav-link" href="/">Wisata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/informasi">Informasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/galeri">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin</a>
            </li>

        </ul>

    </div>

</nav>

<style>
    .logo {
        font: 00 0.875rem/0.875rem "Open Sans", sans-serif;
        font-size: 1.5rem
    }

    .navbar-custom {
        font: 600 0.875rem/0.875rem "Open Sans", sans-serif;
        padding-right: 100px;
        padding-left: 100px;
        transition: all 0.3s;
    }

    .navbar-custom:hover {
        background-color: #0d362f;
        transition: all 0.3s;
    }

    /* Dropdown Menu */

    .navbar-custom .dropdown:hover>.dropdown-menu {
        display: block;
        /* this makes the dropdown menu stay open while hovering it */
        min-width: auto;
        animation: fadeDropdown 0.2s;
        /* required for the fade animation */

    }

    @keyframes fadeDropdown {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .navbar-custom .dropdown-toggle:focus {
        /* removes dropdown outline on focus  */
        outline: 0;
    }

    .navbar-custom .dropdown-menu {
        margin-top: 0;
        border: none;
        border-radius: 0.25rem;
        background-color: #0d362f;
    }

    .navbar-custom .dropdown-item {
        color: rgba(255, 255, 255, 0.671);
        text-decoration: none;

    }

    .navbar-custom .dropdown-item:hover {
        background-color: #0d362f;
    }

    .navbar-custom .dropdown-item .item-text {
        font: 600 0.875rem/0.875rem "Open Sans", sans-serif;
    }

    .navbar-custom .dropdown-item:hover .item-text {
        color: #14bf98;
    }

    .navbar-custom .dropdown-items-divide-hr {
        width: 100%;
        height: 1px;
        margin: 0.75rem auto 0.75rem auto;
        border: none;
        background-color: #b5bcc4;
        opacity: 0.2;
    }

    /* end of dropdown menu */

    .navbar-custom .navbar-toggler {
        border: none;
        color: #fff;
        font-size: 2rem;
    }

    .navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-times {
        display: none;
    }

    .navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-bars {
        display: inline-block;
    }

    .navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-bars {
        display: none;
    }

    .navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-times {
        display: inline-block;
        margin-right: 0.125rem;
    }

    .navbar-link-position {
        padding-right: 20px;
        transition: all 0.3s;
    }

    .navbar-scale {
        height: 80px;
        transition: all 0.3s;

    }

    .logo-size {
        font-size: 30px;
        transition: linear 0.3s;

    }

    .navbar-brand-position {
        padding-right: 10px;
        transition: all 0.3s;
    }

    .bg-dropdown {
        background-color: #0d362f;

    }

    @media (min-width: 768px) {
        .navbar-brand-position {
            padding-left: 10px;
        }

        .bg-dropdown {
            background-color: transparent;

        }
    }
</style>

<script>
    $(window).on('scroll load', function () {
        if (window.pageYOffset > 100) {

            $("nav").addClass("bg-light");
            $("nav").addClass("navbar-light");
            $("nav").removeClass("navbar-dark");
            $("nav").removeClass("navbar-scale");
            $("#logobar").removeClass("logo-size");
            $("#dropd").removeClass("bg-dropdown");

            $("#navbarsExampleDefault").removeClass("navbar-link-position");

        }
        else {
            $("nav").removeClass("bg-light");
            $("#dropd").addClass("bg-dropdown");
            $("nav").addClass("navbar-dark");
            $("nav").addClass("navbar-scale");
            $("#logobar").addClass("logo-size");

            $("#navbarsExampleDefault").addClass("navbar-link-position");

        }
    });

</script>