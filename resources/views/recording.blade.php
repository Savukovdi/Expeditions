@extends("template")
@section("title","Записи")
@section("content")

    <a href="{{ route('admin') }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Отправитель</th>
                <th scope="col">Дата отправления</th>
                <th scope="col">Паспорт</th>
                <th scope="col">Статус</th>
                <th scope="col">Номер билета</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($expedition as $expedition)
                    <tr>
                        <th scope="row">{{ $expedition->id }}</th>
                        <td><p class="card-text">{{ $expedition->expedition->name }} </p></td>
                        <td><p class="card-text">{{ $expedition->user->fio }} </p></td>
                        <td><p class="card-text">{{ $expedition->date }} </p></td>
                        <td><p class="card-text">{{ $expedition->passport }} </p></td>
                        <th scope="row"><p class="card-text">{{ $expedition->event }} </p></th>
                        <th scope="row"><p class="card-text">{{ $expedition->nomer }} </p></th>
                        <td><a href="recording_delete/{{ $expedition->id }}" type="button" class="btn btn-outline-danger">Удалить</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection