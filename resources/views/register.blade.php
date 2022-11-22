@extends("template")
@section("title","Регистрация")
@section("content")

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="post" action="{{ route('register') }}">
                                        @csrf
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Регистрация учётной записи</h5>
                                        <div class="form-outline mb-4">
                                            <input value="{{ old('fio') }}" name="fio" type="text" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Фамилия Имя Отчество</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input value="{{ old('telephone') }}" name="telephone" type="text" id="phone" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Телефон</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input value="{{ old('date') }}" name="date" type="date" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Дата рождения</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input value="{{ old('email') }}" name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Почта</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input value="{{ old('password') }}" name="password" type="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Пароль</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input class="form-check-input me-2" name="checkbox" type="checkbox" value="Согласен" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                            Я согласен с <br><a href="{{ route('privacy_policy') }}">Политикой конфиденциальности</a>
                                            </label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Регистрация</button>
                                        </div>

                                        <p class="pb-lg-2" style="color: #393f81;">У вас уже есть учётная запись? <a href="{{ route('login') }}" style="color: #393f81;">Авторизация здесь</a></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="photo/1306.jpg" alt="login form" class="img-fluid" style="transform: scaleX(-1); height: 100%; width: 100%; border-radius: 1rem 0 0 1rem; object-fit: cover;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
