<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>travel</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .breadcrumb.breadcrumb_bg
    {
        height: 87px;
    }
    #myModal
    {
        z-index: 16111;
    }
    .blog_part .single_blog_part {
    background-color: #ffcc00;

    }
    .blog_text
    {
        margin-left: 2%;
    }
    </style>
</head>

<body>
    <!--::header part start::-->
    @include('navBar')
    <!-- Header part end-->


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg " >
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                          
                        </div> 
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- breadcrumb start-->
   
    <!--================Blog Area =================-->
                  <pre>
                      
                  </pre>
       
                 
    
                  
    <section class="blog_part ">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_tittle">
                 <!--        <img src="img/section_tittle_img.png" alt=""> -->
                        <h2>List of Courses</h2>
                    
                        <p>Offered by <b>{{$courses_info[0]->driverName}}</b> </p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($courses_info as $info)    
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part" >
                          
                        <div class="blog_text">
                            <h2 style="color:#fff">{{$info->name}}</h2>
                            
                           
                            <!-- <a href="javascript:null()" class="genric-btn danger circle arrow" onclick="redirectToCourses()">View Courses<span class="lnr lnr-arrow-right"></span></a> -->
                             <ul>
                                <li>
                                    <i class="ti-timer"></i>
                                    <p>{{$info->duration}} Hours</p>
                                </li>
                                <li>
                                    <i class="fa fa-gbp" aria-hidden="true"></i>
                                   <!-- 
                                    -->
                                    <p>{{$info->price}}</p>
                                </li>
                                <li>
                                  <!--   <i class="far fa-comment-dots"></i>
                                    <p>10</p> -->
                                </li>
                            </ul>
                             <p>{{$info->description}}</p>
                           
                         <a href="#" class="genric-btn success circle arrow" data-toggle="modal" data-target="#myModal"
                         onclick="assignCourseId({{$info->id}})">Book Now<span class="lnr lnr-arrow-right"></span></a>     
                        </div>
                    </div>
                </div>
               @endforeach 
                <!--  -->
               
                <!-- <div class="col-lg-4 col-sm-6">
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
        </div> -->
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
     <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
    <section class="blog_area padding_top" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_3.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_4.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                               <div class="form-group">
                                  <div class="input-group mb-3">
                                     <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                     <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                     </div>
                                  </div>
                               </div>
                               <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                            </form>
                         </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="img/post/post_1.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_2.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_3.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_4.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bootrsap modal -->
   

    <!--  -->
    <!--================Blog Area =================-->

   @include('footer')
    <!--::footer_part end::-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Provide Information and book online</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="/bookCourse" onsubmit="validate();return false;" id="bookingForm">
        @csrf 
        <input type="hidden" name="driverID" value={{$driver_id}}>
        <input type="hidden" name="courseID" id="courseID" >
        <div class="col-lg-6">
        <div class="alert alert-success" style="display:none" id="message">
         
        </div>
        <div class="alert alert-danger" style="display:none" id="error">
         
        </div>
        </div>   
        <div class="col-lg-6">
        <label>Are you student?</label>    
        <div class="radio">
        <label><input type="radio" name="std_status" checked value="yes">Yes</label>
        </div>
        <div class="radio">
        <label><input type="radio" name="std_status" value="no">No</label>
        </div>
        </div>
        <div class="col-lg-6">
        <label>First Name</label>
        <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
        </div>
        <div class="col-lg-6">
        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
        </div>
        <div class="col-lg-6">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input">
        </div>
        <div class="col-lg-6">
        <label>Telephone</label>
        <input type="text" name="telephone" placeholder="Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input">
        </div>
        <div class="col-lg-6">
        <label>Post Code</label>
        <input type="text" name="postcode" placeholder="Post Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Post Code'" required="" class="single-input">
        </div>
        <div class="col-lg-6">
        <label>Gear Box Type?</label>    
        <div class="radio">
        <label><input type="radio" name="gear_status" checked value="Manual">Manual</label>
        </div>
        <div class="radio">
        <label><input type="radio" name="gear_status" value="Automatic">Automatic</label>
        </div>
        </div>
         <div class="col-lg-6">
        <label>First Drive Date</label>
        <input type="date" name="fdd" id="fdd" onchange="checkDate()" placeholder="Enter Date of first drive" onfocus="this.placeholder = ''"  required="" class="single-input">
        </div>
         <div class="col-lg-6">
        <pre>  </pre>    
        <div class="radio">

        <label><input type="radio" name="terms_status" >Do you agree with our <A href="/Learnersbay_Terms_and_Conditions_inclusive_of_privacy_policy.pdf" target="_blank">Terms & Conditions</a>?</label>
        </div>
          <!-- <p>This is a large modal.</p> -->
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    
    
    
    
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>
    function validate()
    {
    //
    if ($('input[name=terms_status]:checked').length > 0) {
    
    //alert('Working');
    $('#error').text('');
    $('#error').hide();
    $('#bookingForm').submit();
    }
    else
    {
       $('#error').text('Terms and conditions not agreed');
       $('#error').show();
       $('#myModal').scrollTop(0);

    }
    }
    function checkDate(){
    var idate = document.getElementById("fdd"),
      
        dateReg = /(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])[\/]201[4-9]|20[2-9][0-9]/;

   
    if(isFutureDate(idate.value)){
       $('#error').text('Kindly select future date');
       $('#error').show();
       $('#myModal').scrollTop(0);
       // alert('past date');
      
    } else {
       // alert('Future Date');
        
    }
}
function isFutureDate(idate){
    var today=new Date();
    var current= new Date(idate);
    if(current < today )
    {
        return true;
    }
    else
    {
       return false;
    }
    return;
   /* var today = new Date().getTime(),
        idate = idate.split("/");
      // alert(today);  

    idate = new Date(idate[2], idate[1] - 1, idate[0]).getTime();
    return (today - idate) < 0;*/
}
function assignCourseId($id)
{
    $('#courseID').val($id);
    //alert($id);

}

    </script>
</body>

</html>