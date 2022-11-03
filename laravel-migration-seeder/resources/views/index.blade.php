<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titolo</title>

    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="css/app.css">

    <script type="text/javascript" src="js/script.js" defer></script>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
                <th>Data inserimento</th>
                <th>Data aggiornamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($train as $item)
            <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['agency'] }}</td>
                    <td>{{ $item['departureStation'] }}</td>
                    <td>{{ $item['arrivalStation'] }}</td>
                    <td>{{ $item['departureTime'] }}</td>
                    <td>{{ $item['arrivalTime'] }}</td>
                    <td>{{ $item['trainCode'] }}</td>
                    <td>{{ $item['numberOfCarriages'] }}</td>
                    <td>{{ $item['inTime'] }}</td>
                    <td>{{ $item['deleted'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['updated_at'] }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</body>

</html>
