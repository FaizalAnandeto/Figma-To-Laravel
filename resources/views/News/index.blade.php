<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <style>
        h1{
           font-family: Arial, Helvetica, sans-serif;
        }

        .isnews {
            display: flex;
        }

        .isnews>Img{
            width: 10rem;
            height: auto;
        }

        .isi{
            margin-left: 2rem;
        }
    </style>
</head>
<body>
    <center>
    <h1>News Terkini</h1>
    </center>
    @foreach ($news as $row)
    <div class="isnews">
        <img src="storage\{{ $row->pictures }}" alt="">
        <div class="isi">
        <h2>{{ $row->title }}</h2>
        <p>{{ $row->content }}</p>
        </div>
    </div>
    @endforeach
</body>
</html>