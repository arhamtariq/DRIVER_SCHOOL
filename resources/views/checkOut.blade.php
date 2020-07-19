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
    <style>
    .breadcrumb.breadcrumb_bg
    {
        height: 87px;
    }
      #myModal
    {
        z-index: 16111;
    }
    * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body, html {
  color: #373F4A;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: normal;
}

iframe {
  margin: 0;
  padding: 0;
  border: 0;
}

button {
  border: 0;
}

hr {
  height: 1px;
  border: 0;
  background-color: #CCC;
}

fieldset {
  margin: 0;
  padding: 0;
  border: 0;
}


#form-container {
  position: relative;
  width: 380px;
  margin: 0 auto;
  top: 50%;
  transform: translateY(-50%);
}

.label {
  font-size: 14px;
  font-weight: 500;
  line-height: 24px;
  letter-spacing: 0.5;
  text-transform: uppercase;
}

.third {
  float: left;
  width: calc((100% - 32px) / 3);
  padding: 0;
  margin: 0 16px 16px 0;
}

.third:last-of-type {
  margin-right: 0;
}

/* Define how SqPaymentForm iframes should look */
.sq-input {
  box-sizing: border-box;
  border: 1px solid #E0E2E3;
  border-radius: 4px;
  outline-offset: -2px;
  display: inline-block;
  -webkit-transition: border-color .2s ease-in-out, background .2s ease-in-out;
     -moz-transition: border-color .2s ease-in-out, background .2s ease-in-out;
      -ms-transition: border-color .2s ease-in-out, background .2s ease-in-out;
          transition: border-color .2s ease-in-out, background .2s ease-in-out;
}

/* Define how SqPaymentForm iframes should look when they have focus */
.sq-input--focus {
  border: 1px solid #4A90E2;
  background-color: rgba(74,144,226,0.02);
}


/* Define how SqPaymentForm iframes should look when they contain invalid values */
.sq-input--error {
  border: 1px solid #E02F2F;
  background-color: rgba(244,47,47,0.02);
}

#sq-card-number {
  margin-bottom: 16px;
      height: 51px;
 /* height: 25%;*/
}

/* Customize the "Pay with Credit Card" button */
.button-credit-card {
  width: 100%;
  height: 56px;
  margin-top: 10px;
  background: #4A90E2;
  border-radius: 4px;
  cursor: pointer;
  display: block;
  color: #FFFFFF;
  font-size: 16px;
  line-height: 24px;
  font-weight: 700;
  letter-spacing: 0;
  text-align: center;
  -webkit-transition: background .2s ease-in-out;
     -moz-transition: background .2s ease-in-out;
      -ms-transition: background .2s ease-in-out;
          transition: background .2s ease-in-out;
}

.button-credit-card:hover {
  background-color: #4281CB;
}


#error {
  width: 100%;
  margin-top: 16px;
  font-size: 14px;
  color: red;
  font-weight: 500;
  text-align: center;
  opacity: 0.8;
}
#errorMessages
{
    margin-left: auto; margin-right: auto;
}
#sq-expiration-date
{
     height: 51px;
}
#sq-cvv{
        height: 51px;
}
#sq-postal-code
{
     height: 51px;
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
  
                 
    
                  
<section class="blog_part ">
   <div class="container">
   <pre>
       
   </pre>
   @include('messages')     
    <h2>Booking Details</h2>
    <p>Instructor's Name <b>Ali</b></p>
    <p>Appointment  Date <b>03/02/2019</b></p>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Package Description</th>
        <th>Total</th>
   
      </tr>
    </thead>
    <tbody>
        <td>July</td>
        <td>100$</td>
     
      </tr>
    </tbody>
  </table>
  <button class="btn btn-success"  data-toggle="modal" data-target="#myModal">Book Now</button>
  </div>     
    </section>

    <!--================Blog Area =================-->

   @include('footer')
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Book Now</h4><br>
        <div id="errorMessages" class="alert alert-danger" style="display: none"></div>    
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          
        </div>
        <div class="modal-body">
            <div id="sq-ccbox">
    <!--
      Be sure to replace the action attribute of the form with the path of
      the Transaction API charge endpoint URL you want to POST the nonce to
      (for example, "/process-card")
    -->
    <form id="nonce-form" novalidate action="/paymentProcesss" method="post">
    @csrf    
      <fieldset>
        <span class="label">Card Number</span>
        <div id="sq-card-number"></div>

        <div class="third">
          <span class="label">Expiration</span>
          <div id="sq-expiration-date"></div>
        </div>

        <div class="third">
          <span class="label">CVV</span>
          <div id="sq-cvv"></div>
        </div>

        <div class="third">
          <span class="label">Postal</span>
          <div id="sq-postal-code"></div>
        </div>
      </fieldset>

      <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">Pay </button>

      <div id="error"></div>

      <!--
        After a nonce is generated it will be assigned to this hidden input field.
      -->
      <input type="hidden" id="amount" name="amount" value="100">
      <input type="hidden" id="card-nonce" name="nonce">
    </form>
  </div> 
        <!-- <div class="form-group ">
        <form id="nonce-form" novalidate>    
          <div class="col-lg-8">
            <label for="ex1"><b>Credit Card</b></label>
            <input class="form-control" id="ex1" type="text" placeholder="XXXX XXXX XXXX XXXX">
         </div>
        </div>

        <div  style="  display: inline-flex">
        <div class="col-lg-4">
            <label for="ex1"><b>Expiration</b></label>
            <input class="form-control" id="ex1" type="text" placeholder="MMY/YY">
  
        </div>
        <div class="col-lg-4">
            <label for="ex1"><b>CVV</b></label>
            <input class="form-control" id="ex1" type="text" placeholder="CVV">

        </div>
        <div class="col-lg-4">
            <label for="ex1"><b>Postal</b></label>
            <input class="form-control" id="ex1" type="text" placeholder="12345">

        </div>

        </div>     -->
       
      





          <!-- body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
      <script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform">
    </script>
    <!-- link to the local SqPaymentForm initialization -->
    <script type="text/javascript" src="js/sqpaymentform.js"></script>
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
</body>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) {
    if (SqPaymentForm.isSupportedBrowser()) {
      paymentForm.build();
      paymentForm.recalculateSize();
    }
  });
   function redirectToCourses()
   {
    window.location.href="/displayCourses";
   }
</script>
</html>