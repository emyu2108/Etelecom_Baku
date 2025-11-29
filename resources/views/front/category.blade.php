@extends("shablon")

@section("new_title", $category->title)

@section("new_content")

    <h1 class="mb-4">{{ $category->title }}</h1>

    <div class="row">
        @foreach($phones as $phone)
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white">
                    @if($phone->image)
                        <img src="{{ asset('storage/' . $phone->image) }}"
                             class="card-img-top" alt="">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $phone->title }}</h5>
                        <p class="card-text">{{ $phone->price }} ₼</p>
                        <a href="{{ route('phone.show', $phone->slug) }}"
                           class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
