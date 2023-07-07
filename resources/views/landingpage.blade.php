<!doctype html>
<html data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAS - Welcome to Gas.id</title>
    @vite('resources/css/app.css')


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'montserrat'
        }
    </style>
</head>

<body>

    @if ($navbar)
        @include('partials.navbar', [
            'navdata' => $navbar,
        ])
    @endif
    @foreach ($data as $item)
        @switch($item->name_type)
            @case(1)
                @include('partials.hero', [
                    'data' => $item,
                ])
            @break

            @case(2)
                @include('partials.twoRowParagraph', [
                    'data' => $item,
                ])
            @break

            @case(3)
                @include('partials.fiveColCardSimple', [
                    'data' => $item,
                ])
            @break

            @case(4)
                @include('partials.fourColCardImage', [
                    'data' => $item,
                ])
            @break

            @case(5)
                @include('partials.feature', [
                    'data' => $item,
                ])
            @break

            @case(6)
                @include('partials.twoColImageText', [
                    'data' => $item,
                ])
            @break

            @case(7)
                @include('partials.twoColTextImage', [
                    'data' => $item,
                ])
            @break

            @case(8)
                @include('partials.careerTwoCol', [
                    'data' => $item,
                ])
            @break
        @endswitch
    @endforeach

    @if ($footer)
        @include('partials.footer', [
            'footer' => $footer,
        ])
    @endif
</body>

</html>
