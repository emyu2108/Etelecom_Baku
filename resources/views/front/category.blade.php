@extends('shablon')

@section('new_title', $category->title)

@section('new_content')

    <h1 class="fw-bold mb-4">{{ $category->title }}</h1>

    <div class="row g-4">

        @forelse($phones as $phone)
            <div class="col-md-3">
                <div class="card bg-dark text-white border-secondary h-100">

                    @if($phone->image)
                        <img src="{{ asset('storage/'.$phone->image) }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center"
                             style="height:200px;">
                            <span class="text-white-50">Нет изображения</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <h5>{{ $phone->title }}</h5>
                        <p class="text-white-50">{{ number_format($phone->price) }} ₼</p>

                        <a href="{{ route('phone.show', $phone->slug) }}"
                           class="btn btn-primary btn-sm w-100">
                            Подробнее
                        </a>
                    </div>

                </div>
            </div>
        @empty

            <div class="col-12">
                <p class="text-white-50">В этой категории пока нет товаров.</p>
            </div>

        @endforelse

    </div>

    <div class="mt-4">
        {{ $phones->links('pagination::bootstrap-5') }}
    </div>

@endsection

