@extends("shablon")

@section("new_title")Главная страница@endsection

@section("new_content")
    <div class="py-5">

        <!-- HERO BANNER -->
        <section class="mb-5 p-5 bg-secondary bg-opacity-10 rounded text-center">
            <h1 class="fw-bold mb-3" style="font-size: 2.5rem;">
                Лучшие смартфоны по выгодным ценам
            </h1>

            <p class="text-white-50 mx-auto" style="max-width: 600px;">
                Новинки 2025 года, оригинальные устройства, гарантия, доставка по всему Азербайджану.
                Покупайте смартфоны Apple, Samsung, Xiaomi, Nothing и другие бренды — с лучшим сервисом.
            </p>

            <a href="/products" class="btn btn-primary btn-lg mt-3 px-4">
                Смотреть каталог
            </a>
        </section>


        <!-- FEATURED PHONES -->
        <h2 class="fw-bold text-center mb-4">Популярные модели</h2>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-4">
                <div class="card bg-secondary bg-opacity-25 text-white border-0 h-100">
                    <img src="https://via.placeholder.com/400x300?text=iPhone+15+Pro" class="card-img-top" alt="iPhone">
                    <div class="card-body">
                        <h4 class="card-title">iPhone 15 Pro</h4>
                        <p class="text-white-50">512 GB, Titanium Blue</p>
                        <h5 class="fw-bold mb-3">3499 AZN</h5>
                        <a href="#" class="btn btn-primary w-100">Купить</a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4">
                <div class="card bg-secondary bg-opacity-25 text-white border-0 h-100">
                    <img src="https://via.placeholder.com/400x300?text=Samsung+S24+Ultra" class="card-img-top" alt="Samsung">
                    <div class="card-body">
                        <h4 class="card-title">Samsung Galaxy S24 Ultra</h4>
                        <p class="text-white-50">256 GB, Black</p>
                        <h5 class="fw-bold mb-3">2999 AZN</h5>
                        <a href="#" class="btn btn-primary w-100">Купить</a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-4">
                <div class="card bg-secondary bg-opacity-25 text-white border-0 h-100">
                    <img src="https://via.placeholder.com/400x300?text=Xiaomi+14+Pro" class="card-img-top" alt="Xiaomi">
                    <div class="card-body">
                        <h4 class="card-title">Xiaomi 14 Pro</h4>
                        <p class="text-white-50">512 GB, Ceramic White</p>
                        <h5 class="fw-bold mb-3">1699 AZN</h5>
                        <a href="#" class="btn btn-primary w-100">Купить</a>
                    </div>
                </div>
            </div>

        </div>


        <!-- FEATURES BLOCK -->
        <h2 class="fw-bold text-center mt-5 mb-4">Почему выбирают нас</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4 bg-secondary bg-opacity-10 rounded h-100">
                    <h4 class="fw-bold mb-2">Оригинальная продукция</h4>
                    <p class="text-white-50">Только официальные устройства с гарантией программы производителя.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-secondary bg-opacity-10 rounded h-100">
                    <h4 class="fw-bold mb-2">Гарантия и сервис</h4>
                    <p class="text-white-50">Быстрая замена, ремонт, поддержка — мы всегда на связи.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-secondary bg-opacity-10 rounded h-100">
                    <h4 class="fw-bold mb-2">Доставка по Азербайджану</h4>
                    <p class="text-white-50">Доставим курьером или отправим в любой регион страны.</p>
                </div>
            </div>

        </div>

    </div>

@endsection

