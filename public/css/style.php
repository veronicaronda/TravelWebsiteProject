<?php
header("Content-type: text/css; charset: UTF-8");

$firstColor = "#fda403";
$secondColor = "#e8751a";
$thirdColor = "#900C3F";
$fourthColor = "#c51350";
$specialFont= "La Belle Aurore, cursive";
$titleFont= "Nunito Sans, sans-serif";
$bodyFont="Merriweather Sans, sans-serif";


?>
:root{   
    font-size: 10px;
}
.navbar{
    background-color: <?php echo $firstColor; ?> !important;
    font-family:  <?php echo $titleFont; ?>     
}
.navbar a{
    color:<?php echo $fourthColor; ?>;
    font-size: 1.7rem;
    font-weight: bold;    
}

.brandTitle{
    font-family:<?php echo $specialFont; ?>;
    font-size: 3rem;
    font-weight: bold;
    
}


.siteTitle{
    background-color: rgba(197, 19, 81, 0.7);
    width: 60rem;
    height: 30rem;
   z-index: 3;

}

.siteTitle h1{
    font-family:<?php echo $specialFont; ?>;

    font-size: 5rem !important;
    font-weight: bold;
    line-height: 2;
}
.siteTitle h2{
    font-family:<?php echo $titleFont; ?>;

    font-size: 3.5rem;

}
.siteTitle h3{
    font-family:<?php echo $titleFont; ?>;

    font-size: 3rem;
    line-height: 2;
}
.headerImg{
    filter: grayscale();
    transition: all 2s ease-in-out;
    height: calc(100vh + 62px / 4) ;

}
.headerImgContainer::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    background: radial-gradient(circle, rgba(128,129,129,0) 0%, rgba(32,32,32,0.5) 25%,rgba(32,32,32,0.8) 45%, rgba(2,0,36,1) 100%); 
    z-index: 2;
    transition: all 3s ease-in-out;

}
.headerImgContainer:hover:before{
    background: rgba(0, 0, 0, 0);
    transition: all 3s ease-in-out;
}
.headerImgContainer:hover .headerImg{
    filter: none  !important;
    transition: all 2s ease-in-out;
}
.postcardsContainer{
        background-color: <?php echo $secondColor; ?>;
}
.postcardsContainer h2{
    font-family:<?php echo $titleFont; ?> !important;
    font-weight: bold;
    color:<?php echo $thirdColor; ?>;
    font-size: 3rem !important;
    line-height: 2;

}

/* --Swiper-- */

.swiper {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
    z-index:1;
    
  }
.swiper-wrapper{
    position: absolute;
}
  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 600px;
    height: 350px;
   
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    max-width: 100%;
    height: 100%;

  }

  .swiper-slide h4{
    font-family:<?php echo $specialFont; ?> !important;
    font-size: 2.7rem;
    top: 3rem;
    right: 3.5rem;
    text-shadow: 1px 1px 3px black;
    font-weight: bold;
    color: <?php echo $secondColor; ?>;
    transition: all 1s ease;
      }
 
  .cardsContainer{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .card{
    width: 100%;
    height: 100%;

    position: relative;
    transform-style: preserve-3d;
    transition: all 1s ease;
  }
  .front,.back{
    position: absolute;
    width: 100%;
    height:100%;

    backface-visibility: hidden;
    top: 0;
    left: 0;
  }
  .back{

    background-color: white;
    transform: rotateX(180deg);
    z-index: 1;
  }
.front img{
    border: 0.5rem solid white;
    filter: grayscale(80%);
    transition: all 1s ease-in-out;
}
.front img:hover{
    filter: none;
    transition: all 1s ease-in-out;

}
.flipCard{ /* --Toggle class-- */
    transform: rotateX(180deg);
}
.borderRight{
    border-right: 1px solid  rgba(0,0,0,0.5);
    height: 90%;
}
.borderRight h3{
    font-family:<?php echo $specialFont; ?> !important;
    font-size: 2rem;
    font-weight: bold;
}
.borderRight p{
    font-family:<?php echo $specialFont; ?> !important;
    font-size: 1.8rem;
}

.listPrice img{
    opacity: 0.8;
}
.listPrice li{
    font-family:<?php echo $specialFont; ?> !important;
    font-size: 1.8rem;
    list-style-type: none !important;
    text-align: right;
    border-bottom: 1px solid rgba(0,0,0,0.5);
    line-height: 2;
    padding-right: 1rem;
}
.listPrice li:last-child{
    width: 90%;
}
.btnOffer{
    padding: 0.5rem 1.3rem;
    font-family:<?php echo $titleFont; ?> ;
    font-size: 1.7rem;
    color: white;
    font-weight: bold;
    background-color: <?php echo $fourthColor; ?>;
    border: 2px solid <?php echo $fourthColor; ?>;
}
.btnOffer:hover{
    color: <?php echo $fourthColor; ?>;
}

.postcardHeader{
    position: relative;
    height: calc(100vh + 62px);
    
}

.postcardHeader::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(128,129,129,0) 0%, rgba(32,32,32,0.8) 50%, rgba(2,0,36,1) 100%); 


}

