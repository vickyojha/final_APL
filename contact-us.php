<?php include_once 'header.php' ?>

<div class="inn-baner-services">
        
<img src="images/contactus.jpg" class="img-responsive" alt="">        
        
 <div class="container">
      <div class="row">
        <div class="col-md-12 non-abs">
            <div class="inn-txt-1">
<h1>Contact Us</h1>
</div>
 </div>  
  </div> 
   </div> 
    </div>   
 
 <div class="base-shape">
        <div class="container-fluid pg-shape-outer hidden-xs">
            <div class="pg-shape-inner" style="padding-top: 30px;">
                <svg viewBox="10 0 980 20" preserveAspectRatio="none" width="100%" height="100">
                    
                    <polygon class="polygon-fill" points="0,20 500,0 1000,20"></polygon>
                </svg>
                <div class="pg-shape-btm"></div>
            </div>
        </div>
    </div>
 
<div id="content">
    
<div class="container">
<div class="row">
<div class="col-md-12">
   
                   
<div class="col-md-6">

    <address class="address-style-2">
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> KP-29A, Jitendra Bhawan,Kailash puri 90 Feet Road,Hanuman Nagar Kankarbagh,patna-800020</p>
        <p><i class="fa fa-phone"></i> +91 85443 02574</p>
        <p><i class="fa fa-mobile" aria-hidden="true"></i> 0612-2350008</p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@aplconstructionpatna.com">info@aplconstructionpatna.com</a></p>
        <p><i class="fa fa-external-link"></i> <a href="aplconstructionpatna.com">aplconstructionpatna.com</a></p>
        <p> <i class="fa fa-clock-o"></i> Monday - Saturday 10:00AM - 6:30PM</p>
    </address>
</div>



<div class="col-md-6">
    <div class="" data-bgcolor="#f5f5f5">
        <h3> 
        </h3>
        <form  id='contact_form' method="post" action='#'>
            <div class="row">
                <div class="col-md-12">
                   
                    <div>
                        <input type="text"  name="name" class="form-control" placeholder="Full Name" maxlength="20" required="">
                    </div>
                    
                    <div>
                        <input type="text" name="mobno" class="form-control" maxlength="12" minlength="10" placeholder="Mobile Number"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" title="Please Enter Your vaild number!" required="" autocomplete="off">
                    </div>
                   
                    <div>
                        <textarea name='query' class="form-control" placeholder="Share Your Requirement / Feedback / Suggestions" maxlength="100"   autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <div id='submit' class="cnt-btn">
                        <input type='submit' name="submit" value='Submit' class="btn btn-line">
                    </div>
                    
                   
                </div>
            </div>
        </form>

    </div>
</div>
</div>
</div>
</div>
        
       
        
</div>
<!--end-->
<!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.871057810691!2d77.07920701443442!3d28.48342958247685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922f02dc0bd%3A0xfa83d69f29ca36cb!2sK-17%2C+DLF+Phase+2%2C+Sector+25%2C+Sarhol%2C+Haryana+122002!5e0!3m2!1sen!2sin!4v1562919106743!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border-top:2px solid#ccc;" allowfullscreen></iframe> -->
<!-- footer begin -->

<?php include_once 'footer.php' ?>


<?php
include "dbconnect.php";

if (isset($_POST['submit'])) {
   $name    = $_POST['name'];
   $mobno   = $_POST['mobno'];
   $query   = mysqli_real_escape_string($conn, $_POST['query']);

   $sql        = "INSERT INTO enquiry_list (enquiry,mobno,name) VALUES('$query','$mobno','$name') ";
   $res        = mysqli_query($conn,$sql);
   if ($res) {

    echo ("<SCRIPT LANGUAGE='JavaScript'>
            swal({
                title: 'Query Sent!',
                icon: 'success',
            })
        </SCRIPT>");

   }
   else{
    echo "<SCRIPT>
        swal('Opps', 'Something Went wrong! Please try Again.)', 'error');
        </SCRIPT>";
    // echo "Error: ". $res ."<br>". $con->error;
   }

}