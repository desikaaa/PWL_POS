<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: white;
            width: 350px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            text-align: center;
        }

        .card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #4e9af1;
            margin-bottom: 20px;
        }

        .card h1 {
            font-size: 24px;
            margin: 10px 0 5px;
            color: #333;
        }

        .card p {
            font-size: 16px;
            color: #666;
            margin: 5px 0;
        }

        .card .id {
            font-size: 14px;
            color: #999;
            margin-top: 10px;
        }

        .card:hover {
            transform: scale(1.02);
            transition: 0.3s ease-in-out;
        }
    </style>
</head>
<body>

<div class="card">
    <img src="https://ui-avatars.com/api/?name={{ urlencode($name) }}&background=4e9af1&color=fff" alt="User Avatar">
    <h1>{{ $name }}</h1>
    <p>Pengguna Terdaftar</p>
    <div class="id">ID Pengguna: {{ $id }}</div>
</div>

</body>
</html>
