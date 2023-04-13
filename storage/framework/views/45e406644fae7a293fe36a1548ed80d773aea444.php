<!DOCTYPE html>
<html>
<head>
    <title>TABEL MAHASISWA - PROGRAM CRUD </title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS External -->
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>
<body>
    <!--Supaya content fit 100% ke layar, maka menggunakan class containe -->
    <div class="container">
        <h2> Tabel Mahasiswa </h2>
        <!-- tombol tambah -->
        <a href="/tambah-mahasiswa" class="btn btn-outline-primary"> +Tambah </a>
        <!-- tabel mahasiswa dengan pola warna strip -->
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> No </th>
                        <th scope="col"> NIM </th>
                        <th scope="col"> Nama Lengkap </th>
                        <th scope="col"> Prodi </th>
                        <th scope="col"> Jurusan </th>
                        <th scope="col"> Angkatan </th>
                        <th scope="col"> Alamat </th>
                    </tr>
                </thead>
            </table>
            <!-- konten tabel -->
            <tbody>
                <!-- nomor dimulai dari 1 -->
                <?php
                    $no = 1
                ?>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"> <?php echo e($index + $data->firstitem()); ?></th>
                        <td> <?php echo e($row->nim); ?> </td>
                        <td> <?php echo e($row->nama_MHS); ?> </td>
                        <td> <?php echo e($row->prodi); ?> </td>
                        <td> <?php echo e($row->jurusan); ?> </td>
                        <td> <?php echo e($row->angkatan); ?> </td>
                        <td> <?php echo e($row->alamat); ?> </td>
                        <td>
                            <a href="#" type="button" class="btn btn-succes"> Edit </a>
                            <a href="#" type="button" class="btn btn-danger"> Hapus </a> 
                        </td>                       
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Project-Fundamental\resources\views/data-mahasiswa.blade.php ENDPATH**/ ?>