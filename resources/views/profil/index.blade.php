<!DOCTYPE html>
<html>
<head>
    <title>Halaman Profil</title>
</head>
<body>
    <h1>Profil Saya</h1>
    <hr>
    
    <p><strong>Nama:</strong> {{ $profil['nama_lengkap'] }}</p>
    <p><strong>Bio:</strong> {{ $profil['bio'] }}</p>
    <p><strong>Email:</strong> {{ $profil['email'] }}</p>

</body>
</html>