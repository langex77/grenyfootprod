<?php $__env->startSection('content'); ?>
<div class="container profilebody">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de Bord</div>

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

<!--Affichage informations d'inscription  -->

<div class="container">
    <div class="row picture text-center mb-5 ">
    <img class="w-25 rounded mx-auto d-block" src="/images/photo max profil.jpg" alt="">
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informations du postulant</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>




                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e($user->profile->email); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->profile->name); ?>" required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('lastName') ? ' has-error' : ''); ?>">
                            <label for="lastName" class="col-md-4 control-label">Prénom</label>
                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="<?php echo e($user->profile->lastName); ?>" required autofocus>
                                <?php if($errors->has('lastName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dateofbirth') ? ' has-error' : ''); ?>">
                            <label for="dateofbirth" class="col-md-4 control-label">Date de naissance</label>
                            <div class="col-md-6">
                                <input id="age" type="date" class="form-control" name="dateofbirth" value="<?php echo e($user->profile->dateofbirth); ?>" required autofocus>
                                <?php if($errors->has('dateofbirth')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dateofbirth')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('placeOfBirth') ? ' has-error' : ''); ?>">
                            <label for="placeOfBirth" class="col-md-4 control-label">Lieu de naissance</label>
                            <div class="col-md-6">
                                <input id="placeOfBirth" type="text" class="form-control" name="placeOfBirth" value="<?php echo e($user->profile->placeOfBirth); ?>" required autofocus>
                                <?php if($errors->has('placeOfBirth')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('placeOfBirth')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('age') ? ' has-error' : ''); ?>">
                            <label for="age" class="col-md-4 control-label">Âge</label>
                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="<?php echo e($user->profile->age); ?>" required autofocus>
                                <?php if($errors->has('age')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('age')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('height') ? ' has-error' : ''); ?>">
                            <label for="height" class="col-md-4 control-label">Taille</label>
                            <div class="col-md-6">
                                <input id="height" type="number" class="form-control" name="height" value="<?php echo e($user->profile->height); ?>" required autofocus>
                                <?php if($errors->has('height')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('height')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nationality') ? ' has-error' : ''); ?>">
                            <label for="nationality" class="col-md-4 control-label">Nationalité</label>
                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="<?php echo e($user->profile->nationality); ?>" required autofocus>
                                <?php if($errors->has('nationality')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nationality')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label for="phone" class="col-md-4 control-label">N° de téléphone</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e($user->profile->phone); ?>" required autofocus>
                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('whatsappnumber') ? ' has-error' : ''); ?>">
                            <label for="whatsappnumber" class="col-md-4 control-label">N° whatsapp</label>
                            <div class="col-md-6">
                                <input id="whatsappnumber" type="text" class="form-control" name="whatsappnumber" value="<?php echo e($user->profile->whatsappnumber); ?>" required autofocus>
                                <?php if($errors->has('whatsappnumber')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('whatsappnumber')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('footballpost') ? ' has-error' : ''); ?>">
                            <label for="footballpost" class="col-md-4 control-label">Position sur le terrain</label>
                            <div class="col-md-6">
                                <input id="footballpost" type="texte" class="form-control" name="footballpost" value="<?php echo e($user->profile->footballpost); ?>" required autofocus>
                                <?php if($errors->has('footballpost')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('footballpost')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('strongfoot') ? ' has-error' : ''); ?>">
                            <label for="strongfoot" class="col-md-4 control-label">Pied fort</label>
                            <div class="col-md-6">
                                <input id="strongfoot" type="texte" class="form-control" name="strongfoot" value="<?php echo e($user->profile->strongfoot); ?>" required autofocus>
                                <?php if($errors->has('strongfoot')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('strongfoot')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('playeragent') ? ' has-error' : ''); ?>">
                            <label for="playeragent" class="col-md-4 control-label">Agent du joueur</label>
                            <div class="col-md-6">
                                <input id="playeragent" type="texte" class="form-control" name="playeragent" value="<?php echo e($user->profile->playeragent); ?>" required autofocus>
                                <?php if($errors->has('playeragent')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('playeragent')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('currentclub') ? ' has-error' : ''); ?>">
                            <label for="currentclub" class="col-md-4 control-label">Club actuel</label>
                            <div class="col-md-6">
                                <input id="currentclub" type="texte" class="form-control" name="currentclub" value="<?php echo e($user->profile->currentclub); ?>" required autofocus>
                                <?php if($errors->has('currentclub')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('currentclub')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('teamdateentry') ? ' has-error' : ''); ?>">
                            <label for="teamdateentry" class="col-md-4 control-label">Date d'entrée dans l'équipe</label>
                            <div class="col-md-6">
                                <input id="teamdateentry" type="date" class="form-control" name="teamdateentry" value="<?php echo e($user->profile->teamdateentry); ?>" required autofocus>
                                <?php if($errors->has('teamdateentry')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('teamdateentry')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        

                        <div class="form-group<?php echo e($errors->has('datecontractend') ? ' has-error' : ''); ?>">
                            <label for="datecontractend" class="col-md-4 control-label">Date de fin de contrat</label>
                            <div class="col-md-6">
                                <input id="datecontractend" type="date" class="form-control" name="datecontractend" value="<?php echo e($user->profile->datecontractend); ?>" required autofocus>
                                <?php if($errors->has('datecontractend')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('datecontractend')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container profileapplysection mt-10 ">
    <div class="row   align-items-baseline justify-content-center d-flex">
        <div class="col-2 ">
            <h5>Je souhaite postuler : </h5>
        </div>
        <div class="col-2 p-2">
            <div class="btn btn-primary btn-lg   text-center">
                <a href="#">Demarrer</a>
            </div>
        </div>    
    </div>
</div>                       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>