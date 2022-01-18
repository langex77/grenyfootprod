@extends('layouts.app')

@section('content')
<div class="container homebody">
            <div class="row ">
                <ul class="nav justify-content-center" style="position: fixed;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item dropdown" id="postulantgrenyhome">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Postulants</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">S'inscrire</a></li>
                            <li><a class="dropdown-item" href="#">Se Connecter</a></li>
                            <li><a class="dropdown-item" href="#">Administration</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Partenaires</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">S'inscrire</a></li>
                            <li><a class="dropdown-item" href="#">Se Connecter</a></li>
                            <li><a class="dropdown-item" href="#">Administration</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <h1 class="text-center">Bienvenue chez greny Foot</h1>
            </div>
            <div class="row col">
                <div class="carroussel col-8">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/ballon or.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="/images/equipe de france.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/jeux football mini.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>    
                <div class="footnews col-4">
                    <h5>actualités Footbalistiques</h5>
                    <p>17h : Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                        16h : Donec feugiat odio sed nisl hendrerit accumsan.<br>
                        15h : Sed fermentum odio sodales hendrerit bibendum.<br>
                        14h : Phasellus interdum lectus vitae est sagittis mattis eu vel odio.<br>
                        13h : Sed imperdiet mi ut libero rhoncus, vitae pellentesque turpis feugiat.<br>
                        12h : Curabitur commodo massa id est ultricies, eget scelerisque nisi accumsan.it.<br>
                        11h : Nunc commodo purus eget efficitur dictum.<br>
                        10h : Morbi pretium metus sit amet nunc mattis, in lobortis lacus pretium.<br>
                        09h : Sed et lacus volutpat, eleifend lacus id, convallis enim.<br>
                        08h : Etiam consectetur quam aliquet lacus elementum vehicula eget sed arcu.<br>
                        07h : Praesent tincidunt mi at eros sollicitudin pulvinar.<br>
                        06h : Aenean posuere felis eget metus pharetra dictum.<br>
                        05h : Suspendisse id sapien eget nunc maximus mollis.<br>
                        04h : Praesent hendrerit nulla a egestas rhoncus.<br>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center articlefoot">
                <div class="card-group">
                    <div class="card">
                        <img src="/images/Messi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Messi</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                <div class="card">
                    <img src="/images/Pele-and-Mbappe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Pélé</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
                <div class="card">
                    <img src="/images/footbal feminin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Football féminin</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/bootstrap.bundle.js"></script>
        <footer>
            <div class="row socialréseau justify-content-center">
                <img src="/images/facebook.png"  alt="facebook">
                <img src="/images/twiter.png"  alt="twitter">
                <img src="/images/instagram.png"  alt="instagram">
                <img src="/images/linkedin.png"  alt="linkedin">

            </div>
        </footer>
@endsection