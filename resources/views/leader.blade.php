@extends("template")
@section("title","Записи")
@section("content")

    <a href="{{ route('admin') }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Инициалы</th>
                <th scope="col">Телефон</th>
                <th scope="col">Почта</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($leaders as $leader)
                    <tr>
                        <th scope="row">{{ $leader->id }}</th>
                        <td><p class="card-text">{{ $leader->fio }} </p></td>
                        <td><p class="card-text">{{ $leader->telephone }} </p></td>
                        <td><p class="card-text">{{ $leader->email }} </p></td>
                        <td><a href="leader_delete/{{ $leader->id }}" type="button" class="btn btn-outline-danger">Удалить</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1>Форма для добавления ведущего</h1>
    <form action="{{ route('leader_create') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Инициалы:</strong>
                    <input type="text" name="fio" class="form-control"  value="{{old('fio')}}" placeholder="fio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Телефон:</strong>
                    <input type="text" name="telephone" class="form-control" value="{{old('telephone')}}" placeholder="telephone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Почта:</strong>
                    <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </form>

@endsection