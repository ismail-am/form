


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Event Registration</title>
</head>
<body>



<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <!----- Logo ---------------------------------------------------------->
                                <img class="col-md-10" src="light.png" alt=""> <br><br>
                                <div style="text-align:center;">Event Registration</div>
                        </div>
                        <div class="card-body">
                        <form action="success.php" method="POST">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email_address" name="email_address" class="form-control" name="email-address" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Age</label>
                                    <div class="col-md-6">
                                    	<select class="form-control" id="Age" name="Age" required>
  										  <option value="1">* - 18</option>
  										  <option value="2">18 - 24</option>
  										  <option value="3">24 - 30</option>
  										  <option value="4">30 - 40</option>
  										  <option value="5">40 - *</option>
  										</select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="tel" id="phone_number" name="phone_number" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">City</label>
                                    <div class="col-md-6">
                                        <input type="text" id="city" class="form-control" name="city" required>
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                    <input class="btn btn-primary" type="submit" value="Submit" name="myform" >
                                        <!-- <button type="submit" value="c" name="myform" class="btn btn-primary"> -->
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <br>
                    </div><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=CULTURAL%2BCOMPLEX%2BAIT%2BMELLOUL&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><span style="font-size:12px;">Werbung: <a href="https://www.pureblack.de">pureblack.de</a></span><a href="https://www.embedgooglemap.net/elegantthemes/" class="lic" rel="nofollow">Divi. The Ultimate WordPress Theme.</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.lic{position:absolute;z-index:999;bottom:-14px;right:0;font-size:11px;font-family:arial;color:#666;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
        </div>
        
    </div>

</main>


<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<script src="Form.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>