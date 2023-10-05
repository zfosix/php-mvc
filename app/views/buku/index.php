<div class="container">
    <h3 class="mb-3">Daftar Buku</h3>
    <p class="badge bg-secondary text-wrap">Membaca buku adalah salah satu kegiatan yang sangat penting dalam kehidupan
        kita. Aktivitas ini bukan
        hanya
        sekadar hobi atau kegiatan waktu luang, tetapi juga memiliki dampak yang sangat positif pada perkembangan
        pribadi, pengetahuan, dan kualitas hidup secara keseluruhan. Pertama-tama, membaca buku adalah salah satu cara
        terbaik untuk memperluas wawasan dan pengetahuan kita. Dalam buku, kita dapat menemukan informasi yang luas
        mengenai berbagai topik, mulai dari ilmu pengetahuan dan sejarah hingga cerita fiksi yang memikat.Dengan
        membaca, kita dapat terus belajar sepanjang hidup, menggali pengetahuan baru, dan menjadi individu yang lebih
        terinformasi. Selain itu, membaca buku juga membantu kita meningkatkan kemampuan berpikir kritis dan analitis.
        Saat membaca, kita dihadapkan pada berbagai sudut pandang, argumen, dan pemikiran kompleks. Ini merangsang
        otak kita untuk berpikir lebih dalam, menganalisis informasi, dan mengembangkan kemampuan berargumentasi yang
        kuat.</p>
    <br>
    <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
    <br>
    <br>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['buku'] as $row) : ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['penulis']; ?></td>
                    <td><?= $row['tgl_selesai']; ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                    </td>
                </tr>

            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>