.postcardHeader h1{
    font-family:<?php echo $specialFont; ?> ;
    font-size: 7rem;
    font-weight: bold;
    color: <?php echo $fourthColor; ?>;
    margin: 0;

}
.grayFilter{
    filter: grayscale();
}
.card-front{
    border: 1rem solid white;

}
.card-back{
    background-color: rgba(255, 255, 255, 0.552);
    padding: 0 4rem;
}
.listPrice2{
    font-family:<?php echo $specialFont; ?> ;
    font-size: 2.5rem;

}
.listPrice2 li{
    list-style-type: none !important;
    line-height: 2;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
}

.spanColor{
    color: black;
}
.colorDest{
    color: <?php echo $fourthColor; ?>;

}
.progContainer h2{
    font-family:<?php echo $titleFont; ?> ;
    font-size: 5rem;
    font-weight: bold;
    color: <?php echo $fourthColor; ?>;
    margin-bottom: 2rem;


}
.progContainer p{
    font-family:<?php echo $textFont; ?> ;
    font-size: 2rem;
    line-height: 2;
    padding: 0 4rem;


}
.bgColor{
    background-color: rgba(232, 119, 26, 0.4);
    background: linear-gradient( rgba(232, 119, 26, 0.4), rgba(232, 119, 26, 0.1));
}
.vh-50{
    height: 50vh;
}
.headerServicesImg{
    background-image: url('/images/services.jpg');
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;

}
.headerServicesImg::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
}
.headerServicesImg h1{
    background-color:<?php echo $fourthColor; ?> ;
 font-family:<?php echo $titleFont; ?> ;
 font-size: 4rem;
 font-weight: bold;
 color: white;
 z-index: 1;
 padding: 0 2rem;
}
.bgColorOr{
    background-color: <?php echo $secondColor; ?> ;
}
.cardB img{
    width: 100%;
    height: 250px;
}
.cardB h5{
    font-family:<?php echo $titleFont; ?> ;
    font-size: 2rem;
    padding: 0 2rem 0 1rem;
    color: white;
    right: 1rem;
    top:2rem;
    background-color:<?php echo $fourthColor; ?> ;

}
.cardB p{
    font-family:<?php echo $textFont; ?> ;
    font-size: 1.5rem;


}
.circle{
    border: 1px dashed black;
    border-radius: 50%;
    width: 300px;
    height: 300px;
}
.plus{
    border: 1px solid red;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    display: flex;
    z-index: 1;
}
.member{
    border-radius: 50%;
    width: 100px;
    height: 100px;
    transition: all 0.5s;
    background-position: center;
    background-size: cover;
}
.headerHeight{
    height: 100%;
}

/* MEDIA QUERIES */

@media screen and (min-width: 768px) {
    .headerHeight{
        height: calc(100vh + 62px);
    }
   .headerImg{
    height: 100%;
   }
}