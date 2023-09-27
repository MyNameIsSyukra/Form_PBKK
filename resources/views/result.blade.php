<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="row" style="margin-top: 10vh;">
        <div class="col-4 offset-4">
            <div class="container text-center">
                <h1>Hasil Submit</h1>
                <div class="mt-4">
                    <p>Data berhasil disubmit dengan detail sebagai berikut:</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama:</strong> {{ $results['nama'] }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $results['email'] }}</li>
                        <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $results['tanggalLahir'] }}</li>
                        <li class="list-group-item"><strong>Skor:</strong> {{ $results['skor'] }}</li>
                        <li class="list-group-item"><strong>Foto:</strong> <img src="{{asset('storage/images/'.$results['foto'])}}" alt="Gambar" class="img-fluid"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>