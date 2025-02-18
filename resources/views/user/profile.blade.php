<!DOCTYPE html>
<html lang="en">
<head>
    @include('component.head')  
    <title>User Profile</title>
    <style>
        .content {
            margin: auto;
            width: 65%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    @include('component.header')
    <div class="content">
        <h1>Profil Pengguna</h1>
        <p>ID: {{ $id }}</p>
        <p>Nama: {{ $name }}</p>
    </div>
</body>
</html>
