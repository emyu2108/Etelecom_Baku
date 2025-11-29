@extends("shablon")

@section("new_title", "Редактировать телефон")

@section("new_content")

    <h1 class="mb-4">Редактировать телефон</h1>

    <form action="{{ route('phones.update', $phone->id) }}"
          method="post" enctype="multipart/form-data"
          class="bg-dark p-4 rounded border border-secondary">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Название</label>
            <input type="text" name="title" value="{{ $phone->title }}"
                   class="form-control bg-dark text-white border-secondary" required>
        </div>


        <div class="mb-3">
            <label class="form-label">Категория</label>
            <select name="category_id"
                    class="form-select bg-dark text-white border-secondary"
                    required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ $phone->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Бренд</label>
            <input type="text" name="brand" value="{{ $phone->brand }}"
                   class="form-control bg-dark text-white border-secondary">
        </div>

        <div class="mb-3">
            <label class="form-label">Цена</label>
            <input type="number" name="price" value="{{ $phone->price }}"
                   class="form-control bg-dark text-white border-secondary" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Описание</label>
            <textarea name="description" rows="4"
                      class="form-control bg-dark text-white border-secondary">{{ $phone->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Новое фото</label>
            <input type="file" name="image"
                   class="form-control bg-dark text-white border-secondary">
        </div>

        @if($phone->image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $phone->image) }}" width="120" class="rounded">
            </div>
        @endif

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox"
                   name="is_active" {{ $phone->is_active ? 'checked' : '' }}>
            <label class="form-check-label">Активен</label>
        </div>

        <button class="btn btn-warning">Обновить</button>
        <a href="{{ route('phones.index') }}" class="btn btn-secondary">Назад</a>

    </form>

@endsection
