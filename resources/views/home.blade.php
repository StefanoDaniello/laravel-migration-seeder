<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div>Treni in partenza oggi</div>

    @foreach ($trains as $train)
        <ul>
            <li>{{ $train->azienda }}</li>
            <li>{{ $train->stazione_di_partenza }}</li>
            <li>{{ $train->orario_di_partenza }}</li>
            <li>{{ $train->stazione_di_arrivo }}</li>
            <li>{{ $train->orario_di_arrivo }}</li>
            <li>{{ $train->Codice_Treno }}</li>
            <li>{{ $train->Numero_carrozze }}</li>
            <li>{{ $train->In_orario }}</li>
            <li>{{ $train->Cancellato }}</li>
            <li>{{ $train->data }}</li>
        </ul>
    @endforeach

</body>

</html>