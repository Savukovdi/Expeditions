@extends("template")
@section("title","Главная страница")
@section("content")

    <div id="myCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="photo/kopiya_3327.jpg" class="d-block w-100" alt="..." style="filter: brightness(65%);"><rect width="100%" height="100%" fill="#777"></rect>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Автоэкспедиция по Кольскому полуострову.</h1>
                        <p>Кольский полуостров – место полуночного солнца, царство полярной ночи...</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('expedition') }}">Смотреть</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="photo/555.jpeg" class="d-block w-100" alt="..." style="filter: brightness(65%);"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>На квадроциклах на перевал Дятлова.</h1>
                        <p>Этот маршрут подходит как начинающим туристам, так и людям, имеющим опыт управления квадроциклами...</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('expedition') }}">Смотреть</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="photo/655.jpg" class="d-block w-100" alt="..." style="filter: brightness(65%);"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Экспедиция на Шантарские острова.</h1>
                        <p>Вы видели, как киты проходят в нескольких метрах от сапа, как скалы из яшмы дробятся в воде...</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('expedition') }}">Смотреть</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        <p class="text-center fs-1">У нас вы сможете сделать!</p>
        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">Впечатлить невероятные пейзажи! <span class="text-muted">Необычные создания природы.</span></h2>
                <p class="lead">Часто, когда смотришь на красочные фотографии с разных уголков планеты, трудно поверить, что эти ландшафты реально существуют. И поэтому мы поможем непременно их все посетить и лично убедить, что они на самом деле настолько прекрасны.</p>
                <a href="{{ route('expedition') }}" type="button" class="btn btn-outline-primary fs-2 mb-3">Впечатлить</a>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 550px; height: 500px; object-fit: cover;" src="photo/baykal.jpg" data-holder-rendered="true">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette align-items-center text-end"> 
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Совершить незабываемые вещи! <span class="text-muted">Испытаете в жизни все.</span></h2>
                <p class="lead">Большинство людей составляют списки того, чего им бы они хотелось попробовать в жизни. Одни делают это для реализации нерастраченных возможностей или же из-за возникшего желания проявить себя в чем-то новом, другие - просто для приобретения положительных эмоций и новых ощущений.</p>
                <a href="{{ route('expedition') }}" type="button" class="btn btn-outline-primary fs-2 mb-3">Совершить</a>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 550px; height: 500px; object-fit: cover;" src="photo/849_.jpg" data-holder-rendered="true">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette align-items-center mb-5">
            <div class="col-md-7">
                <h2 class="featurette-heading">Попробовать что-то новое! <span class="text-muted">Время меняться.</span></h2>
                <p class="lead">Попробуйте отправиться на отдых в место, которое не очень популярно среди туристов. Это отличный способ увидеть что-то новое и выбраться из зоны комфорта. Но помните о безопасности и всегда тщательно готовьтесь к поездкам в незнакомые города и страны.</p>
                <a href="{{ route('expedition') }}" type="button" class="btn btn-outline-primary fs-2 mb-3">Попробовать</a>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 550px; height: 500px; object-fit: cover;" src="photo/0008.jpg" data-holder-rendered="true">
            </div>
        </div>

        <div class="text-center mb-5">
            <div class="row">
                <div class="col">
                    <img src="photo/HiRes.jpg" width="100px" alt=""><br>
                    <h4 class="featurette-heading">Продуманная спонтанность!<br> <span class="text-muted">Маршруты могут адаптироваться под пожелания группы.</span></h4>
                </div>
                <div class="col">
                    <img src="photo/pro0.png" width="100px" alt=""><br>
                    <h4 class="featurette-heading">Экспедиции от прямых организаторов!<br> <span class="text-muted">Без наценок.</span></h4>
                </div>
                <div class="col">
                    <img src="photo/mann.jpg" width="100px" alt=""><br>
                    <h4 class="featurette-heading">Различные группы!<br> <span class="text-muted">Особенная атмосфера в компании единомышленников.</span></h4>
                </div>
            </div>
        </div>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Одно из красивых мест</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Урал – живописный регион на стыке Европейской и Азиатской частей России, играющий роль природной границы между двумя частями света. Интересто?</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">    
                    <a href="{{ route('about_us') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Больше информации</a>
                    <a href="{{ route('expedition') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Переходи -></a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="photo/5650c88f618e0ffcd31ee99168902121.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="1200" height="500" loading="lazy">
                </div>
            </div>
        </div>
    
@endsection