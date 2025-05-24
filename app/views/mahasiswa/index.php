<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <h3>Daftar Mahasiswa</h3>

            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['nim']; ?></td>
                            <td><?= $mhs['email']; ?></td>
                            <td><?= $mhs['jurusan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
