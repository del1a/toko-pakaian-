<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko Pakaian Azura</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #add8e6;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: #add8e6;
    }
    .navbar-brand {
      font-weight: bold;
      color: white;
    }
    .card {
      background-color: #EOF7FA;
      border: none;
      border-radius: 20px;
    }
    .card-title {
      font-weight: bold;
      color: #add8e6;
    }
    .btn-softpink {
      background-color: #add8e6;
      color: white;
      border: none;
    }
    .btn-softpink:hover {
      background-color: #add8e6;
    }
    .btn-outline-dark:hover {
      background-color: #add8e6;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar shadow-sm mb-4">
    <div class="container d-flex justify-content-between align-items-center">
      <span class="navbar-brand">Toko Pakaian Azura</span>
      <div>
        <a href="index.html" class="text-white text-decoration-none me-3">Beranda</a>
        <a href="produk.html" class="text-white text-decoration-none">Produk</a>
      </div>
    </div>
  </nav>

  
  <!-- Produk -->
  <div class="container">
    <h2 class="text-center text-white fw-bold mb-4">Baju Pria</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg p-3">
         <div id="carouselProduk" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="j1.jpg" class="d-block w-100" alt="Jaket Pria 1">
    </div>
    <div class="carousel-item">
      <img src="j2.jpg" class="d-block w-100" alt="Jaket Pria 2">
    </div>
    <div class="carousel-item">
      <img src="j3.jpg" class="d-block w-100" alt="Jaket Pria 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduk" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselProduk" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          <div class="card-body">
            <h5 class="card-title">Baju Pria</h5>

            <p class="card-text text-dark">Hoodie pria modern dengan bahan fleece premium yang tebal, hangat, namun tetap ringan dan nyaman digunakan.Kaos pria berbahan katun combed 100% yang lembut, adem, dan nyaman dipakai seharian
                          </p>
            <h5 class="text-blue fw-bold">Rp 150.000</h5>
            <div class="d-flex gap-2 mt-3">
              <a href="proses.php" class="btn btn-softpink flex-fill"> Beli Produk</a>
              <a href="produk.html" class="btn btn-outline-dark flex-fill">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>