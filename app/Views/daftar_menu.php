<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu</title>
</head>
<body>
    <h1>Daftar Menu</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Resep</th>
                <th>Deskripsi Resep</th>
                <th>Kategori</th>
                <th>Level</th>
                <th>Waktu</th>
                <th>Aksi</th> <!-- New column for actions -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resep as $index => $item) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $item->nama_resep ?></td>
                <td><?= $item->deskripsi_resep ?></td>
                <td><?= $item->kategori ?></td>
                <td><?= $item->level ?></td>
                <td><?= $item->waktu ?></td>
                <td>
                    <a href="<?= base_url('admin/edit-resep/' . $item->id_resep) ?>">Edit</a>
                    <a href="<?= base_url('admin/delete-resep/' . $item->id_resep) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus resep ini?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
