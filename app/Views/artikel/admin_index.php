<?= $this->include('template/admin_header.php'); ?>
<style>
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    .table thead {
        background-color: #337ab7;
        color: white;
    }

    .table tfoot {
        background-color: #337ab7;
        color: white;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table td p {
        margin: 0;
        font-size: 12px;
        color: #666;
    }

    .btn {
        display: inline-block;
        padding: 5px 10px;
        font-size: 14px;
        text-decoration: none;
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #d9534f;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }

    .btn-gray {
        background-color: #dcdcdc;
        color: black;
    }

    .btn-gray:hover {
        background-color: #bdbdbd;
    }
</style>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel):
            foreach ($artikel as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <b><?= $row['judul']; ?></b>
                        <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                    </td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a class="btn-gray" href="<?= base_url('/admin/artikel/edit/' .
                            $row['id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' .
                            $row['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </tfoot>
</table>
<?= $this->include('template/admin_footer.php'); ?>