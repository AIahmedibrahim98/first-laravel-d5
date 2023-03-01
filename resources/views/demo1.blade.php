<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <main class="container">
        @foreach (range(1, 10) as $number)
            {{--     @if ($loop->first)
        <h1>Hello World ! First</h1>
    @endif
    @if ($loop->last)
        <h1>Hello World ! Last !</h1>
    @endif --}}
            <p>{{ $loop->iteration }} - Ahmed --- {{ $loop->remaining }}</p>
            {{-- <p>{{ $loop->index }} - Ahmed</p> --}}
        @endforeach

        @php($active = false)
        {{-- <div class="{{ $active ? 'bg-success' : 'bg-danger'}}">
            <h1>Lec 5</h1>
            <h1>Laravel Course</h1>
            <h1>Ahmed Ibrahim</h1>
        </div> --}}
        {{-- <div class="@if ($active) bg-success @else bg-danger @endif">
            <h1>Lec 5</h1>
            <h1>Laravel Course</h1>
            <h1>Ahmed Ibrahim</h1>
        </div> --}}

        <div @class(['text-primary', 'bg-success' => $active ,'bg-danger' => !$active])>
            <h1>Lec 5</h1>
            <h1>Laravel Course</h1>
            <h1>Ahmed Ibrahim</h1>
        </div>
        @once

        @endonce
    </main>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
