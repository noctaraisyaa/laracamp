<!doctype html>
<html lang="en">

<head>
@include('layout.head')
</head>

<body>

    <section class="login-user">
        <div class="left">
            <img src="/assets/images/ill_login_new.png" alt="">
        </div>
        <div class="right">
            <img src="/assets/images/logo.png" class="logo" alt="">
            <h1 class="header-third">
                Start Today
            </h1>
            <p class="subheader">
                Because tomorrow become never
            </p>
            <p>
                <a class="btn btn-border btn-google-login" href="{{route('login.google')}}">
                    <img src="/assets/images/ic_google.svg" class="icon" alt=""> Sign In with Google
                </a>
            </p>
            <img src="/assets/images/people.png" class="people" alt="">
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>