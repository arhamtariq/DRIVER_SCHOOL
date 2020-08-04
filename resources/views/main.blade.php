@extends('header')
@section('css')
<!-- https://www.pexels.com/search/drivering/ 
https://www.freepik.com/free-photo/happy-woman-looking-man-driving-car_2751470.htm#page=1&query=driving&position=17-->
<style>
.notransition {
 /* -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  transition: none !important;*/
}
  .owl-carousel .owl-item img
  {
    display: none;
  }
  .tour_pack_content
  {
    margin-top: 4%;
  } 
   .search_form{
      
        /*top: -391px !important;*/
    }
.banner_part{
  
    background-image:  url(/img/wal9.jpg);
    background-color: #2F5496;
    transition: none !important; 
     transition-delay: 0s !important;
         height: 900px;
   /*  transition: background-image 0s ease-in-out;*/
   } 
   .banner_part:after {

    background-image:none !important;    
    }
    .search_your_country .search_form {
            background-color:transparent;
            top: -360px;
    }
    .search_your_country .search_form .search_btn {
    background-color: #FF0000;
    }
    .search_your_country{
        background-color: initial;
    }
    .footer_part {
    
    top: -91px;
}

</style>
@endsection
@section('body')

    <!-- Header part end-->
@include('navBar')
    <!-- banner part start-->
    <section class="banner_part notransition">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>EARNER'S BAY</h5>
                            <marquee width="100%" direction="up" height="100px" style="color: #FF0000;font-size: 22px;font-weight: 800;" scrollamount="2">
                            WELCOME TO  Learner's Bay  DRIVING SCHOOL

                            <br>Fully Qualified Instructors
                            <br>Flexibility
                            <br>Multilingual Instructors 
                            <br>Free theory test app
                            <br>Range of packages to suite your individual need
                            <br>Free access to lessons notes, books and study 


                            </marquee>
                           <!--  <h1>Driving School</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- banner part start-->

    <!-- banner part start-->
    <section class="search_your_country">
        <div class="container-fluid">
            <div class="row align-items-center">
           <!--      <h5>Enter Postal Code</h5> -->
                <div class="col-lg-12">

                    <div class="search_form">
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                         {{session()->get('error')}}
                        </div>
                        @endif
                        <form action="#">
                            <div class="form-row">

                                <div class="col-lg-6">
                                    <div class="search_form_iner">
                                
                                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                            <input type="text" name="postCode" id="post_codes" placeholder="Post Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Post Codes'" required="" class="single-input">

                                      
                                        <a href="javascript:null()" class="search_btn" onclick="searchPostCode()">search</a>
                                    </div>
                                </div>
                               <!--  <div class="col-lg-4">
                                    <a href="#" class="search_btn">search</a>
                                </div>  -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" style="display:none">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_donation_item">
                       <!--  <img src="img/icon/money_bag.svg" alt="#"> -->
                        <h4>donation</h4>
                        <p>Over 1.2 million driving lessons delivered in 2018 </p>
                        <a href="#" class="read_btn">read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_donation_item">
                       <!--  <img src="img/icon/money_bag.svg" alt="#"> -->
                        <h4>donation</h4>
                        <p>98% of our recently passed pupils would recommend us</p>
                        <a href="#" class="read_btn">read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_donation_item">
                     <!--    <img src="img/icon/money_bag.svg" alt="#"> -->
                        <h4>donation</h4>
                        <p>98% of our recently passed pupils would recommend us</p>
                        <a href="#" class="read_btn">read more</a>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
