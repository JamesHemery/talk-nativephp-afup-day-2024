@props([
    'header' => true,
    'transparent' => false,
])

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFUP Day 2024 - Poitiers</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body @class(['bg-slate-50' => !$transparent])>
@if ($header !== false)
    <header class="flex px-6 justify-center items-center py-6 bg-slate-200">
        <img src="{{asset('img/logo.png')}}" alt="Logo AFUP Day" class="h-[60px] w-auto">
    </header>
@endif
{{$slot}}
@vite('resources/js/app.js')
@livewireScripts
</body>
</html>
