@extends("shablon")

@section("new_title", "Создать телефон")

@section("new_content")

    <h1 class="mb-4">Создать телефон</h1>

    <form action="{{ route('phones.store') }}"
          method="post"
          enctype="multipart/form-data"
          class="bg-dark p-4 rounded border border-secondary">

        @csrf

        <div class="mb-3">
            <label class="form-label">Название</label>
            <input type="text" name="title"
                   class="form-control bg-dark text-white border-secondary" required>
        </div>


        <div class="mb-3">
            <label class="form-label">Категория</label>
            <select name="category_id"
                    class="form-select bg-dark text-white border-secondary"
                    required>
                <option value="">Выберите...</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Бренд</label>
            <input type="text" name="brand"
                   class="form-control bg-dark text-white border-secondary">
        </div>

        <div class="mb-3">
            <label class="form-label">Цена</label>
            <input type="number" name="price"
                   class="form-control bg-dark text-white border-secondary" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Описание</label>
            <textarea name="description" rows="4"
                      class="form-control bg-dark text-white border-secondary"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Фото</label>
            <input type="file" name="image"
                   class="form-control bg-dark text-white border-secondary">
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_active" checked>
            <label class="form-check-label">Активен</label>
        </div>

        <button class="btn btn-success">Создать</button>
        <a href="{{ route('phones.index') }}" class="btn btn-secondary">Назад</a>
    </form>

@endsection
