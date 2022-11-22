@extends("template")
@section("title","Редактирование экспедиции")
@section("content")

    <a href="{{ route('admin') }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
    <h1>Форма для редактирования экспедиции</h1>
    <form action="{{ route('expedition_update', $expedition['id']) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Название:</strong>
                    <input type="text" name="name" class="form-control"  value="{{ $expedition['name'] }}" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Описание:</strong>
                    <input type="text" name="description" class="form-control" value="{{ $expedition['description'] }}" placeholder="description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Мест:</strong>
                    <input type="text" name="quantity" class="form-control" value="{{ $expedition['quantity'] }}" placeholder="quantity">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Стоимость:</strong>
                    <input type="text" name="price" class="form-control" value="{{ $expedition['price'] }}" placeholder="price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Дата:</strong>
                    <input type="date" name="date" class="form-control" value="{{ $expedition['date'] }}" placeholder="data">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Продолжительность:</strong>
                    <input type="text" name="duration" class="form-control" value="{{ $expedition['duration'] }}" placeholder="duration">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Сложность:</strong>
                    <select name="complexity" class="form-select" aria-label="Default select example">
                        <option value="{{ $expedition['complexity'] }}" selected>{{ $expedition['complexity'] }}</option>
                        <option name="complexity" value="Легкая">Легкая</option>
                        <option name="complexity" value="Средняя">Средняя</option>
                        <option name="complexity" value="Сложная">Сложная</option>
                        <option name="complexity" value="Эксперт">Эксперт</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Место сбора:</strong>
                    <input type="text" name="location" class="form-control" value="{{ $expedition['location'] }}" placeholder="location">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ведущий:</strong>
                    <select class="form-select" name="leader_id" aria-label="Default select example">
                        <option value="{{ $expedition['leader_id'] }}" selected>{{ $expedition->leader->fio }}</option>
                        @foreach($leaders as $leader)   
                            <option value="{{ $leader['id'] }}">{{ $leader['fio'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </div>
    </form>
    
@endsection
