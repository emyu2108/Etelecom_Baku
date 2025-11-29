@extends("shablon")

@section("new_title", "Телефоны")

@section("new_content")

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Телефоны</h1>
        <a href="{{ route('phones.create') }}" class="btn btn-primary">Добавить телефон</a>
    </div>

    <table class="table table-dark table-striped table-bordered align-middle">
        <thead>
        <tr>
            <th>ID</th>
            <th>Фото</th>
            <th>Название</th>
            <th>Slug</th>
            <th>Категория</th>
            <th>Цена</th>
            <th>Активен</th>
            <th>Действия</th>
        </tr>
        </thead>

        <tbody>
        @forelse($phones as $phone)
            <tr>
                <td>{{ $phone->id }}</td>

                <td>
                    @if($phone->image)
                        <img src="{{ asset('storage/' . $phone->image) }}" width="70" class="rounded">
                    @else
                        <span class="text-muted">нет фото</span>
                    @endif
                </td>

                <td>{{ $phone->title }}</td>
                <td>{{ $phone->slug }}</td>
                <td>{{ $phone->category->title ?? '—' }}</td>
                <td>{{ $phone->price }} ₼</td>
                <td>{{ $phone->is_active ? 'Да' : 'Нет' }}</td>

                <td class="d-flex gap-2">
                    <a href="{{ route('phones.edit', $phone->id) }}" class="btn btn-warning btn-sm">
                        Редактировать
                    </a>

                    <form action="{{ route('phones.destroy', $phone->id) }}"
                          method="post"
                          onsubmit="return confirm('Удалить телефон?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </td>
            </tr>

        @empty
            <tr>
                <td colspan="8" class="text-center text-muted">Телефонов пока нет</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
