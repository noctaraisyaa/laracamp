<!doctype html>
<html lang="en">

<head>
@include('layout.head')
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mentor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li>
                       
                    </li>
                </ul>
                <div class="d-flex user-logged">
                <div class="dropdown show">

                    <a href="class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Halo, {{$user->email}}!
                        @if($user->avatar == null)
                        <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class = "user-photo">
                        @else
                        <img src="/assets/images/{{$user->avatar}}" class="user-photo" alt="">
                        @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <form action="{{ url('logout') }}" method="POST">
            @csrf 
            <button type="submit" class="btn btn-danger"><i class="fas fa-share mr-2"></i>Keluar</button>
      
            </form>
    </div>
  </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="dashboard my-5">
        <div class="container">
        @include('layout.message')
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>

                 



                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                    <tbody>
                    @foreach ($checkouts as $checkout )
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{$checkout->camps->title}}</strong>
                                </p>
                                <p>
                                    {{$checkout->created_at->isoFormat('D MMMM YYYY')}}
                                </p>
                            </td>
                            <td>
                                <strong>${{$checkout->camps->price}}.00</strong>
                            </td>

                            @if($checkout->isPaid == false)
                           
                            <td>
                                <strong>Waiting for Payment</strong>
                            </td>

                            @else
                            
                            <td>
                                <strong>Payment Success</strong>
                            </td>

                            @endif
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
          
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>