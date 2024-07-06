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
            <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}"><i class="fa-solid fa-earth-africa fa-2x"></i> <h2 class="brandTitle ms-5 mb-0"> The Lonely Traveller</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
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
    <header class="container-fluid vw-100 postcardHeader p-0 position-relative">
        <div class="progImgContainer position-fixed w-100 h-100 ">
            <img class="w-100 h-100 grayFilter position-fixed z-1 progImg" src="{{$postcard['img']}}" alt="">

        </div>
        <div class="row  z-2 position-absolute w-100 h-100  flex-column justify-content-center align-items-center">
            <div class="col-12 text-center mb-5">
                <h1 class="mb-5">{{$postcard['Location'], $postcard['Destination']}}</h1>
            </div>
            
            
            <div class="row justify-content-around">
                <div class="col-md-5 col-12">
                    <div class="card-front">
                        
                        <img class="img-fluid"  src={{$postcard['img']}} />
                    </div>
                </div>
                <div class="col-md-5 col-12 d-flex justify-content-center">
                    <div class="card-back d-flex align-items-center">
                        
                        <div class="d-flex flex-column mb-5  p-4 ">
                            <ul class="listPrice2 d-flex flex-column p-0">
                                <li><span class="fw-bold spanColor">Destination: </span><span class="colorDest">{{$postcard['Location']}}, {{$postcard['Destination']}}</span></li>
                                <li class="text-end"><span class="fw-bold spanColor">Activity</span>: <span class="colorDest">{{$postcard['Activity']}}</span></li>
                                <li class="align-self-end"><span class="fw-bold spanColor">Price: </span><span class="colorDest">{{$postcard['Price']}}</span></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
              
</header>
<div class="row vh-100 z-2 justify-content-center position-relative bgColor ">
    <div class="col-12 col-md-6 text-center progContainer ">
        <h2 class="mt-5 pt-5">Programme</h2>
        <p class="mt-5 text-white">{{$postcard['Description']}}</p>
    </div>
</div> 

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- My JS --}}
    <script src="{{'/js/postcard.js'}}"></script>

</body>
</html>