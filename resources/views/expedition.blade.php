@extends("template")
@section("title","Экспедиции")
@section("content")

    <div class="row">
        <div class="col-md-2">
            <form action="{{ route('expedition_filtr') }}" method="post">
                @csrf
                <select class="form-select mb-3" name="filtr" aria-label="Default select example">
                    <option value="0">Все</option>
                    <option value="Лёгкая">Лёгкая</option>
                    <option value="Средняя">Средняя</option>
                    <option value="Сложная">Сложная</option>
                    <option value="Эксперт">Эксперт</option>
                    <input type="submit" value="Фильтровать" class="btn btn-outline-secondary fs-3">
                </select>
            </form>
        
        </div>
        <div class="col-md-10">
            <p class="fs-1">Экспедиции</p>
            @foreach ($expeditions as $expedition)
                <div class="card mb-3" style="border-radius: 10px;">
                    <div class="row g-0">      
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$expedition['img']) }}" class="card-img-top" style="width: 100%; height: 100%; object-fit: cover;" alt="Экспедиция">
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase" style="font-weight: 700;">{{ $expedition['name'] }}</h5>
                                <p class="card-text fw-light" style=" overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 7; -webkit-box-orient: vertical; ">{{ $expedition['description'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body" style="background-color: rgba(238,238,241,.1); border: 1px solid rgba(0,0,0,.125);"> 
                                <p class="card-text fs-2" style="font-weight: 700;">{{ $expedition['price'] }} ₽</p>
                                <p class="card-text">Продолжительность: {{ $expedition['duration'] }}</p>
                                <p class="card-text">Сложность: {{ $expedition['complexity'] }}</p>
                                <p class="card-text">Мест: {{ $expedition['quantity'] }}</p>
                                <a href="expedition_page/{{ $expedition['id'] }}"><button type="button" class="btn btn-outline-primary" style="width: 100%;">Подробнее</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection