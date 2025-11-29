@extends("shablon")

@section("new_title", "Главная — Etelecom Baku")

@section("new_content")

    <div class="py-5">

        <!-- HERO БЛОК -->
        <section class="mb-5 p-5 bg-secondary bg-opacity-10 rounded text-center">
            <h1 class="fw-bold mb-3" style="font-size: 2.5rem;">
                Современные смартфоны по лучшим ценам
            </h1>

            <p class="text-white-50 mx-auto" style="max-width: 600px;">
                Оригинальные модели Apple, Samsung, Xiaomi, Nothing и других брендов.
                Прямые поставки, гарантия, доставка по всему Азербайджану.
            </p>

            <a href="/category" class="btn btn-primary btn-lg mt-3 px-4">
                Перейти в каталог
            </a>
        </section>


        <!-- ПОПУЛЯРНЫЕ ТЕЛЕФОНЫ -->
        <h2 class="fw-bold text-center mb-4">Популярные смартфоны</h2>

        @php
            $popularPhones = \App\Models\Phone::where('is_active', true)
                ->orderBy('id', 'desc')
                ->limit(6)
                ->get();
        @endphp

        <div class="row g-4">
            @forelse($popularPhones as $phone)
                <div class="col-md-4">
                    <div class="card bg-secondary bg-opacity-25 text-white border-0 h-100">

                        @if($phone->image)
                            <img src="{{ asset('storage/'.$phone->image) }}"
                                 class="card-img-top"
                                 style="height: 220px; object-fit: cover;">
                        @else
                            <img src="https://via.placeholder.com/400x300?text=No+Image"
                                 class="card-img-top"
                                 style="height: 220px; object-fit: cover;">
                        @endif

                        <div class="card-body">
                            <h4 class="card-title">{{ $phone->title }}</h4>
                            <p class="text-white-50">{{ $phone->memory ?? '' }}</p>

                            @if($phone->price)
                                <h5 class="fw-bold mb-3">{{ $phone->price }} AZN</h5>
                            @endif

                            <a href="/phone/{{ $phone->slug }}" class="btn btn-primary w-100">Подробнее</a>
                        </div>

                    </div>
                </div>
            @empty
                <p class="text-center text-white-50">
                    Популярные товары ещё не добавлены.
                </p>
            @endforelse
        </div>


        <!-- ПРЕИМУЩЕСТВА -->
        <h2 class="fw-bold text-center mt-5 mb-4">Почему выбирают нас?</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4 bg-secondary bg-opacity-10 rounded h-100">
                    <h4 class="fw-bold mb-2">Оригинальная продукция</h4>
                    <p class="text-white-50">
                        Мы продаём только официальные устройства с гарантией производителя.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-secondary bg-opacity-10 rounded h-100">
                    <h4 class="fw-bold mb-2">Быстрый сервис</h4>
                    <p class="text-white-50">
                        Поддержка клиентов, помощь в настройке, консультации — всегда на связи.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-secondary bg-opacity-10 rounded h-100">
                    <h4 class="fw-bold mb-2">Доставка по всей стране</h4>
                    <p class="text-white-50">
                        Привезём курьером в Баку или отправим в любой регион Азербайджана.
                    </p>
                </div>
            </div>

        </div>

    </div>

@endsection


