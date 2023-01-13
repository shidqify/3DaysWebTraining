<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    
    </head>
    <body class="antialiased">
        <!-- <table border=2>
            <tr>
                <td>Title</td>
                <td>Author</td>
                <td>Content</td>
                <td>Update</td>
                <td>Delete</td>
            </tr> -->

            @foreach ($listartikel as $item)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->author }}</h6>
                    <p class="card-text">{{ $item->content }}</p>
                </div>
            </div>
            <!-- <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->content }}</td>
                <td><a href="/updateArtikel/{{ $item->id }}">Update</a></td>
                <td><a href="/deleteArtikel/{{ $item->id }}">Delete</a></td>
            </tr> -->
            @endforeach
        </table>

        
    </body>
</html>
