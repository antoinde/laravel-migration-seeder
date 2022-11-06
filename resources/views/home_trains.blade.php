<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Trains</h1>
        @foreach ($trains as $train)
        <div>
        <h5>Codice treno:</h5>
        <p>{{ $train['codice_treno'] }}</p>
        <h5>Data di partenza:</h5>
        <p>{{ $train['data_partenza'] }}</p>
        </div>
        @endforeach
</body>
</html>