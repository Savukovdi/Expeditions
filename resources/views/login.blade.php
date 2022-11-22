@extends("template")
@section("title","Авторизация")
@section("content")

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="photo/1306.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="post" action="{{ route('login') }}">
                                        @csrf
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Вход в учётную запись</h5>

                                        <div class="form-outline mb-4">
                                            <input value="{{ old('email') }}" name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Электронная почта</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input value="{{ old('password') }}" name="password" type="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Пароль</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Авторизация</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">У вас нет учётной записи? <a href="{{ route('register') }}" style="color: #393f81;">Зарегисрируйтесь здесь</a></p>
                                        <a href="{{ route('privacy_policy') }}" class="small text-muted">Политика конфиденциальности</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
