<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped"> 
    <tr>
        <th>Code</th>
        <th>Nama</th>
        <th>Service</th>
        <th>Detail</th>
        <th>Tarif</th>
        <th>ETD</th>
    </tr>        
    @foreach($cost as $var)
    <tr>
        <td>{{$code}}</td>
        <td>{{$name}}</td>
        <td>{{$var["service"]}}</td>
        <td>{{$var["description"]}}</td>
        <td>{{number_format($var["cost"][0]["value"])}}</td>
        <td>{{$var["cost"][0]["etd"]}}</td>
    </tr>
    @endforeach   
    </table>
</body>
</html>