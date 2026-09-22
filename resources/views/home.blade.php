<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
<head>
    <title>Halaman Utama Perusahaan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        header {
            background-color: #4a6fa5;
            color: white;
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
            /* Tidak pakai gradient atau bayangan yang terlalu berlebihan */
        }
        nav {
            background-color: #e9ecef;
            padding: 10px;
            margin-bottom: 20px;
        }
        nav a {
            color: #4a6fa5;
            text-decoration: none;
            margin: 0 10px;
            padding: 5px;
        }
        nav a:hover {
            text-decoration: underline; /* Hanya garis bawah, tidak ada perubahan besar */
        }
        .content {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            max-width: 800px;
            margin: 0 auto;
        }
        h2 {
            color: #4a6fa5;
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        p {
            margin-bottom: 10px;
        }
        footer {
            background-color: #4a6fa5;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>PT. Unpam Teknologi Tangsel</h1>
        <p> Solusi Teknologi untuk warga tangerang</p>
    </header>

    <nav>
        <a href="/home">Beranda</a>
        <a href="#tentang">Tentang Kami</a>
        <a href="#layanan">Layanan</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <div class="content">
        <section id="tentang">
            <h2>Tentang Kami</h2>
            <p>Kami adalah perusahaan yang berdiri sejak tahun 2020, bergerak di bidang pengembangan perangkat lunak dan jasa teknologi. Awalnya hanya beranggotakan 3 orang, sekarang kami sudah memiliki tim yang profesional dan berpengalaman.</p>
            <p>Visi kami: Menjadi perusahaan teknologi yang memberikan dampak positif bagi kemajuan masyarakat tangerang selatan.</p>
            <p>Misi kami: Menyediakan produk dan jasa teknologi yang berkualitas dan terjangkau.</p>
        </section>

        <section id="layanan" style="margin-top: 20px;">
            <h2>Layanan Kami</h2>
            <ul style="margin-left: 20px; margin-bottom: 10px;">
                <li>Pengembangan Website</li>
                <li>Pengembangan Aplikasi Mobile</li>
                <li>Jasa Konsultasi Teknologi</li>
                <li>Manajemen Jaringan</li>
            </ul>
        </section>

        <section id="kontak" style="margin-top: 20px;">
            <h2>Kontak Kami</h2>
            <p>Alamat: Jalan pabuaran viktor no 10 ,tangerang selatan</p>
            <p>Email: unpamteknologi@gmail.com</p>
            <p>Telepon: 0888-5555-6666</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2026 PT. Unpam Teknologi Tangsel.</p>
    </footer>
</body>
</html>