<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Trains</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    {{-- bootstrap --}}
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>

<style>
    body {
        font-family: 'Share Tech Mono', monospace;
    }

    .table td {
        color: #ffc107;
    }
</style>

<body class="bg-secondary">
    <header class="bg-dark text-warning py-3 mb-5">
        <div class="container">
            <h1>Tabellone partenze treni</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr class="table-black">
                        <th scope="col">Azienda</th>
                        <th scope="col">Codice treno</th>
                        <th scope="col">Vagoni</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriages }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>
                            @if ($train->on_time === 1)
                            Sì
                            @elseif($train->on_time === 0)
                            In ritardo
                            @endif
                        </td>
                        <td>
                            @if ($train->cancelled === 1)
                            Cancellato
                            @else
                            -
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>