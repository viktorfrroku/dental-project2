<?php
require_once "./classes/header.php";


?>
<section class="contac-us-page">
  <?php
      require_once "./classes/nav.php";



  ?>



<div class="container">
<h2 style="font-size:60px;font-weight:900;margin:0.5em;text-align:center;"><strong>Contact-Us<strong></h2>
   <div class="d-flex justify-content-center">
       <form class="form  auto col-sm-6" action="Contact" method="post" style="  box-shadow: 0 3px 30px rgb(0 0 0 / 0.2);">
         <!-- <h1>CONTACT US</h1> -->
           
         
           <div class="form-group ">
            <div class="input-group">
            <div class="input-group-prepend">
                 <i class="fa-solid fa-user" style="color:#C9145A"></i>
            </div>             
              <input type="text" name="Surname" class="form-control" placeholder="Name Surname" required/>
              </div>
           </div>  

         
          <div class="form-group "> 
            <div class="input-group">
              <div class="input-group-prepared">
              <i class="fa-solid fa-phone" style="color:#C9145A"></i>
              </div> 
              <input type="text"  name="Phone" class="form-control" placeholder="Phone" required/>
          </div>
          </div>





          <div class="form-group">
          <div class="input-group">
              <div class="input-group-prepared">
          <i class="fa-solid fa-envelope" style="color:#C9145A"></i>
            </div>
          <input type="text"  name="Email" class="form-control" placeholder="Email" required/>
          </div>
            </div>
 
 
          <div class="form-group ">
          <div class="input-group">
              <div class="input-group-prepared">
          <i class="fa-solid fa-message" style="color:#C9145A"></i>
              </div>
              <textarea type="text" name="Message" class="form-control" placeholder="Message" cols="50" required></textarea>
             </div>
          </div>




         <div class="form-group ">
          <button type="submit" name="send" class="">submit</button>
       </div>
</form>
</div>
</div>

</section>

<?php
 require_once "./classes/footer.php";
?>
