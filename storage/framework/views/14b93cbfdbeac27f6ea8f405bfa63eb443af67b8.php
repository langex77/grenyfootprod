<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="header">
            <div class="container-logo">
                <div class="logo">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

             

                    <!-- Right Side Of Navbar -->
            <div class="Register-auth" style="display: flex;justify-content:space-between;width:150px;">   
                   
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <a href="<?php echo e(route('login')); ?>">Login</a>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php else: ?>

                            <div class="Register-noauth"
                                <a href="#" class="" data-toggle="" role="" aria-expanded="false"><span>
                                    <?php echo e(Auth::user()->name); ?> <span class=""></span>
                                </a>

                             
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                            </div>   
                            
                        <?php endif; ?>
                   
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
