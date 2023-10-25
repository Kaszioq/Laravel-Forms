<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownik</title>
</head>
<body>
    <h3>Użytkownik</h3>
    {{--{{print_r($user)}}
    {{print_r($user['hobby'])}}
    {{print_r($user['hobby'][0])}}--}}
    Imię i nazwisko: {{$user['firstName']}} {{$user['lastName']}} <br>
    Miasto: {{$user['city']}} <br>
    Hobby:
    <ul>
        @foreach($user['hobby'] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>    
    </body> 
</html>