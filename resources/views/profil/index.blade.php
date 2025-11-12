<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Saya</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h1>Profil Saya</h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Nama:</strong>
                                <p class="mb-0">{{ $profil->nama_lengkap }}</p>
                            </li>
                            <li class="list-group-item">
                                <strong>Bio:</strong>
                                <p class="mb-0">{{ $profil->bio }}</p>
                            </li>
                            <li class="list-group-item">
                                <strong>Email:</strong>
                                <p class="mb-0">{{ $profil->email }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>