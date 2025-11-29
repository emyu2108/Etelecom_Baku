@extends("shablon")

@section("new_title", "Создать категорию")

@section("new_content")

    <h1 class="mb-4">Создать категорию</h1>
    <x-errors></x-errors>
    <form action="{{ route('categories.store') }}" method="post"
          class="bg-dark p-4 rounded border border-secondary">

        @csrf

        <div class="mb-3">
            <label class="form-label">Название категории</label>
            <input type="text"
                   name="title"
                   value="{{ old('title') }}"
                   class="form-control bg-dark text-white border-secondary @error('title') is-invalid @enderror"
                   required>

            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input"
                   type="checkbox"
                   name="is_active"
                   value="1"
                {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label">Активна</label>
        </div>

        <button class="btn btn-success">Сохранить</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Назад</a>
    </form>

@endsection
