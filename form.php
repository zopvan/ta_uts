<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rekomendasi Sepatu</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container">
        <h1>🏃‍♂️ Form Rekomendasi Sepatu</h1>
        <p class="subtitle">Isi data berikut untuk mendapatkan rekomendasi sepatu yang tepat</p>

        <form id="shoeForm" action="result.php" method="post">
            <!-- 1. Nama User -->
            <div class="form-group">
                <label for="nama">
                    1️⃣ Nama User
                </label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>

            <!-- 2. Gender -->
            <div class="form-group">
                <label>
                    2️⃣ Gender
                </label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="pria" name="gender" value="Laki-laki" required>
                        <label for="pria" class="radio-label">👨 Pria</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="wanita" name="gender" value="Perempuan" required>
                        <label for="wanita" class="radio-label">👩 Wanita</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="unisex" name="gender" value="unisex" required>
                        <label for="unisex" class="radio-label">👨👩 Unisex</label>
                    </div>
                </div>
            </div>

            <div class="field-wrap">
                <!-- 3. Kegiatan Utama -->
                <div class="form-group1">
                    <label for="kegiatan">
                        3️⃣ Kegiatan Utama
                    </label>
                    <select id="kegiatan" name="kegiatan" required>
                        <option value="">Pilih kegiatan utama</option>
                        <option value="Formal">Formal</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Santai">Santai</option>
                    </select>
                </div>

                <!-- 4. Pemakaian Sepatu -->
                <div class="form-group1">
                    <label for="pemakaian">
                        4️⃣ Pemakaian Sepatu
                    </label>
                    <select id="pemakaian" name="pemakaian" required>
                        <option value="">Pilih lokasi pemakaian</option>
                        <option value="Indoor">Indoor</option>
                        <option value="Outdoor">Outdoor</option>
                    </select>
                </div>
            </div>

            <!-- . Budget -->
            <div class="form-group">
                <label for="budget">
                    5️⃣ Budget
                </label>
                <select id="budget" name="budget" required>
                    <option value="">Pilih budget</option>
                    <option value="Ekonomi">Ekonomis (Rp. 100.000 - Rp. 400.000)</option>
                    <option value="Menengah">Menengah (Rp. 500.000 - Rp. 800.000)</option>
                    <option value="Premium">Premium (>=Rp. 800.000)</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Dapatkan Rekomendasi</button>
            <button onclick="window.location.href='index.html'" class="back-btn" >Ke Beranda</button>
        </form>
    </div>
</body>
</html>