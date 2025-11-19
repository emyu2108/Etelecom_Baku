@extends("shablon")

@section("new_title")Отзывы@endsection

@section("new_content")
    <form method="post" action="/review/check">
        @csrf

        <h1>Форма добавления отзыва</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input type="email"
               name="email"
               id="email"
               placeholder="Введите email"
               class="form-control mb-3">

        <input type="text"
               name="subject"
               id="subject"
               placeholder="Введите отзыв"
               class="form-control mb-3">

        <textarea name="message"
                  id="message"
                  placeholder="Введите сообщение"
                  class="form-control mb-3"></textarea>

        <button type="submit" class="btn btn-success mt-2">Отправить</button>
    </form>
@endsection
