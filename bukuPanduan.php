<?php
require_once('includes/init.php');
$page = "Buku Panduan";
require_once('template/header.php');
?>

<!-- Tambahkan CSS untuk mengatur warna teks putih dan mengatur full layar -->
<style>
    /* Warna teks putih */
    .text-white {
        color: #FFFFFF !important;
    }

    /* Fullscreen card */
    .card-body {
        width: 100%;
        height: 100vh; /* Mengisi tinggi layar penuh */
        background-color: #e67e22; /* Latar belakang gelap untuk kontras dengan teks putih */
        display: flex;
        justify-content: center;
        align-items: flex-start;
        text-align: left;
        padding: 40px;
        box-sizing: border-box;
        overflow-y: auto;
    }

    /* Atur gaya teks di dalam area SAW */
    .card-body h4,
    .card-body p {
        font-size: 18px;
        line-height: 1.8;
    }

    /* Responsif untuk tampilan kecil */
    @media (max-width: 768px) {
        .card-body h4,
        .card-body p {
            font-size: 16px;
        }
    }

    /* Panduan pengguna tambahan */
    .guide-section {
        margin-bottom: 20px;
    }

    .guide-section ul {
        list-style-type: disc;
        padding-left: 20px;
    }
</style>

<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panduan Penggunaan SAW</h1>
    </div>

    <!-- Fullscreen Card -->
    
        <div class="card-body">
            <div class="row no-gutters align-items-start">
                <div class="col mr-2">
                    <!-- Teks dengan panduan SAW -->
                    <h4 class="text-white">Apa itu SAW?</h4>
                    <p class="text-white">
                        SAW (Simple Additive Weighting) adalah metode yang digunakan untuk membantu pengambilan keputusan dengan melakukan perhitungan pada sejumlah alternatif berdasarkan berbagai kriteria yang telah ditentukan.
                        Metode SAW bekerja dengan memberikan bobot pada setiap kriteria dan melakukan normalisasi terhadap nilai alternatif berdasarkan bobot tersebut.
                    </p>

                    <div class="guide-section text-white">
                        <h3>Panduan Penggunaan Web SPK Metode SAW:</h3>
                        <p>Berikut adalah panduan penggunaan sistem SPK dengan metode SAW:</p>
                        <ul>    
                            <li><strong>1. Masukkan data kriteria:</strong> Tentukan kriteria yang digunakan dalam analisis dengan bobot yang relevan sesuai kebutuhan Anda. Serta tentukan Tipe Kriteria dan Cara Penilaiannya.Pastikan total dari keseluruhan bobot kriteria 100% atau 1.
                            <ul><strong>Tipe Kriteria :</strong>
                <li><strong>Cost:</strong> Kriteria yang semakin kecil nilainya, semakin diutamakan dalam perhitungan SAW. Contoh: Biaya, waktu, atau jumlah kerugian.</li>
                <li><strong>Benefit:</strong> Kriteria yang semakin besar nilainya, semakin diutamakan dalam perhitungan SAW. Contoh: Keuntungan, keuntungan penjualan, atau nilai performa.</li>
            </ul>
            <ul><strong>Cara Penilaian :</strong>
                <li><strong>Input Langsung:</strong> Anda bisa memasukkan nilai penilaian secara langsung untuk setiap alternatif berdasarkan kriteria yang ada.</li>
                <li><strong>Pilihan Sub-Kriteria:</strong> Anda memilih nilai berdasarkan pilihan sub-kriteria yang sudah ditentukan sebelumnya. Ini akan mempermudah proses jika Anda sudah memiliki standar nilai yang telah ditentukan.</li>
            </ul>
        </li>
                            <li><strong>2. Masukkan data sub-kriteria:</strong> Jika cara penilaian merupakan pilihan sub-kriteria maka tentukan sub-kriteria yang digunakan dalam analisis. Sub Kriteria maksimal 5 dengan nilai 1-5</li>
                            <li><strong>3. Masukkan data alternatif:</strong> Tambahkan data alternatif yang akan dibandingkan berdasarkan kriteria yang telah dibuat sebelumnya.</li>
                            <li><strong>4. Lakukan perhitungan SAW:</strong> Gunakan fitur hitung untuk melakukan perhitungan berdasarkan metode SAW dengan data yang telah diinput.</li>
                            <li><strong>5. Lihat hasil evaluasi:</strong> Sistem akan menampilkan hasil evaluasi berdasarkan perhitungan yang telah dilakukan.</li>
                            <li><strong>6. Unduh hasil analisis:</strong> Jika diperlukan, unduh laporan hasil analisis untuk dokumentasi dan kebutuhan lainnya.</li>
                        </ul>
                    </div>

                    <div class="guide-section text-white">
                        <h4>Catatan:</h4>
                        <ul>
                        <li>SAW membantu dalam pengambilan keputusan berdasarkan perhitungan objektif.</li>
                        <li>Perhatikan bahwa data yang diinputkan mempengaruhi akurasi hasil yang dihitung.</li>
                        <li>Jika ada kendala, hubungi tim teknis melalui kontak yang tersedia di bagian <strong>Kontak</strong>.</li>
                    </ul>
                    </div>
                    
                    <div class="guide-section text-white">
                        <h4>Informasi Kontak</h4>
                        <p>
                            Jika Anda memerlukan bantuan lebih lanjut, silakan hubungi tim kami melalui email: inSidecorporation@gmail.com atau melalui WhatsApp di +62-831-2451-7280.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
require_once('template/footer.php');
?>
