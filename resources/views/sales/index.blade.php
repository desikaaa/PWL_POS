<!DOCTYPE html>
<html>
<head>
    <title>Halaman Penjualan (POS)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background: #f5f5f5;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            max-width: 500px;
            margin: 0 auto 20px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        select, input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            width: 100%;
            background-color: #4CAF50;
            border: none;
            padding: 12px;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .success {
            max-width: 500px;
            margin: 0 auto 20px;
            background: #d4edda;
            color: #155724;
            border-radius: 8px;
            padding: 15px;
            border: 1px solid #c3e6cb;
            text-align: center;
        }
        .error {
            max-width: 500px;
            margin: 0 auto 20px;
            background: #f8d7da;
            color: #721c24;
            border-radius: 8px;
            padding: 15px;
            border: 1px solid #f5c6cb;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Halaman Penjualan (POS)</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="error">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <label for="product_id">Pilih Produk</label>
        <select name="product_id" id="product_id" required>
            <option value="">-- Pilih Produk --</option>
            @foreach ($products as $product)
                <option value="{{ $product['id'] }}">{{ $product['name'] }} - Rp {{ number_format($product['price'], 0, ',', '.') }}</option>
            @endforeach
        </select>

        <label for="quantity">Jumlah</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1" required>

        <button type="submit">Simpan Transaksi</button>
    </form>

</body>
</html>
