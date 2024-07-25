<?php $__env->startSection('main-content'); ?>
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">Email :</span>
            <h3><?php echo e($data->email); ?></h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Nama :</span>
            <h3><?php echo e($data->name); ?></h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Alamat :</span>
            <h3><?php echo e($data->address); ?></h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Tgl Lahir :</span>
            <h3><?php echo e($data->birthdate); ?></h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">Jenis Kelamin :</span>
            <h3><?php echo e($data->gender); ?></h3>
        </div>
        <div class="name mt-4">
            <span class="text-secondary">No Telepon :</span>
            <h3><?php echo e($data->phone); ?></h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tugas7.member.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugas6\resources\views/tugas7/member/modules/identity/show.blade.php ENDPATH**/ ?>