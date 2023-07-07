
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA Pelanggan</h3>
        <form action="<?php echo e(url('/pelanggan/' .$row->pel_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pel_no" class="form-control" value="<?php echo e($row->pel_no); ?>">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pel_nama" class="form-control" value="<?php echo e($row->pel_nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pel_alamat" class="form-control" value="<?php echo e($row->pel_alamat); ?>">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pel_hp" class="form-control" value="<?php echo e($row->pel_hp); ?>">
            </div>
            <div class="mb-3">
                <label for="">Nomor KTP</label>
                <input type="text" name="pel_ktp" class="form-control" value="{{$row->pel_ktp}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Seri</label>
                <input type="text" name="pel_seri" class="form-control" value="{{$row->pel_seri}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Meteran</label>
                <input type="text" name="pel_meteran" class="form-control" value="{{$row->pel_meteran}}">
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <td><select class="form-control" name="pel_aktif" id="">
                    <option value="{{$row->pel_aktif}}">PILIH</option>
                    <option value="{{$row->pel_aktif}}">Aktif</option>
                    <option value="{{$row->pel_aktif}}">Tidak Aktif</option>
                </select></td>
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-juar\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>