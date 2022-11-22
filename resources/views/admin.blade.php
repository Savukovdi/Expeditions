@extends("template")
@section("title","Кабинет администратора")
@section('content')

    <p class="fs-3">Административная панель</p> 
    <a href="{{route('expedition_create')}}"><button type="button" class="btn btn-outline-success fs-3">Добавить экспедицию</button></a>
    <a href="{{route('status')}}"><button type="button" class="btn btn-outline-secondary fs-3">Заявки</button></a>
    <a href="{{route('profile')}}"><button type="button" class="btn btn-outline-secondary fs-3">Тестовый профиль</button></a>
    <a href="{{route('recording')}}"><button type="button" class="btn btn-outline-secondary fs-3">Отправления</button></a>
    <a href="{{route('leader')}}"><button type="button" class="btn btn-outline-success fs-3">Ведущие</button></a>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Мест</th>
                <th scope="col">Стомость</th>
                <th scope="col">Дата</th>
                <th scope="col">Кол. Дней</th>
                <th scope="col">Cбор группы</th>
                <th scope="col">Ведущий</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($expeditions as $expedition)
                    <tr>
                        <th scope="row">{{ $expedition['id'] }}</th>
                        <td><p class="card-text">{{ $expedition['name'] }} </p></td>
                        <td><p class="card-text" style=" overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; ">{{ $expedition['description'] }} </p></td>
                        <td><p class="card-text">{{ $expedition['quantity'] }} </p></td>
                        <td><p class="card-text">{{ $expedition['price'] }} </p></td>
                        <td><p class="card-text">{{ $expedition['date'] }} </p></td>
                        <td><p class="card-text">{{ $expedition['duration'] }} </p></td>
                        <td><p class="card-text">{{ $expedition['location'] }} </p></td>
                        <td><p class="card-text">{{ $expedition->leader->fio }} </p></td>
                        <td><a href="expedition_page/{{ $expedition['id'] }}"><button type="button" class="btn btn-outline-primary me-2">Подробнее</button></a></td>
                        <td><a href="expedition_update_form/{{ $expedition['id']  }}"><button type="button" class="btn btn-outline-secondary me-2">Редактировать</button></a></td>
                        <td><a href="expedition_delete/{{ $expedition['id'] }}"><button type="button" class="btn btn-outline-danger me-2">Удалить</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
