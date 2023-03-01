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

<body class='container'>
    <main>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">
                    {{-- {{ "<script>alert('test');</script>" }}
                    {!! "<script>alert('test');</script>" !!} --}}

                    {{--
                        sadjsahdjksahdjkshajkdhsjkadh
                        --}}
                    @if (1 == 2)
                        <h1>Number Is One</h1>
                    @else
                        <h1>Number Is Not One</h1>
                    @endif
                    @if (1 == 2)
                        <h1>Number Is One</h1>
                    @elseif (2 == 2)
                        <h1>Number Is two</h1>
                    @else
                        <h1>Number Is Not One</h1>
                    @endif
                    @php($number = 3)
                    @php
                        
                    @endphp
                    @switch($number)
                        @case(1)
                        <h1 class="text-primary">Number Is One</h1>
                    @break

                    @case(2)
                        <h1 class="text-primary">Number Is TWo</h1>
                    @break

                    @default
                        <h1 class="text-danger">Invalid Number</h1>
                @endswitch

                @while (false)
                    test while
                @endwhile
                @for ($i = 0; $i < 10; $i++)
                    <h3>{{ $i }}</h3>
                @endfor
                <hr>

                @php($numbers = [1, 2, 3, 4, 5])
                {{-- @php($numbers = []) --}}
                {{--   @foreach ($numbers as $num)
                    <h4>{{ $num }}</h4>
                @endforeach --}}

                @forelse ($numbers as $num)
                    {{-- @break($num == 3) --}}
                    @continue($num == 3)
                    <h4>{{ $num }}</h4>
                @empty
                    <h3 class="text-danger">Numbers Not Found</h3>
                @endforelse

                {{-- @if (1 == 1)
                    <h1>Number Is One</h1>
                @else
                    <h1>Number Is Not One</h1>
                @endif --}}
                @unless(1 == 2)
                    <h1>Number Is Not One</h1>
                @endunless
                <h1 class="text-success">{{ date('Y-m-d H:i:s a') }}</h1>
                <h1 class="text-primary">{{ 1 == 1 ? date('Y-m-d H:i:s a') : 'date not found' }}</h1>
                <h1 class="text-danger">{{ 1 == 2 ?? date('Y-m-d H:i:s a') }}</h1>
                </p>
            </div>
        </div>
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
