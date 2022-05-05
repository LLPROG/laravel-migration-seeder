<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
        display: flex
    }
</style>
<body>
    <div class="container">
        @foreach ($data as $train)
            <ul>
                <li>
                    Stazione di Partenza: {{ $train->stazione_di_partenza }}
                </li>

                <li>
                    Stazione di Arrivo: {{ $train->stazione_di_arrivo }}
                </li>

                <li>
                    orario di Partenza: {{ $train->orario_di_partenza }}
                </li>

                <li>
                    orario di Arrivo: {{ $train->orario_di_arrivo }}
                </li>

                <li>
                    Codece treno: {{ $train->codice_treno }}
                </li>

                <li>
                    Numero di carrozze: {{ $train->numero_carrozze }}
                </li>

                <li>
                    In orario: @if ($train->in_orario == 1) si @else no @endif
                </li>

                <li>
                    Cancellato: @if ($train->cancellato == 1) si @else no @endif
                </li>

                <li>
                    Azienda: {{ $train->azienda }}
                </li>
            </ul>
        @endforeach
    </div>
</body>
</html>
