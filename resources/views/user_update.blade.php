@extends("template")
@section("title","Редактирование")
@section("content")

    <a href="{{ route('profile') }}" type="button" class="btn btn-outline-secondary"><- Вернуться назад</a>
    <h1>Форма для редактирования пользователя</h1>
    <form action="{{ route('user_update', Auth::user()-> id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ФИО:</strong>
                    <input type="text" name="fio" class="form-control"  value="{{Auth::user()-> fio}}" placeholder="ФИО">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Телефон:</strong>
                    <input type="tel" name="telephone" class="form-control" value="{{Auth::user()->telephone}}" placeholder="Телефон">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Дата рождения:</strong>
                    <input date="text" name="date" class="form-control" value="{{Auth::user()-> date}}" placeholder="Паспорт">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Почта:</strong>
                    <input type="email" name="email" class="form-control" value="{{Auth::user()-> email}}" placeholder="Почта">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Обновить</button>
            </div>
        </div>
    </form>
    
@endsection
