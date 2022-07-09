<!-- Footer -->
<div class="publicity">
  <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-12">
    <h1>the best smile ever</h1>
        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the </p>
    </div>
  </div>
  </div>
  
 
</div>

<footer class="text-center text-lg-start  text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
  <div class="container">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
       

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
         
            <i class="fas fa-envelope me-3"></i>
            viktor.frroku.test@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
</div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   <small> © 2021 Copyright: </small>
    <small><a class="text-reset fw-bold">Viktor Frroku</a></small>
  </div>
  <!-- Copyright -->
</footer>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="sSOOIYeF"></script>
<script>



</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
   

  // const itemsOne = document.querySelectorAll("#navLinkActive li .nav-link");
  // itemsOne.forEach((itemOne) => {

  //   itemOne.addEventListener("click", () => {
  //     document.querySelector(".nav-link .activing").classList.remove(".activing");
  //     itemOne.classList.add("activing");
  //   });
  // });




      // const items = document.querySelectorAll("ul li a");
      // items.forEach((item) => {
      //    item.addEventListener("click", () => {
      //      document.querySelector("li a").classList.remove("activing");
      //      item.classList.add("activing");
      //    });
      //  });
      // var navbar = document.getElementById("navLinkActive");
      // var navlink = navbar.getElementsByClassName("nav-link");

      // for(var i = 0; i<navlink.length;i++)
      // {
      //   navlink[i].addEventListener("click", function(){
      //     var current = document.getElementsByClassName("activing");
      //     current[0].className = current[0].className.replace("activing","");
      //     this.className += " activing";
      //   })
      // }

      // $(document).ready(function(){
      //   $("#navLinkActive a").click(function(){
      //     $(this).tab("show");
      //   });
      // });


    //   var header = document.getElementById("navLinkActive");
    // var btns = header.getElementsByClassName("nav-item tab");
    // for (var i = 0; i < btns.length; i++) {
    //   btns[i].addEventListener("click", function() {
    //   var current = document.getElementsByClassName("activing");
    //   current[0].className = current[0].className.replace(" activing", "");
    //   this.className += " activing";
    //   });

      // window.onscroll  = function() {scrollFunction()};

      // if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      //   document.getElementById("navbarheader").classList.add("navbar-scroll");
      // }
      // else {
      //   document.getElementById("navbarheader").classList.remove("navbar-scroll");
      // }




      var myNav = document.getElementById('navbarheader');
      
      window.onscroll = function () { 
        console.log("ok");
     if (window.scrollY > 200 ) {
       console.log("other ok");
        myNav.classList.add('navbar-scroll');
        myNav.classList.add('navbar-fixed-top');
        myNav.classList.remove('bg-white');
       
    } 
    else {
     
       // myNav.classList.add("nav-transparent");
       myNav.classList.remove('navbar-scroll');
       myNav.classList.add('bg-white');
       // myNav.classList.remove('navbar-fixed-top');
    }
};

</script>






</body>