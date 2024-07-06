<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;

class PublicController extends Controller
{
 
    public function home(){
        $postcards= [
            ['Destination'=>'Italy', 'Location'=>'Tuscany', 'Activity'=>'Biking','Price'=>'1000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio. 
            ','img'=>'/images/biking.jpg'],
            ['Destination'=>'Australia', 'Location'=>'Tasmania','Activity'=>'Canoeing','Price'=>'3000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/canoeing.jpg'],
            ['Destination'=>'South America', 'Location'=>'Patagonia','Activity'=>'Horse Riding','Price'=>'5000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/horseRiding.jpg'],
            ['Destination'=>'France', 'Location'=>'Alps','Activity'=>'Hiking','Price'=>'5000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/hiking.jpg']
            ];
        return view('welcome', ['postcards'=>$postcards]);
    }
    public function showPostcard($location){
        $postcards= [
            ['Destination'=>'Italy', 'Location'=>'Tuscany', 'Activity'=>'Biking','Price'=>'1000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio. 
            ','img'=>'/images/biking.jpg'],
            ['Destination'=>'Australia', 'Location'=>'Tasmania','Activity'=>'Canoeing','Price'=>'3000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/canoeing.jpg'],
            ['Destination'=>'South America', 'Location'=>'Patagonia','Activity'=>'Horse Riding','Price'=>'5000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/horseRiding.jpg'],
            ['Destination'=>'France', 'Location'=>'Alps','Activity'=>'Hiking','Price'=>'5000€', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/hiking.jpg']
            ];
        foreach ($postcards as $postcard) {
            if(  $location == $postcard['Location'] ){
                return view('postcard',['postcard'=>$postcard]);
            }
        }
    }
    public function services(){
        $services= [
            ['Service'=>'Trip Planning', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio. 
            ','img'=>'/images/planning.jpg'],
            ['Service'=>'Transport Booking', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/transportBooking.jpg'],
            ['Service'=>'Accomodation Booking', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/accomodation.jpg'],
        ];
        return view('services', ['services'=>$services]);
    }
    public function about(){
        $team= [
            ['Name'=>'John Smith', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio. 
            ','img'=>'/images/pic-about-m.jpg'],
            ['Name'=>'Jane Doe', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/pic-about-f.jpg'],
            ['Name'=>'James Star', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/pic-about-m2.jpg'],
            ['Name'=>'Caroline Fitz', 'Description'=> ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim non aut ab at quisquam minus hic nulla saepe maiores? Voluptatum tempora placeat distinctio.','img'=>'/images/pic-about-f2.jpg'],

        ];
        return view('about', ['team'=>$team]);
    }
}
