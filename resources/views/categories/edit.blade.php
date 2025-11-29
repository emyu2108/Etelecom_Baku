@extends("shablon")

@section("new_title", "Редактировать категорию")

@section("new_content")

    <h1 class="mb-4">Редактировать категорию</h1>

    <x-errors></x-errors>

    <form action="{{ route('categories.update', $category->id) }}" method="post" class="bg-dark p-4 rounded border border-secondary">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Название категории</label>
            <input type="text" name="title" value="{{ $category->title }}" class="form-control bg-dark text-white border-secondary" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_active" {{ $category->is_active ? 'checked' : '' }}>
            <label class="form-check-label">Активна</label>
        </div>

        <button class="btn btn-warning">Обновить</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Назад</a>
    </form>

@endsection
