<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Administração</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    @stack('adminStyle')
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/admin/dashboard/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/admin/dashboard/css.css')}}">

</head>
<body class="bg-dark">
<header id="header" class="header fixed-top d-flex align-items-center bg-dark">
    <div class="d-flex align-items-center justify-content-between"><a href="/" class="logo d-flex align-items-center">
            <img src="{{asset('img/logo-design/LogoSemFundo.png')}}" class="mt-5" alt="Eu Que Fiz Logo">
            <span class="d-none d-lg-block" id="titulo" >Eu Que Fiz</span></a><i class="bi bi-list toggle-sidebar-btn text-primary"></i>
    </div>
@yield('search')
    <nav class="header-nav ms-auto bg-light rounded p-2">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown p-3 bg-light rounded">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="{{asset(Auth::user()->image)}}" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span> </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{Auth::user()->name}}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="{{route('dices')}}"> <i class="bi bi-person"></i> <span>Meu Perfil</span> </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"> <i class="bi bi-box-arrow-right"></i> <span>Sair</span> </a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
@yield('adminDashboard')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- JavaScript Bundle with Popper -->
@stack('adminScript')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('js/admin/dashboard/main.js')}}"></script>
<script src="{{asset('js/admin/dashboard/scripts.js')}}"></script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.13.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.13.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyAbTG-OcP3hmyPMPShKkswo9kyffY7Ii7w",
        authDomain: "euquefiz-e54c0.firebaseapp.com",
        projectId: "euquefiz-e54c0",
        storageBucket: "euquefiz-e54c0.appspot.com",
        messagingSenderId: "335945936762",
        appId: "1:335945936762:web:3e77796432800c0448f0c3",
        measurementId: "G-HGBWJMZ62E"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>
</body>
</html>
