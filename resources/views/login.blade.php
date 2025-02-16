@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex justify-content-center align-items-center vh-100">

    <!-- Illustration Section -->
    <div class="col-md-6 d-flex justify-content-center align-items-center bg-primary text-white">
        <!-- Utiliser la fonction asset() pour référencer l'image -->
        <img src="{{ asset('images/WhatsApp Image 2025-02-15 à 22.09.17_92ce06bb.jpg') }}" class="img-fluid-full" alt="Illustration">
    </div>

    <!-- Login Form -->
    <div class="col-md-6 p-5 bg-white">
        <h2 class="text-center mb-4">Bienvenue Dans Notre Application!</h2>
        <form method="post" action="{{ route('user.login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Saisir Email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            <div class="text-end mt-2">
                <a href="#">Mot de passe oublié ?</a>
            </div>
        </form>
        <div class="text-center mt-3">
            <p>Ou connectez-vous avec</p>
            <div>
                <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-google"></i></a>
                <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="text-center mt-3">
            <p>Vous n'avez pas de compte ? <a href="#">Créer un compte</a></p>
        </div>
    </div>
</div>

@endsection

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
