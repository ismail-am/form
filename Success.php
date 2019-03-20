<?php
        $ready =false;
        
    //     echo "<pre>",print_r($GLOBALS,true),"</pre>";
       if($_POST['full-name']){
            
            // $Age= $_POST['Age'];
            // $mail        = $_POST['email-address'];
            // $mobile      = $_POST['phone_number']; 
            // $address     = $_POST['Address'];
            // $city     = $_POST['City'];
            $fname       = $_POST['full-name'];        
            $date = date_create();
            $time = date_format($date, 'l d F Y H:i:s') . "\n";
        
            $dated=date_create("2019-04-20 14:00:00");
            $datef=date_create(" 18:00:00");
            $schedule= date_format($dated,"l d F Y H:i:s").' - '.date_format($datef,"H:i:s");
    
            $ready =true;
        }else{
            header('location:Form.php');
        }

        ?> 

<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" type="text/css" href="start.css">
</head>
 
<body>
<td>STUDENT REGISTRATION FORM</td>

 <form action="print.php">
<table align="center" cellpadding = "10">
 
<?php
   if($ready)
   {
    require_once __DIR__."/vendor/autoload.php";
        $fn = 'You can do this';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('
    <table align="center" cellpadding = "10" cellspacing = "10">
    
        <!----- Logo ---------------------------------------------------------->
        <br><br><br><br><br><br><br><br><br><br>
        <tr>
            <td>  <img   src="light.png" alt="">  </td>
        </tr>
        <br><br><br><br><br><br><br><br><br><br>
        <!----- FULL Name ---------------------------------------------------------->
    
    <tr>
        <td>FULL NAME</td>
        <td>  ' . $fname . '  </td>
    </tr>
     
    
    
    <!----- Location ---------------------------------------------------------->
    <tr>
        <td>Location</td>
        <td>  Cultural Center,Ait Melloul  </td>
    </tr>
    
    <!----- Program ---------------------------------------------------------->
    <tr>
        <td>Planning : </td>
        <td> 
        '. $schedule . '
           </td>
    
    </tr>
    
    <!----- Time Stamp ---------------------------------------------------------->
    <tr>
        <td>Created at : </td>
        <td> 
        '. $time . '
           </td>
    
    </tr>
    </table>
    
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br>
    
        <h2>
        <p>Do Not Forget To Bring This Ticket With You !  </p>
        <small style="font-size:14px ">This ticket is free</small>
        </h2>');
    $mpdf->Output(); 
   }
   else{
       echo '<h1>Error.</h1>';
   }

?> 

</form>
 
</body>
</html>



