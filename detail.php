<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<?php
$nama = $_GET['nama'] ?? '';

// DATA PRODUK (SAMAKAN DENGAN KATALOG KAMU)
$produk = [
    "Toyota Avanza 2024" => [
        "harga" => 220000000,
        "gambar" => "Toyota Avanza 2024.jpg",
        "deskripsi" => "MPV keluarga yang nyaman, irit bahan bakar, dan cocok untuk perjalanan jauh maupun dalam kota.",
        "kategori" => "Mobil"
    ],
    "Honda Civic 2023" => [
        "harga" => 450000000,
        "gambar" => "Honda Civic 2023.jpg",
        "deskripsi" => "Sedan sporty dengan performa tinggi, desain elegan, dan fitur teknologi modern.",
        "kategori" => "Mobil"
    ],
    "Mitsubishi Pajero Sport 2024" => [
        "harga" => 600000000,
        "gambar" => "Pajero Sport.jpg",
        "deskripsi" => "SUV tangguh untuk segala medan, cocok untuk keluarga dan petualangan.",
        "kategori" => "Mobil"
    ],
    "Honda Vario 125 2023" => [
        "harga" => 22000000,
        "gambar" => "Honda Vario 125 2023.jpg",
        "deskripsi" => "Motor matic stylish, irit bahan bakar dan cocok untuk penggunaan sehari-hari.",
        "kategori" => "Motor"
    ],
    "Kawasaki Ninja ZX-6R 2023" => [
        "harga" => 350000000,
        "gambar" => "Kawasaki Ninja ZX-6R 2023.jpg",
        "deskripsi" => "Motor sport premium dengan performa tinggi dan desain agresif.",
        "kategori" => "Motor"
    ]
];

$data = $produk[$nama] ?? null;
?>

<div class="p-8 bg-gray-50">
<div class="max-w-5xl mx-auto mt-10">

<?php if($data): ?>

<div class="grid md:grid-cols-2 gap-8 bg-white p-6 rounded-2xl shadow">

    <!-- Gambar Produk -->
    <div>
        <img src="<?= $data['gambar']; ?>" 
             class="rounded-xl w-full object-cover shadow">
    </div>

    <!-- Detail Produk -->
    <div>
        <h2 class="text-3xl font-bold mb-2"><?= $nama; ?></h2>

        <p class="text-sm text-gray-500 mb-4">
            Kategori: <?= $data['kategori']; ?>
        </p>

        <p class="text-2xl text-blue-600 font-semibold mb-4">
            Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
        </p>

        <p class="text-gray-700 mb-6 leading-relaxed">
            <?= $data['deskripsi']; ?>
        </p>

        <!-- Fitur tambahan -->
        <ul class="text-gray-600 text-sm mb-6 space-y-1">
            <li>✔ Kondisi Baru</li>
            <li>✔ Garansi Resmi</li>
            <li>✔ Bisa Kredit</li>
        </ul>

        <!-- Tombol -->
        <div class="flex gap-3">
            <a href="https://wa.me/6286638781989?text=Saya%20tertarik%20dengan%20<?= urlencode($nama); ?>"
               class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg transition">
               Chat WhatsApp
            </a>

            <a href="javascript:history.back()"
               class="bg-gray-300 hover:bg-gray-400 px-5 py-2 rounded-lg transition">
               Kembali
            </a>
        </div>
    </div>

</div>

<?php else: ?>

<div class="text-center py-20">
    <h2 class="text-xl text-red-500 font-semibold">
        Produk tidak ditemukan
    </h2>
    <a href="index.php" class="text-blue-500 underline mt-3 inline-block">
        Kembali ke Beranda
    </a>
</div>

<?php endif; ?>

</div>
</div>

<?php include 'footer.php'; ?>