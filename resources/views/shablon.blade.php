<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("new_title")</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark text-white">
    <a href="/" class="d-flex align-items-center text-decoration-none text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
             viewBox="0 0 24 24" fill="#0d6efd">
            <path d="M3 6h18v2H3zm0 5h12v2H3zm0 5h18v2H3z"/>
        </svg>

        <span class="fs-4">Etelecom_Baku</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">Про Нас</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/review">Отзывы</a>
    </nav>
</div>

<div class="container">
    @yield("new_content")
</div>


</body>
</html>
