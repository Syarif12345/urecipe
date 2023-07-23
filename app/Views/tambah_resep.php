<!DOCTYPE html>
<html>
<head>
    <title>Tambah Resep</title>
</head>
<body>
    <h1>Tambah Resep</h1>
    <?php if (session()->has('errors')) : ?>
        <div style="color: red;">
            <?php foreach (session('errors') as $error) : ?>
                <?= $error ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('success')) : ?>
        <div style="color: green;">
            <?= session('success') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/store') ?>" method="post">
        <label for="nama_resep">Nama Resep:</label>
        <input type="text" id="nama_resep" name="nama_resep" required>
        <br>

        <label for="deskripsi_resep">Deskripsi Resep:</label>
        <textarea id="deskripsi_resep" name="deskripsi_resep" required></textarea>
        <br>

        <label for="kategori">Kategori:</label>
        <input type="text" id="kategori" name="kategori" required>
        <br>

        <label for="bahan">Bahan:</label>
        <textarea id="bahan" name="bahan" required></textarea>
        <br>

        <label for="langkah">Langkah:</label>
        <textarea id="langkah" name="langkah" required></textarea>
        <br>

        <label for="level">Level:</label>
        <input type="text" id="level" name="level" required>
        <br>

        <label for="waktu">Waktu:</label>
        <input type="text" id="waktu" name="waktu" required>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
