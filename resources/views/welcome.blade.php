<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
    <body>
        <div class="containter">
            <div class="container">
                @foreach($movies as $key)
                    <div class="card">
                        <div>
                            <h2>{{$key['title']}}</h2>
                            <p>Nationality: '{{$key['nationality']}}'</p>
                            <p>{{$key['date']}}</p>
                            <div class="vote">
                                @for ($i = 0; $i < 5; $i++)
                                {{-- @if($i < floor($key['vote']) / 2)
                                <i class="bi bi-star-fill"></i>
                                @else
                                
                                @endif --}}
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
