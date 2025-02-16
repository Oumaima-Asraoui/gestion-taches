<!-- app.blade.php -->
<html lang="fr">
<head>
    <!-- Bibliothèques tiers -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Gestion des tâches</title>

    <style>
        /* Navbar Style */
        .navbar {
            background: #f8f9fa;
            padding: 10px 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #080808;
        }

        .navbar-nav .nav-link {
            color: #1638b1;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* Boutons */
        .btn-custom {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .navbar-nav {
                text-align: center;
            }
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="/">
      <i class="fas fa-tasks"></i> Gestion des Tâches
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @if (Auth::guest())
        <li class="nav-item">
          <a class="nav-link" href="/register"><i class="fas fa-user-plus"></i> Inscription</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Connexion</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fas fa-list"></i> Liste  des Tâches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/add-task"><i class="fas fa-plus-circle"></i>Ajouter une tâche</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<!-- Contenu -->
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>

<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<footer style="background-color: #f8f9fa; padding: 30px 0;">
  <div class="container">
      <div class="row">
          <!-- Section À propos de l'application (alignée à gauche) -->
          <div class="col-12 col-md-6">
              <h4>À propos de l'application</h4>
              <p>Gestion des tâches est une application intuitive qui vous aide à organiser et suivre vos tâches de manière efficace, que ce soit dans un cadre personnel ou professionnel.</p>
          </div>

          <!-- Section Avantages (alignée à droite) -->
          <div class="col-12 col-md-6">
              <h5>Les Avantages</h5>
              <ul class="list-unstyled">
                  <li><i class="fas fa-check-circle"></i> Interface simple et épurée</li>
                  <li><i class="fas fa-check-circle"></i> Suivi des tâches en temps réel</li>
          </div>
      </div>

      <!-- Footer Bottom (centré) -->
      <div class="row">
          <div class="col-12 text-center">
              <hr class="my-4">
              <p class="mb-0">Développé  par [ OUMAIMA AASRAOUI]</p>
            
          </div>
      </div>
  </div>
</footer>





</body>
</html>
