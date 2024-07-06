<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Blog Laravel</title>
    
    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    {{-- FontAwsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    {{-- Google Fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    {{-- Swiper --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    
    {{-- My css--}}
    <link rel="stylesheet" href="{{'/css/style.php'}}">
</head>
<body>
    {{-- Start of Navbar --}}
    <nav id="navBar" class="navbar navbar-expand-lg bg-body-tertiary py-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#"><i class="fa-solid fa-earth-africa fa-2x"></i> <h2 class="brandTitle ms-5 mb-0"> The Lonely Traveller</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                </ul>
                <a class="navbar-brand fa-2x d-flex opacity-0" href="#"><i class="fa-solid fa-earth-africa"></i> <h2 class="brandTitle"> The Lonely Traveller</h2></a>
            </div>
        </div>
    </nav>
    {{-- End of Navbar --}}
    
    {{-- Start of Header --}}
    <header class="container-fluid headerHeight position-relative">
        <div class="row position-absolute w-100 h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6 siteTitle text-center d-flex flex-column justify-content-center text-white p-5">
                <h2>Tired of the usual routine?</h2>
                <h3 class="my-3">Have an adventure with</h3>
                
                <h1>The Lonely Traveller</h1>
            </div>
        </div>
        <div class="row h-50">
            <div class="col-12 col-md-6  position-relative h-100 headerImgContainer p-0">
                <img class="w-100  headerImg z-1 " src="{{'/images/boats.jpg'}}" alt="">
            </div>
            <div class="col-12 col-md-6  position-relative h-100 headerImgContainer p-0">
                <img class="w-100  headerImg z-1" src="{{'/images/roadMountains.jpg'}}" alt="">
            </div>            
        </div>
        <div class="row h-50">
            <div class="col-12 col-md-6  position-relative h-100 headerImgContainer p-0">
                <img class="w-100 headerImg z-1" src="{{'/images/snowMountains.jpg'}}" alt="">
            </div>
            <div class="col-12 col-md-6  position-relative h-100 headerImgContainer p-0">
                <img class="w-100 headerImg z-1" src="{{'/images/lakeMountains.jpg'}}" alt=""
                ></div>
                
            </div>
    </header>
        {{-- End of Header --}}
        
        {{-- Start of Postcards --}}
    <div class="container-fluid postcardsContainer vw-100 vh-100">
            
            <div class="row  justify-content-center align-items-center text-center flex-column h-100">
                <div class="col-12">
                    <h2 class="pt-5">Our Best Offers</h2>
                    
                </div>
                <div class="col-12">
                    
                    
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper z-1 position-relative">
                            @foreach ($postcards as $postcard)
                            
                            <div class="swiper-slide position-relative  ">
                                <div class="cardsContainer">
                                    <div class="card">
                                        <div class="front h-100 p-3">     
                                            <img  src={{$postcard['img']}} />
                                            <h4 class="position-absolute">{{$postcard['Location']}}, {{$postcard['Destination']}}</h4>
                                        </div>
                                        <div class="back d-flex align-items-center">
                                            <div class="col-6 borderRight d-flex flex-column justify-content-center align-items-center  p-4 ">
                                                <h3>Description</h3>
                                                <p>{{$postcard['Description']}}</p>
                                                <div class="col-6">
                                                    <a href="{{route('postcard.show',['location'=>$postcard['Location']])}}"><button type="button" class="btnOffer mt-3 btn btn-outline">View Offer</button></a>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6 d-flex flex-column align-self-end mb-5  p-4 ">
                                                <ul class="listPrice d-flex flex-column p-0">
                                                    <img src="{{'/images/Postmark.png'}}">
                                                    <li><span class="fw-bold">Destination: </span>{{$postcard['Location']}}, {{$postcard['Destination']}}</li>
                                                    <li><span class="fw-bold">Activity</span>: {{$postcard['Activity']}}</li>
                                                    <li class="align-self-end"><span class="fw-bold">Price: </span>{{$postcard['Price']}}</li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            @endforeach
                            
                            
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            
    </div>
    {{-- End of Postcards --}}
    
    
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>        
    {{-- My JS --}}
    <script src="{{'/js/main.js'}}"></script>
    
</body>
</html>