@extends("template")
@section("title","Заявки")
@section("content")

    <a href="{{ route('admin') }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Отправитель</th>
                <th scope="col">Телефон</th>
                <th scope="col">Почта</th>
                <th scope="col">Взрослых</th>
                <th scope="col">Детей</th>
                <th scope="col">Дата отправления</th>
                <th scope="col">Паспорт</th>
                <th scope="col">Пожелания</th>
                <th scope="col">Статус</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($expedition as $expedition)
                    <tr>
                        <th scope="row">{{ $expedition->id }}</th>
                        <td><p class="card-text">{{ $expedition->expedition->name }} </p></td>
                        <td><p class="card-text">{{ $expedition->user->fio }} </p></td>
                        <td><p class="card-text">{{ $expedition->telephone }} </p></td>
                        <td><p class="card-text">{{ $expedition->email }} </p></td>
                        <td><p class="card-text">{{ $expedition->adults }} </p></td>
                        <td><p class="card-text">{{ $expedition->children }} </p></td>
                        <td><p class="card-text">{{ $expedition->date }} </p></td>
                        <td><p class="card-text">{{ $expedition->passport }} </p></td>
                        <td><p class="card-text">{{ $expedition->description }} </p></td>
                        <th scope="row"><p class="card-text">{{ $expedition->event }} </p></th>
                        <td>
                            <form action="{{ route('update_status_confirm') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $expedition->user_id }}">
                                <input type="hidden" name="exp_id" value="{{ $expedition->exp_id }}">
                                <input type="hidden" name="passport" value="{{ $expedition->passport }}">
                                <input type="hidden" name="date" value="{{ $expedition->date }}">
                                <input type="hidden" name="id" value="{{ $expedition->id }}">
                                <button type="submit" class="btn btn-outline-success">Подтвердить</button>
                            </form>
                            <form action="{{ route('update_status_reject',$expedition->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="event" value="Отклоненный">
                                <button type="submit" class="btn btn-outline-danger">Отклонить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection