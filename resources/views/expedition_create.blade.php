@extends("template")
@section("title","Создание экспедиции")
@section("content")

    <a href="{{ route('admin') }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
    <h1>Форма для добавления экспедиции</h1>
    <form action="{{ route('expedition_create') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Название:</strong>
                    <input type="text" name="name" class="form-control"  value="{{old('name')}}" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Описание:</strong>
                    <input type="text" name="description" class="form-control" value="{{old('description')}}" placeholder="description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Мест:</strong>
                    <input type="text" name="quantity" class="form-control" value="{{old('quantity')}}" placeholder="quantity">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Стоимость:</strong>
                    <input type="text" name="price" class="form-control" value="{{old('price')}}" placeholder="price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Дата:</strong>
                    <input type="date" name="date" class="form-control" value="{{old('date')}}" placeholder="data">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Продолжительность:</strong>
                    <input type="text" name="duration" class="form-control" value="{{old('duration')}}" placeholder="duration">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Изображение:</strong>
                    <input type="file" name="img" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Сложность:</strong>
                    <select name="complexity" class="form-select" aria-label="Default select example">
                        <option value="" selected>Выбрать</option>
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
                    <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="location">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ведущий:</strong>
                    <select class="form-select" name="leader_id" aria-label="Default select example">
                        <option value="" selected>Ведущий</option>
                        @foreach($leaders as $leader)   
                            <option value="{{ $leader['id'] }}">{{ $leader['fio'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </form>
    
@endsection
