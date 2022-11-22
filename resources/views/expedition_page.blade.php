@extends("template")
@section("title","Просмотр экспедиции")
@section("content")

        <div class="mt-5">
            <div class="row">
                <div class="col-lg-9">          
                    <article>         
                        <header class="mb-4">          
                            <h1 class="fw-bolder mb-1">{{ $expedition['name'] }}</h1>
                        </header>                
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/'.$expedition['img']) }}" alt="..."></figure>           
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ $expedition['description'] }}</p>
                        </section>
                    </article>
                </div>
                <div class="col-lg-3 shadow p-3 mb-5 bg-body rounded">
                    <div class="card mb-4">
                        <div class="card-header fs-1">{{ $expedition['price'] }} ₽</div>
                        <div class="card-body">
                            <div class="input-group">
                                <a href="../expedition_book/{{ $expedition['id'] }}" type="button" style="background: #36ba5f; width: 100%; border-color: #36ba5f;" class="btn btn-success fs-5">Забронировать</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Описание:</div>
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
                        <div class="card-header">Даты отправления:</div>
                        <div class="card-body">
                            22 июн. 2022 – 30 июн. 2022<br>
                            29 июн. 2022 – 7 июл. 2022<br>
                            16 июл. 2022 – 24 июл. 2022<br>
                            31 июл. 2022 – 8 авг. 2022
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
                </div>
            </div>
        </div>

        <p class="text-center fs-1">Важно знать</p>
        <div class="accordion" id="accordionPanelsStayOpenExample mb-5">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Кто будет сопровождать меня в путешествии
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <b>Во время этого тура с вами будет работать целая команда специалистов:</b> 
                        <ul>
                            <li class="mb-3">сопровождающий от Организации экспедиции будет с вашей группой на протяжении поездки. Он будет координировать все процессы по ходу экспедиции и сможет ответить на любые ваши вопросы. </li>
                            <li class="mb-3">профессиональные водители и капитаны будут управлять микроавтобусами на лесных дорогах и катерами в открытом море</li>
                            <li class="mb-3">профессиональные водители и капитаны будут управлять микроавтобусами на лесных дорогах и катерами в открытом море</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Требования к подготовке и возрасту участников
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <ul>
                            <li class="mb-3">Маршрут сложный, для участия в нем туристам желательно иметь опыт походов, либо хороший уровень физической подготовки.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Как забронировать путешествие
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ul>
                            <li class="mb-3">Перейдите по кнопке “Забронировать". Вас ждет небольшая форма для заполнения данных. Вы резервируете место в группе внесением предоплаты, и тревел-эксперт одобряет вашу заявку в течение суток. Если заявка будет отклонена - предоплата будет возвращена моментально. Задайте вопросы автору заранеем перед бронированием.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Как оплатить экспедицию?
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ul>
                            <li class="mb-3">В течении 5 дней после бронирования тура необходимо внести 20% от стоимости экспедиции по реквизитам. </li>
                            <li class="mb-3">Оставшуюся часть вы оплачиваете на месте в первый день тура. Возможна оплата наличными или по карте через терминал.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Условия отмены
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ul>
                            <li class="mb-3">Отмена бронирования в срок за 60 дней и менее до начала экспедиции - предоплата не возвращается. В других случаях возврат за вычетом фактически понесенных расходов (не менее 15% от стоимости тура). Если вы находите себе замену - возврат 100%. Если возобновляются ограничения по передвижению/пересечению границ - 100% предоплаты переносится без штрафов на другие даты с выдачей сертификата.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
