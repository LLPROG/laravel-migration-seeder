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
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .card {
        width: 18rem;
        background-color: beige
    }

    .pagination {
        display: flex
    }

    .page-item {
        list-style: none;
        margin: 0 0.3rem
    }
</style>
<body>
    <div class="container">
        @foreach ($data as $train)
            <div class="card">
                <h3>
                    Biglietto del treno
                </h3>
                <h5>
                    codice del treno: {{ $train->codice_treno }}
                </h5>
                <p>
                    stazione di partenza: {{ $train->stazione_di_partenza }}
                </p>
                <p>
                    stazione di arrivo: {{ $train->stazione_di_arrivo }}
                </p>
                <p>
                    orario di partenza: {{ $train->orario_di_partenza }}
                </p>
                <p>
                    orario di arrivo: {{ $train->orario_di_arrivo }}
                </p>
                <p>
                    price: {{ $train->price }} euro
                </p>
            </div>
        @endforeach

    </div>
    <div>
        {{ $data->links() }}
    </div>

</body>
</html>
