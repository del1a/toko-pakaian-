<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pembelian Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
    body {
        background-color: #d0f0ff; /* Biru Muda */
        font-family: 'Segoe UI', sans-serif;
    }

    .card-pembelian {
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(255, 182, 193, 0.3); /* Tetap pink soft */
        padding: 30px;
    }

    .navbar {
        background-color: #a8d8f0; /* Biru Muda */
    }

    .navbar-brand {
        font-weight: bold;
        color: white;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        margin-left: 1rem;
    }

    .btn-pink {
        background-color: #a8d8f0; /* Biru Muda */
        color: white;
        border: none;
    }

    .btn-pink:hover {
        background-color: #7fcdea; /* Biru Muda lebih tua saat hover */
    }

    h3 {
        color: #7fcdea; /* Biru Muda */
        font-weight: bold;
    }

    label {
        font-weight: 500;
    }

    .form-control {
        border-radius: 10px;
    }
</style>
</head>
<body>
<!-- Navbar -->
  <nav class="navbar shadow-sm mb-3">
    <div class="container d-flex justify-content-between align-items-center">
      <span class="navbar-brand">Toko Pakaian Azura</span>
      <div>
        <a href="index.html">Beranda</a>
        <a href="produk.html">Produk</a>
        <a href="proses.php">Beli Produk</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card-pembelian">
          <h3 class="text-center mb-4">Form Pembelian Pakaian</h3>
          <form>
            <div class="mb-3">
              <label for="namaProduk" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="namaProduk" placeholder="Nama produk">
            </div>

            <div class="mb-3">
              <label for="ukuran" class="form-label">Ukuran</label>
              <select class="form-control" id="ukuran">
                <option>Pilih Ukuran</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="jumlah" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" placeholder="0">
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat Pengiriman</label>
              <textarea class="form-control" id="alamat" rows="3" placeholder="Tulis alamat lengkap..."></textarea>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-pink">Beli Sekarang</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>