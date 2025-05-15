<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori Produk</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f0f0f0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s;
            text-align: center;
            text-decoration: none;
            color: #333;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-title {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Daftar Kategori Produk</h1>

<div class="container">
    <a href="{{ url('/category/food-beverage') }}" class="card">
        <img src="{{ asset('images/food-beverage.jpg') }}" alt="Food & Beverage">
        <div class="card-title">Food & Beverage</div>
    </a>

    <a href="{{ url('/category/beauty-health') }}" class="card">
        <img src="{{ asset('images/beauty-health.jpg') }}" alt="Beauty & Health">
        <div class="card-title">Beauty & Health</div>
    </a>

    <a href="{{ url('/category/home-care') }}" class="card">
        <img src="{{ asset('images/home-care.jpg') }}" alt="Home Care">
        <div class="card-title">Home Care</div>
    </a>

    <a href="{{ url('/category/baby-kid') }}" class="card">
        <img src="{{ asset('images/baby-kid.jpg') }}" alt="Baby & Kid">
        <div class="card-title">Baby & Kid</div>
    </a>
</div>

</body>
</html>
