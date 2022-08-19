<!doctype html>
<html lang="en">

<head>
@include('layout.head')
</head>

<body>

@include('layout.navbar')



    <section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FUTURE CAREER
                    </p>
                    <h2 class="primary-header">
                        Start Invest Today
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{asset('assets/images/item_bootcamp.png')}}" alt="" class="cover">
                                <h1 class="package">
                                    {{$camps->title}}
                                </h1>
                                <p class="description">
                                    Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{route('checkout.post', $camps->slug)}}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{Auth::user()->name}}" readonly>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                    <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{Auth::user()->email}}" readonly>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Occupation</label>
                                    <input name = "occupation" type="text" class="form-control  @error('occupation') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{Auth::user()->occupation}}">
                                    @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                    <input name = "card_number" type="number" class="form-control @error('card_number') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('card_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <label for="exampleInputEmail1" class="form-label">Expired</label>
                                            <input name = "expired" type="date" class="form-control  @error('expired') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            @error('expired')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label for="exampleInputEmail1" class="form-label">CVC</label>
                                            <input name = "cvc" type="text" class="form-control @error('cvc') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            @error('cvc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{asset('assets/images/ic_secure.svg')}}" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>

</body>

</html>