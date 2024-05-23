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

    <div>Treni in partenza del {{ date('Y-m-d') }} </div>

    @foreach ($trains as $train)
        <ul>
            <li> Azienda:{{ $train->azienda }}</li>
            <li> Stazione di partenza:{{ $train->stazione_di_partenza }}</li>
            <li> Orario di Partenza:{{ $train->orario_di_partenza }}</li>
            <li> Stazione di arrivo: {{ $train->stazione_di_arrivo }}</li>
            <li> Orario di arrivo: {{ $train->orario_di_arrivo }}</li>
            <li> Codice Treno: {{ $train->Codice_Treno }}</li>
            <li> Numero Carrozze: {{ $train->Numero_carrozze }}</li>
            <li>
                @if ($train->In_orario == 1)
                    In orario
                @elseif($train->Cancellato == 1)
                    Treno Cancellato  
                @endif
            </li>
            <li>Data: {{ $train->data }}</li>
        </ul>
    @endforeach

</body>

</html>

