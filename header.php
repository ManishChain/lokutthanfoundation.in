
<header id="header" class="header d-flex align-items-center fixed-top" style="height:60px;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between" >

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
       <!-- <img id="logo-black" src="assets/img/lokutthan-logo-white.png" alt="Black Logo" style="margin-left: -150px; width: 270px;">
            <img id="logo-white" src="assets/img/lokutthan-logo-black.png" alt="White Logo" style="display:none; margin-left: -150px; width: 270px;">
-->
            <h1 class="sitename">लोक उत्थान पहल फाउंडेशन</h1> <span>.</span>
      </a>
     <!-- <img id="additional-image" class="additional-image" src="assets/img/additional-image.png" alt="Additional Image" style="width: 100px;">
-->
      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active" style="font-weight: bold;">Home</a></li>
          <li><a href="about.php" style="font-weight: bold;">About</a></li>
       <!--   <li><a href="about.php" style="font-weight: bold;">About</a></li>-->

         
      <!-- <li><a href="education.php"></a></li>-->
       
         <!-- <li><a href="projects.php">Projects</a></li>-->
      <!--    <li><a href="blog.php">Blog</a></li>-->
       <!--workarea-->
       <li class="dropdown"><a href="workarea.php"><span style="font-weight: bold;">WorkArea</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
         <li class="dropdown"><a href="#"><span>Education</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul style="left: +60%;">
                  <li><a href="workarea.php#workarea">Competitive Program(CEUT)</a></li>
                  <li><a href="workarea.php#workarea2">Regular Teaching (10th to 12th)</a></li>
                </ul>
              </li>
              <li><a href="workarea.php#workarea3">Employment</a></li>
              <li><a href="workarea.php#workarea4">Skill Training</a></li>
              <li><a href="workarea.php#workarea8">Environment</a></li>
              <li><a href="workarea.php#workarea6">Job-oriented</a></li>
              <li><a href="workarea.php#workarea10">Self Help Group<br>(For Female Only)</a></li>
            </ul>
          </li>
         
         
          <!--endworkarea-->
          <li class="dropdown">
    <a href="team.php"><span style="font-weight: bold;">Team</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <ul>
       <!-- <li style="margin-bottom: -10px;"><a href="team.php#advisor">Advisory</a></li>-->
       <li><a href="team.php#advisor">Advisory</a></li>
        <li><a href="team.php#team2">Management</a></li>
        <li><a href="team.php#team3">Office Bearer</a></li>
        <li><a href="volunteer.php">Volunteer</a></li>
    </ul>
</li>

          <!--workarea-->
        <!--  <li class="dropdown"><a href=""><span style="font-weight: bold;">WorkArea</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
         <li class="dropdown"><a href="#"><span>Education</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="comptativeprogram.php">Comptative Program(CEUT)</a></li>
                  <li><a href="#">Regular Teaching (10th to 12th)</a></li>
                </ul>
              </li>
              <li><a href="#">Employment</a></li>
              <li><a href="#">Skill Training</a></li>
              <li><a href="#">Environment</a></li>
              <li><a href="#">Job-oriented</a></li>
              <li><a href="#">Self Help Group<br>(For Female Only)</a></li>
            </ul>
          </li>-->
         
         
          <!--endworkarea-->
          <li><a href="contact.php" style="font-weight: bold;">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
  <script>
    window.addEventListener('scroll', function() {
        var header = document.getElementById('header');
        var logoBlack = document.getElementById('logo-black');
        var logoWhite = document.getElementById('logo-white');
        var additionalImage = document.getElementById('additional-image');
        
        if (window.scrollY > 100) {
            logoBlack.style.display = 'none';
            logoWhite.style.display = 'block';
            additionalImage.style.display = 'block';
        } else {
            logoBlack.style.display = 'block';
            logoWhite.style.display = 'none';
            additionalImage.style.display = 'none';
        }
    });
</script>

  

  
