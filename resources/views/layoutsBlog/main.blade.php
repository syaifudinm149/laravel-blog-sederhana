<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>LBS | {{ $title }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>

<body>
    <header>
        <!-- Intro settings -->
        <style>
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 58px;
            }

            @media (max-width: 991px) {
                #intro {
                    /* Margin to fix overlapping fixed navbar */
                    margin-top: 45px;
                }
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" target="" href="">
                    LBS
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item {{ $title == '/' ? 'active' : '' }}">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ $title === 'About' ? 'active' : '' }}" href="/about"
                                rel="nofollow">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'Blog' ? 'active' : '' }}" href="/blog">Blog</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" {{ $title == 'Categories' ? 'active' : '' }}
                                href="/categories">Categories</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex flex-row">
                        <!-- Icons -->
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="/login" rel="nofollow">
                                Login
                                {{-- <i class="fa fa-sign-in" aria-hidden="true"></i> --}}
                            </a>
                        </li>
                        {{-- <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href=" rel="nofollow">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light">
            <h1 class="mb-3 h2">Laravel Blog Sederhana</h1>
            <p class="mb-3">Belajar Laravel Setiap Hari</p>
            {{-- <a class="btn btn-primary m-2" href="" role="button" rel="nofollow">Programing</a>
            <a class="btn btn-primary m-2" href="" role="button">Olahraga</a> --}}
        </div>
        <!-- Jumbotron -->
    </header>
    <!--Main Navigation-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">
                @yield('container')
            </section>
            <!--Section: Content-->

            <!-- Pagination -->
            @yield('pagination')
            {{-- <div class="d-flex justify-content-center">
        {{$posts->links()}}
      </div> --}}

            <nav class="my-4" aria-label="...">
                {{-- <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul> --}}
            </nav>
        </div>
    </main>
    <!--Footer-->
    <footer class="bg-light text-lg-start">
        {{-- <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" href="" rel="nofollow" target="">
                Programing
            </a>
            <a role="button" class="btn btn-primary btn-lg m-2" href="">
                Olah Raga
            </a>
        </div> --}}

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow Laravel Blog Sederhana Official</p>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="">Laravel Blog Sederhana</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>
