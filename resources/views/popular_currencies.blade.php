<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Popular Currencies</title>
</head>
<body>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            price
        </th>
        <th>
            image
        </th>
        <th>
            daily change
        </th>
    </tr>
    @foreach($currencies as $currency)
         <tr>
             <td>{{ $currency['id'] }}</td>
             <td>{{ $currency['name'] }}</td>
             <td>{{ $currency['price'] }}</td>
             <td><img src="{{ $currency['img'] }}"></td>
             <td>{{ $currency['daily_change'] }}</td>
         </tr>
    @endforeach
</table>
</body>
</html>