<!--     <section class="feature_part padding_top" style="display:none">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <img src="img/about_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="img/section_tittle_img.png" alt="#">
                        <h2>Amazing tour</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                            ipsum suspendisse ultrices gravida Risus commodo viverra maecenas
                            accumsan lacus vel facilisis. </p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                            ut</span>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_1.png" alt="">
                                    <h4>london</h4>
                                    <p>35 Places</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_2.png" alt="">
                                    <h4>Kashmir</h4>
                                    <p>75 Places</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_3.png" alt="">
                                    <h4>chaina</h4>
                                    <p>85 Places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="img/animate_icon/Shape-1.png" alt="" class="feature_icon_1">
        <img src="img/animate_icon/Shape-2.png" alt="" class="feature_icon_2">
        <img src="img/animate_icon/Shape-3.png" alt="" class="feature_icon_3">
    </section> -->
    <!-- upcoming_event part start-->

    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <img src="img/section_tittle_img_2.png" alt="" style="max-width:50%">
                        <h2>Our Services <!-- <span>place</span> --> </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit 
                        sed  do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 ">
                    <div class="single_popular_place">
                        <img src="img/icon/learn_drive_2.svg" alt="">
                        <h4>LEARN TO DRIVE</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        <a href="#" class="btn1">Join Now</a>
                    </div>
                </div><div class="col-lg-4 col-sm-6">
                    <div class="single_popular_place">
                        <img src="img/icon/courses_title.svg" alt="">
                        <h4>DISCOVER OUR COURSES</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        <a href="#" class="btn1">View All</a>
                    </div>
                </div><div class="col-lg-4 col-sm-6">
                    <div class="single_popular_place">
                        <img src="img/icon/instructor.svg" alt="">
                        <h4>Become an instructor</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        <a href="#" class="btn1">Join now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->

    <!-- about_us part start-->
    <section class="place_details section_padding" style="display:none">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="place_detauls_text">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="place_details_content">
                                    <img src="img/section_tittle_img_2.png" alt="#" style="max-width: 30%">
                                    <h2>Amazing tour</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                        ipsum suspendisse ultrices gravida Risus commodo viverra maecenas
                                        accumsan lacus vel facilisis. </p>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                    ut</span>
                                </div>
                            </div>
                        </div>
                        <img src="img/plase_details_1.png" alt="#">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="place_details_img">
                        <img src="img/plase_details_2.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="view_all_btn">
            <a href="#" class="view_btn">view all</a>
        </div>
    </section>
    <!-- about_us part end-->

    <!-- pricing part start-->
    <section class="tour_package section_padding">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="tour_package_cotent owl-carousel">
                        <div class="single_tour_package">
                            <img src="img/tour_plan_1.png" alt="">
                            <div class="tour_pack_content">
                                <h4>Sawpalo, Brasil</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipi
                                    elit sed do eiusmod tempor incididunt</p>
                                <div class="tour_content_rating">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <a href="#" class="btn1">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_tour_package">
                            <img src="img/tour_plan_2.png" alt="">
                            <div class="tour_pack_content">
                                <h4>Sawpalo, Brasil</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipi
                                    elit sed do eiusmod tempor incididunt</p>
                                <div class="tour_content_rating">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <a href="#" class="btn1">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_tour_package">
                            <img src="img/tour_plan_1.png" alt="">
                            <div class="tour_pack_content">
                                <h4>Sawpalo, Brasil</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipi
                                    elit sed do eiusmod tempor incididunt</p>
                                <div class="tour_content_rating">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <a href="#" class="btn1">join now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_tour_package">
                            <img src="img/tour_plan_2.png" alt="">
                            <div class="tour_pack_content">
                                <h4>Sawpalo, Brasil</h4>
                                <p> Lorem ipsum dolor sit amet, consectetur adipi
                                    elit sed do eiusmod tempor incididunt</p>
                                <div class="tour_content_rating">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <a href="#" class="btn1">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-3 offset-lg-1 col-sm-6">
                    <div class="tour_pack_content">
                        <img src="img/section_tittle_img_2.png" alt="" style="max-width: 30%">
                        <h2>Gallery</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit 
                        sed  do eiusmod tempor incididunt ut</p>
                        <a href="#" class="btn_1">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing part end-->

    <!-- cta part start-->
    <section class="cta_part section_padding" style="display:none">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="cta_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                                with new offers</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email address" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                            <div class="input-group-append" id="button-addon4">
                                <a href="#" class="subs_btn">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->

    <!-- blog part start-->
    <section class="blog_part " style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <img src="img/section_tittle_img.png" alt="">
                        <h2>our blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit 
                        sed  do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="img/blog/blog_1.png" alt="">
                        <div class="blog_text">
                            <h2>Luxerious Car Rental</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                    <p>13th Dec</p>
                                </li>
                                <li>
                                    <i class="ti-heart"></i>
                                    <p>15</p>
                                </li>
                                <li>
                                    <i class="far fa-comment-dots"></i>
                                    <p>10</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="img/blog/blog_2.png" alt="">
                        <div class="blog_text">
                            <h2>Luxerious Car Rental</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                    <p>13th Dec</p>
                                </li>
                                <li>
                                    <i class="ti-heart"></i>
                                    <p>15</p>
                                </li>
                                <li>
                                    <i class="far fa-comment-dots"></i>
                                    <p>10</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="img/blog/blog_3.png" alt="">
                        <div class="blog_text">
                            <h2>Luxerious Car Rental</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                    <p>13th Dec</p>
                                </li>
                                <li>
                                    <i class="ti-heart"></i>
                                    <p>15</p>
                                </li>
                                <li>
                                    <i class="far fa-comment-dots"></i>
                                    <p>10</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
@include('footer')    
@endsection

@push('scripts')
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script>
  
   $(document).ready(function() {
    $( "#post_codes" ).autocomplete({
 
        source: function(request, response) {
            $.ajax({
            url: "{{url('getPostalCodes')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    //console.log(obj.city_name);
                    return obj.postal_code;
               }); 
 
               response(resp);
            }
        });
    },
    minLength: 1
 });
});
function searchPostCode()
{
    if($('#post_codes').val().length ==0)
      {
        return false;
      }  
    window.location.href="/pickup-location?post_code="+$('#post_codes').val()+"";
    
}  

//setInterval(update, 5000);
var i =0;
//setInterval(update, 5000);
var i =0;
function update(){
if(i==0)
{
 $('.banner_part').css('background-image','url(/img/wal3.jpg)');
 i = i+1;
 }
 else if(i==1)
 {

 $('.banner_part').css('background-image','url(/img/wal4.jpg)');
i = i+1;
 }
 else
 {
 $('.banner_part').css('background-image','url(/img/wal5.jpg)');
i = 0;
 }


}
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d5628f5eb1a6b0be607c315/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

<!--End of Tawk.to Script-->
  </script>
@endpush

<!--  -->