@extends("shablon")

@section("new_title", "Категории")

@section("new_content")

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Категории</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Добавить категорию</a>
    </div>

    <table class="table table-dark table-striped table-bordered align-middle">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Slug</th>
            <th>Активна</th>
            <th>Действия</th>
        </tr>
        </thead>

        <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->is_active ? 'Да' : 'Нет' }}</td>

                <td class="d-flex gap-2">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                        Редактировать
                    </a>

                    <form action="{{ route('categories.destroy', $category->id) }}"
                          method="post"
                          onsubmit="return confirm('Удалить категорию?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Нет категорий</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
