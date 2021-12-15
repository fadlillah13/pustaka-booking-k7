<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col" nowrap>Pelanggan Sejak</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($pelanggan as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture>
                            </td>
                            <!--<td>
                                        <a href="<?
                                                    ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                        <a href="<?
                                                    ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['judul_buku']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>