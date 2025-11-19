@extends("shablon")

@section("new_title")Про нас@endsection

    @section("new_content")

        <div class="py-5">

            <!-- HERO BLOCK -->
            <section class="mb-5 text-center">
                <h1 class="fw-bold mb-3" style="font-size: 2.2rem;">
                    Добро пожаловать в <span class="text-primary">Etelecom Baku</span>
                </h1>

                <p class="text-white-50 mx-auto" style="max-width: 650px;">
                    Мы предоставляем современные телекоммуникационные решения, интернет-услуги,
                    монтаж сетей и техническую поддержку для частных и корпоративных клиентов.
                </p>

                <a href="/about" class="btn btn-primary btn-lg mt-3 px-4">
                    Подробнее о нас
                </a>
            </section>


            <!-- SERVICES / FEATURES -->
            <section class="row g-4 mb-5">

                <div class="col-md-4">
                    <div class="p-4 rounded bg-secondary bg-opacity-25 h-100">
                        <h4 class="fw-bold mb-2">Высокая скорость</h4>
                        <p class="text-white-50">
                            Стабильный интернет и надежные соединения для любых задач — от работы до игр.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded bg-secondary bg-opacity-25 h-100">
                        <h4 class="fw-bold mb-2">Современные технологии</h4>
                        <p class="text-white-50">
                            Используем оптоволоконные решения, передовое оборудование и продуманную архитектуру сети.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded bg-secondary bg-opacity-25 h-100">
                        <h4 class="fw-bold mb-2">Поддержка 24/7</h4>
                        <p class="text-white-50">
                            Техническая поддержка всегда на связи, чтобы решать вопросы быстро и эффективно.
                        </p>
                    </div>
                </div>

            </section>


            <!-- ABOUT / CTA -->
            <section class="text-center py-5 bg-secondary bg-opacity-10 rounded">
                <h3 class="fw-bold mb-3">Хотите подключиться или задать вопрос?</h3>
                <p class="text-white-50 mx-auto" style="max-width: 550px;">
                    Мы готовы проконсультировать и подобрать оптимальное решение именно для вас.
                </p>

                <a href="/review" class="btn btn-outline-primary px-4">
                    Связаться с нами
                </a>
            </section>

        </div>
@endsection
