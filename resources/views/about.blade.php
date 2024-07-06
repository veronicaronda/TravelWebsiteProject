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
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <a class="navbar-brand fa-2x d-flex opacity-0" href="#"><i class="fa-solid fa-earth-africa"></i> <h2 class="brandTitle"> The Lonely Traveller</h2></a>
            </div>
        </div>
    </nav>
    {{-- End of Navbar --}}
    <header class="container-fluid  vh-50 headerServicesImg">
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>About Us</h1>
            </div>
        </div>
    </header>
       
    <div class="container-fluid vh-100 bgColorOr">
        <div class="row h-100 justify-content-around align-items-center">
           <div class="col-md-6 col-12 d-flex justify-content-center">
            <div class="circle d-flex justify-content-center align-items-center position-relative">
                <div class="plus d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-plus fa-3x position-absolute"></i>
                    
                     
                </div>
                @foreach ($team as $member)
                    <div class="member position-absolute" style="background-image: url({{$member['img']}})">
                        
                    </div>
                    @endforeach
            </div>
           </div>
           <div class="col-md-6 col-12"></div>

        </div>
    </div>
    <script src="js/about.js"></script>
</body>
</html>