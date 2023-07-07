
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA PELANGGAN</h3>
        <form action="<?php echo e(url('/pelanggan')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pel_no" class="form-control" placeholder="Kode">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pel_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pel_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pel_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <label for="">Nomor KTP</label>
                <input type="text" name="pel_ktp" class="form-control" placeholder="Nomor KTP">
            </div>
            <div class="mb-3">
                <label for="">Nomor Seri</label>
                <input type="text" name="pel_seri" class="form-control" placeholder="Nomor Seri">
            </div>
            <div class="mb-3">
                <label for="">Nomor Meteran</label>
                <input type="text" name="pel_meteran" class="form-control" placeholder="Nomor Meteran">
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <td><select class="iorm-control" name="pel_aktif" id="">
                    <option value="">PILIH</option>
                    <option value="">Aktif</option>
                    <option value="">Tidak Aktif</option>
                </select></td>
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quis\pbwl-laravel-quiz-juar\pbwl-laravel-quiz-juar\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>