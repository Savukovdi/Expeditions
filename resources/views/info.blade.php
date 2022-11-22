@extends("template")
@section("title","Информация")
@section("content")

        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">{{ $recording->expedition->name }}</h1>
                            <p class="lead fw-normal text-white-50 mb-4">{{ $recording->expedition->description }}</p>                           
                            <h1 class="display-5 fw-bolder text-white mb-2">Билет: {{ $recording->nomer }}</h1>
                            <h3 class="fw-bolder text-white mb-2">{{ $recording->date }}</h3>
                            <h4 class="fw-bolder text-white mb-2">Сбор: {{ $recording->expedition->location }}</h4>
                            <h5 class="fw-bolder text-white mb-2">10:00 по Мск</h5>
                            <p class="lead fw-normal text-white-50 mb-4">Удачной экспедиции!</p>
                            <a href="{{ route('profile') }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('storage/'.$recording->expedition->img) }}" alt="..."></div>
                </div>
            </div>
        </header>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Вы</strong>
                        <h3 class="mb-2">{{ $recording->user->fio }}</h3>  
                        <div class="card-text mb-2">Телефон: {{$recording->user->telephone}}</div>
                        <div class="card-text mb-2">Дата рождения: {{$recording->user->date}}</div>
                        <div class="card-text mb-3">Почта: {{$recording->user->email}}</div>
                        <div class="mb-1 text-muted">Удачной экспедиции!</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Ведущий</strong>
                        <h3 class="mb-2">{{ $recording->expedition->leader->fio }}</h3>  
                        <div class="card-text mb-2">Вопросы? Свяжитесь: ↓↓</div>
                        <div class="card-text mb-2">Телефон: {{$recording->expedition->leader->telephone}}</div>
                        <div class="card-text mb-3">Почта: {{$recording->expedition->leader->email}}</div>
                        <div class="mb-1 text-muted">Проведу и обучу!</div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection