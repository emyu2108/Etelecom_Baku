@extends('shablon')

@section('new_title', $phone->title)

@section('new_content')

    <div class="row">

        {{-- Фото --}}
        <div class="col-md-5">
            @if($phone->image)
                <img src="{{ asset('storage/'.$phone->image) }}"
                     class="img-fluid rounded border border-secondary"
                     style="max-height: 400px; object-fit:cover;">
            @else
                <div class="bg-secondary bg-opacity-25 rounded d-flex align-items-center justify-content-center"
                     style="height:400px;">
                    <span class="text-white-50">Нет изображения</span>
                </div>
            @endif
        </div>

        {{-- Информация --}}
        <div class="col-md-7">
            <h1 class="fw-bold mb-3">{{ $phone->title }}</h1>

            <h3 class="text-primary fw-bold mb-3">{{ number_format($phone->price) }} ₼</h3>

            <div class="mb-4">
                <h5 class="fw-bold mb-2">Описание:</h5>
                <p class="text-white-50" style="line-height:1.6;">
                    {{ $phone->description ?? 'Описание отсутствует.' }}
                </p>
            </div>

            <a href="#" class="btn btn-success btn-lg px-4">
                Купить
            </a>
        </div>

    </div>

@endsection
