<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title> <!-- Fixed title access -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>Title: {{ $title }} </h2>
    <h2>Date: {{ $date }} </h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Publication Title</th>
                <th>Date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication)
            <tr>
                <td style="width:500px;" >{{ $publication->publication_title }}</td>
                <td style="width:100px;">{{ $publication->publication_date }}</td>
                <td style="width:100px;">{{ $publication->publication_types }}</td>
            </tr>
            <tr>
                <hr>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
