<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light border-bottom mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="{{ route('index') }}"><img src="{{ asset('photo/expedition.jpg') }}" alt="..." style="width:105px;"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li><a href="{{ route('expedition') }}" class="nav-link px-2 link-dark fs-5" style="color: black;">Экспедиции</a></li>
                        <li><a href="{{ route('about_us') }}" class="nav-link px-2 link-dark fs-5" style="color: black;">О нас</a></li>
                    </ul>
                    <ul class="nav">
                        @guest()
                            <a class="btn btn-outline-dark me-2" href="{{ route('login') }}">Войти</a>
                            <a class="btn btn-dark" href="{{ route('register') }}">Регистрация</a>
                        @endguest
                        @auth()
                            @if(Auth::user()->isAdmin())
                                <a class="btn btn-outline-dark me-2" href="{{ route('admin') }}">Администратор</a>
                            @else
                                <a class="btn btn-outline-dark me-2" href="{{ route('profile') }}">Кабинет</a>
                            @endif
                            <a class="btn btn-dark" href="{{ route('logout') }}">Выйти</a>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @yield('content')
        </main>

        <footer class="text-center text-lg-start">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Свяжитесь с нами в социальных сетях:</span>
                </div>
                <div>
                    <a href="http://www.facebook.com.vn/" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://investor.twitterinc.com/home/default.aspx" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="http://instagram.com/" class="me-4 text-reset">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://mail.ru/" class="me-4 text-reset">
                        <i class="fa-solid fa-at"></i>
                    </a>
                </div>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Организация экспедиций
                            </h6>
                            <p>Программа каждого экспедиционного путешествия разрабатывается с привлечением местных экспертов. Во время поездки используется только современная техника и снаряжение.
                            На всех участников оформляется страховка. Словом, за безопасность наших туристов мы отвечаем как за собственную.</p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Экспедиции</h6>
                            <p><a href="#!" class="text-reset">По сложности</a></p>
                            <p><a href="#!" class="text-reset">По местности</a></p>
                            <p><a href="#!" class="text-reset">По транспорту</a></p>
                            <p><a href="#!" class="text-reset">По проживанию</a></p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Помощь</h6>
                            <p><a href="#!" class="text-reset">О нас</a></p>
                            <p><a href="#!" class="text-reset">Блог</a></p>
                            <p><a href="#!" class="text-reset">Оплата</a></p>
                            <p><a href="#!" class="text-reset">Сотрудники</a></p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Контакты</h6>
                            <p><i class="fas fa-home me-3"></i>Челябинск, Российская 23а</p>
                            <p><i class="fas fa-envelope me-3"></i>densav@gmail.com</p>
                            <p><i class="fas fa-phone me-3"></i> + 7(952) 147 57 98</p>
                            <p><i class="fas fa-print me-3"></i> + 7(684) 589 67 89</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="#">Организация экспедиций</a>
            </div>
        </footer>

    </div>
    <script src="{{ asset("css/bootstrap.min.js" ) }}"></script>
    <script src="https://kit.fontawesome.com/e218ba6ca8.js" crossorigin="anonymous"></script>
    <script src="{{ asset("css/jquery.min.js" ) }}"></script>
    <script src="{{ asset("css/jquery.maskedinput.min.js" ) }}"></script>
    <script>
        $(document).ready(function() {
            $("#phone").mask("+7 (999) 99-99-999");
            $("#tin").mask("99-99-999999");
        });
    </script>
</body>
</html>
