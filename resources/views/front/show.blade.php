@extends("shablon")

@section("new_title", $phone->title)

@section("new_content")

    <div class="row">

        <div class="col-md-5">
            @if($phone->image)
                <img src="{{ asset('storage/' . $phone->image) }}"
                     class="img-fluid rounded border border-secondary shadow-sm"
                     alt="{{ $phone->title }}">
            @else
                <div class="bg-secondary" style="width:100%;height:350px;border-radius:8px;"></div>
            @endif
        </div>

        <div class="col-md-7">
            <h1>{{ $phone->title }}</h1>

            <h3 class="text-success mb-3">{{ $phone->price }} ₼</h3>

            <p>
                <span class="text-secondary">Категория:</span>
                <strong>{{ $phone->category->title ?? '—' }}</strong>
            </p>

            <div class="mt-4 mb-4">
                <a href="#" class="btn btn-lg btn-primary">
                    Купить
                </a>
                <a href="/" class="btn btn-lg btn-outline-light ms-2">
                    Назад
                </a>
            </div>

            <div class="mt-4">
                <h4>Описание</h4>
                <p class="text-muted">
                    {{ $phone->description ?: 'Описание не добавлено.' }}
                </p>
            </div>
        </div>

    </div>

@endsection
