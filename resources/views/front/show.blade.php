@extends('shablon')

@section('new_title', $phone->title)

@section('new_content')

    <div class="row g-4">

        <div class="col-md-5">
            @if($phone->image)
                <img src="{{ asset('storage/'.$phone->image) }}"
                     class="img-fluid rounded border border-secondary">
            @else
                <div class="bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center"
                     style="height:300px;">
                    <span class="text-white-50">Нет изображения</span>
                </div>
            @endif
        </div>

        <div class="col-md-7">
            <h1 class="fw-bold">{{ $phone->title }}</h1>

            <h3 class="text-primary fw-bold mb-3">
                {{ number_format($phone->price) }} ₼
            </h3>

            <p class="text-white-50 mb-4">{{ $phone->description }}</p>

            <a class="btn btn-success btn-lg" href="#">
                Купить
            </a>
        </div>

    </div>

@endsection
