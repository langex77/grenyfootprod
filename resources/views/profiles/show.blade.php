@extends('layouts.app')

@section('content')
<div class="container profilebody">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de Bord</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    
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
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->profile->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->profile->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">Prénom</label>
                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ $user->profile->lastName }}" required autofocus>
                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dateofbirth') ? ' has-error' : '' }}">
                            <label for="dateofbirth" class="col-md-4 control-label">Date de naissance</label>
                            <div class="col-md-6">
                                <input id="age" type="date" class="form-control" name="dateofbirth" value="{{ $user->profile->dateofbirth }}" required autofocus>
                                @if ($errors->has('dateofbirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('placeOfBirth') ? ' has-error' : '' }}">
                            <label for="placeOfBirth" class="col-md-4 control-label">Lieu de naissance</label>
                            <div class="col-md-6">
                                <input id="placeOfBirth" type="text" class="form-control" name="placeOfBirth" value="{{ $user->profile->placeOfBirth }}" required autofocus>
                                @if ($errors->has('placeOfBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('placeOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Âge</label>
                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="{{ $user->profile->age }}" required autofocus>
                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label for="height" class="col-md-4 control-label">Taille</label>
                            <div class="col-md-6">
                                <input id="height" type="number" class="form-control" name="height" value="{{ $user->profile->height }}" required autofocus>
                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                            <label for="nationality" class="col-md-4 control-label">Nationalité</label>
                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ $user->profile->nationality }}" required autofocus>
                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">N° de téléphone</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->profile->phone) }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('whatsappnumber') ? ' has-error' : '' }}">
                            <label for="whatsappnumber" class="col-md-4 control-label">N° whatsapp</label>
                            <div class="col-md-6">
                                <input id="whatsappnumber" type="text" class="form-control" name="whatsappnumber" value="{{ $user->profile->whatsappnumber }}" required autofocus>
                                @if ($errors->has('whatsappnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('whatsappnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('footballpost') ? ' has-error' : '' }}">
                            <label for="footballpost" class="col-md-4 control-label">Position sur le terrain</label>
                            <div class="col-md-6">
                                <input id="footballpost" type="texte" class="form-control" name="footballpost" value="{{ $user->profile->footballpost }}" required autofocus>
                                @if ($errors->has('footballpost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('footballpost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('strongfoot') ? ' has-error' : '' }}">
                            <label for="strongfoot" class="col-md-4 control-label">Pied fort</label>
                            <div class="col-md-6">
                                <input id="strongfoot" type="texte" class="form-control" name="strongfoot" value="{{ $user->profile->strongfoot }}" required autofocus>
                                @if ($errors->has('strongfoot'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('strongfoot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('playeragent') ? ' has-error' : '' }}">
                            <label for="playeragent" class="col-md-4 control-label">Agent du joueur</label>
                            <div class="col-md-6">
                                <input id="playeragent" type="texte" class="form-control" name="playeragent" value="{{ $user->profile->playeragent }}" required autofocus>
                                @if ($errors->has('playeragent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('playeragent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('currentclub') ? ' has-error' : '' }}">
                            <label for="currentclub" class="col-md-4 control-label">Club actuel</label>
                            <div class="col-md-6">
                                <input id="currentclub" type="texte" class="form-control" name="currentclub" value="{{ $user->profile->currentclub }}" required autofocus>
                                @if ($errors->has('currentclub'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currentclub') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('teamdateentry') ? ' has-error' : '' }}">
                            <label for="teamdateentry" class="col-md-4 control-label">Date d'entrée dans l'équipe</label>
                            <div class="col-md-6">
                                <input id="teamdateentry" type="date" class="form-control" name="teamdateentry" value="{{ $user->profile->teamdateentry }}" required autofocus>
                                @if ($errors->has('teamdateentry'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teamdateentry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('datecontractend') ? ' has-error' : '' }}">
                            <label for="datecontractend" class="col-md-4 control-label">Date de fin de contrat</label>
                            <div class="col-md-6">
                                <input id="datecontractend" type="date" class="form-control" name="datecontractend" value="{{ $user->profile->>datecontractend }}" required autofocus>
                                @if ($errors->has('datecontractend'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datecontractend') }}</strong>
                                    </span>
                                @endif
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
@endsection
