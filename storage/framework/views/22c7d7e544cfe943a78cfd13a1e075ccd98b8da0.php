<?php $__env->startSection('content'); ?>
<div class="container profilebody">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
    
                    You are logged in!
                       
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container profileapplysection ">
    <div class="row  justify-content-center align-items-baseline align-items-center">
        <div class="col-2 ">
            <h5>Voir mon profil : </h5>
        </div>
        <div class="col-5">
            <div class="btn btn-primary btn-lg   text-center">
                <a href="<?php echo e(route('profiles.show',['user'=>auth()->user()])); ?>">acceder</a>
            </div>
        </div>    
    </div>
</div>                       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>