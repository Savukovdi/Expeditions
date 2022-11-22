@extends("template")
@section("title","Запись на экспедицию")
@section("content")

        <div class="mt-5">
            <div class="row">
                <div class="col-lg-9">
                    <article>
                        <h1 class="fw-bolder mb-1">{{ $expedition['name'] }}</h1>
                        <a href="../expedition_page/{{ $expedition['id'] }}" type="button" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться назад</a>
                        <section>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="card" style="border-radius: 1rem; border: 0px solid rgba(0,0,0,.125);">           
                                    <div class="card-body p-4 p-lg- text-black">
                                        <form method="post" action="{{ route('expedition_book') }}">
                                            @csrf
                                            <input value="{{ $expedition['id'] }}" name="exp_id" type="hidden" id="form2Example17" class="form-control form-control-lg" /> 
                                            <input value="{{ Auth::user()->id }}" name="user_id" type="hidden" id="form2Example17" class="form-control form-control-lg" />
                                            <input value="{{ Auth::user()->telephone }}" name="telephone" type="hidden" id="form2Example17" class="form-control form-control-lg" />
                                            <input value="{{ Auth::user()->email }}" name="email" type="hidden" id="form2Example17" class="form-control form-control-lg" />

                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Бронирования места</h5>
                                            <div class="form-outline mb-4">
                                                <input disabled value="{{ Auth::user()->fio }}" name="fio" type="text" id="form2Example17" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Фамилия Имя Отчество</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input disabled value="{{ Auth::user()->telephone }}" name="telephone" type="text" id="form2Example17" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Телефон</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input disabled value="{{ Auth::user()->email }}" name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Почта</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input value="{{ old('passport') }}" name="passport" type="text" id="tin" class="form-control form-control-lg" placeholder="00-00 000000"/>
                                                <label class="form-label" for="form2Example17">Паспорт (серия и номер)</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <select class="form-select form-control form-control-lg" name="date" aria-label="Default select example">
                                                    <option value="" selected>Выберите дату</option>
                                                    <option value="22 июн. 2022 – 30 июн. 2022">22 июн. 2022 – 30 июн. 2022</option>
                                                    <option value="29 июн. 2022 – 7 июл. 2022">29 июн. 2022 – 7 июл. 2022</option>
                                                    <option value="16 июл. 2022 – 24 июл. 2022">16 июл. 2022 – 24 июл. 2022</option>
                                                    <option value="31 июл. 2022 – 8 авг. 2022">31 июл. 2022 – 8 авг. 2022</option>
                                                </select>
                                                <label class="form-label" for="form2Example17">Дата отправления</label>
                                            </div>

                                            <div class="form-outline mb-1">
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <div class="form-outline mb-4">
                                                            <input value="1" min="1" max="{{ $expedition['quantity'] }}" name="adults" type="number" id="form2Example17" class="form-control form-control-lg" />
                                                            <label class="form-label" for="form2Example17">Взрослых (от 18 лет)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <div class="form-outline mb-4">
                                                            <input value="0" min="0" max="{{ $expedition['quantity'] }}" name="children" type="number" id="form2Example17" class="form-control form-control-lg" />
                                                            <label class="form-label" for="form2Example17">Дети (до 18 лет)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <textarea value="{{ $expedition['description'] }}" name="description" type="text" id="form2Example17" class="form-control form-control-lg"></textarea>
                                                <label class="form-label" for="form2Example17">Комментарии/пожелания</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input class="form-check-input me-2" name="checkbox" type="checkbox" value="Согласен" id="form2Example3c" />
                                                <label class="form-check-label" for="form2Example3">
                                                Я согласен с <br><a href="{{ route('privacy_policy') }}">Политикой конфиденциальности</a>
                                                </label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="submit">Отправить заявку</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </div>
                <div class="col-lg-3 shadow p-3 mb-5 bg-body rounded">
                    <div class="card mb-4">
                        <div class="card-header fs-1">{{ $expedition['price'] }} ₽</div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header fs-3">Описание:</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2">Мест: {{ $expedition['quantity'] }}</li>
                                        <li class="mb-2">Продолжительность: {{ $expedition['duration'] }}</li>
                                        <li class="mb-2">Сложность: {{ $expedition['complexity'] }}</li>
                                        <li class="mb-2">Сбор: {{ $expedition['location'] }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Ведущий:</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2">{{ $expedition->leader->fio }}</li>
                                        <li class="mb-2">Телефон: {{ $expedition->leader->telephone }}</li>
                                        <li class="mb-2">Почта: {{ $expedition->leader->email }}</li>
                                    </ul>
                                </div>     
                            </div>
                        </div>
                    </div>      

                    <div class="card mb-4">
                        <div class="card-header fs-3">Как купить?</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-3">
                                            <div class="fw-bold">1. Заявка</div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="fw-bold">2. Данные по участникам</div>
                                            <div class="text-muted">Вместе с ответом по наличию мест. Вы получите анкету для заполнения данных.</div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="fw-bold">3. Бронирование</div>
                                            <div class="text-muted">На основании присланной Вами анкеты с данными осуществляется бронирование мест - вам высылается подтверждение бронирования, договор и счет.</div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="fw-bold">4. Оплата</div>
                                            <div class="text-muted">В течение 5 рабочих дней внести предоплату. Срок полной оплаты вносится не позднее чем за 3 недели до начала поездки</div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="fw-bold">5. Отправиться на экспедицию</div>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    
@endsection
