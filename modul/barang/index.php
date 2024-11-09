<div class="row p-3">
    <div class="col">
        <h4>Data Stok Barang</h4>
    </div>
    <div class="col">
        <form class="d-flex" action="?modul=barang" method="post">
            <select name="filter" class="form-select me-2">
                <?php
                $q_kategori = "SELECT kategori FROM barang group by kategori";
                $result_kategori = $mysqli->query($q_kategori);
                while($r_kategori = $result_kategori->fetch_assoc()){
                ?>
                    <option value="<?= $r_kategori['kategori'];?>"><?= $r_kategori['kategori'];?></option>
                    <?php
                    }
                    ?>
                    </select>
                    <input class="btn btn-primary" type="submit" value="Filter" />
        </form>
    </div>
</div>
<div class="row p-3">
    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            <?php
            if (isset($_GET['filter'])) {
                $query = "SELECT * FROM barang WHERE kategori='$_POST[filter]'";
            } else {
                $query = "SELECT * FROM barang";
            }
            $result = $mysqli->query($query);
            $no = 0;
            while ($row = $result->fetch_assoc()) {
                $no++;
                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= FormatRupiah($row['harga']); ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td>
                        <a href="<?= '?modul=edit-barang&id=' . $row['id']; ?>">Edit</a>
                        <a href="<?= 'modul/barang/proses.php?modul=barang&action=delete&id=' . $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                </table>
                <a class="btn btn-primary" href="?modul=form-barang">Tambah Data Barang</a>
            </div>
        </div>
