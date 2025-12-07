@extends('shablon')

@section('new_title', 'Магазин смартфонов')

@section('new_content')

    {{-- HERO баннер --}}
    <div class="p-5 mb-5 text-center bg-secondary bg-opacity-10 rounded">
        <h1 class="fw-bold mb-3" style="font-size:2.4rem;">Современные смартфоны по лучшим ценам</h1>
        <p class="text-white-50 mx-auto" style="max-width:650px;">
            Оригинальные устройства. Гарантия. Быстрая доставка по Азербайджану.
        </p>

        <a href="#catalog" class="btn btn-primary btn-lg mt-3 px-4">
            Смотреть каталог
        </a>
    </div>

    {{-- Популярные товары --}}
    <h2 class="fw-bold mb-4 text-center">Новые поступления</h2>

    <div class="row g-4">

        @foreach($phones as $phone)
            <div class="col-md-3">
                <div class="card bg-dark text-white border-secondary h-100">

                    {{-- Фото --}}
                    @if($phone->image)
                        <img src="{{ asset('storage/'.$phone->image) }}"
                             class="card-img-top"
                             style="height:200px; object-fit:cover;">
                    @else
                        <div class="bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center"
                             style="height:200px;">
                            <span class="text-white-50">Нет изображения</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->title }}</h5>
                        <p class="text-white-50 mb-2">{{ number_format($phone->price) }} ₼</p>

                        <a href="{{ route('phone.show', $phone->slug) }}"
                           class="btn btn-primary w-100">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection


