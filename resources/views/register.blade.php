@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="row w-75 shadow-lg rounded">
        <!-- Form Section -->
        <div class="col-md-6 p-5 bg-white">
            <h2 class="text-center mb-4">Inscription</h2>
            <form method="post" action="/register">
                @csrf
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" required>
                </div>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
            </form>
            <div class="text-center mt-3">
                <p>Ou inscrivez-vous avec les plateformes sociales</p>
                <div>
                    <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-google"></i></a>
                    <a href="#" class="btn btn-outline-dark btn-circle"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Illustration Section -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white">
          <!-- Utilisation de la fonction asset() pour référencer l'image -->
          <img src="{{ asset('images/WhatsApp Image 2025-02-15 à 22.09.51_e43b99f3.jpg') }}" class="img-fluid-full" alt="Illustration">


          <h2>Rejoignez-nous pour accéder à des fonctionnalités exclusives.</h2>
          
      </div>

    </div>
</div>

@endsection

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
