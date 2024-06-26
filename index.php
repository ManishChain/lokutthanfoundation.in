<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - लोक उत्थान पहल फाउंडेशन</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php
  include"css_links.php";
  ?>
 
 <style>
   .custom-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content label {
        display: block;
        padding: 8px 16px;
        cursor: pointer;
    }

    .dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    /* Hide the default radio buttons */
    .dropdown-content input[type="radio"] {
        display: none;
    }

    /* Style the custom radio buttons */
    .dropdown-content .radio-button {
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #ccc;
        margin-right: 8px;
        position: relative;
        cursor: pointer;
    }

    /* Style the selected custom radio button */
    .dropdown-content input[type="radio"]:checked + .radio-button::after {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        background-color: #333;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Show dropdown content on hover */
    .custom-dropdown:hover .dropdown-content {
        display: block;
    }
    .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
            padding-top: 60px;
            background-color:

        }
       
        .modal-content {
            background-color: #efe8d4;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
            max-width: 600px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            border-radius: 50%;
            padding: 0 10px;
        }

      
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        

        .form-container input[type="submit"] {
            background-color: transparent;
            color: #feb900;
            border: 2px solid #feb900;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background-color: #feb900;
            color: white;
        }

        /* Style for the button to open the modal */
        #openModalBtn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: transparent;
            color: white; /* White text color */
            border: 2px solid #feb900;
            border-radius: px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none; /* Remove default underline */
        }

        #openModalBtn:hover {
            background-color: #feb900;
            color: white;
            text-decoration: underline; /* Underline text on hover */
        }
        .form-container {
            text-align: center;
        }

        .form-container h5 {
            text-align: center;
            margin: 20px 0;
            color: black;
        }
        .form-container h3 {
            text-align: center;
            margin: 20px 0;
            color: black;
        }

        .close {
    float: left;
    margin-left: 470px;
    font-size: 28px;
    font-weight: bold;
        }
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .form-container {
      background-color: #efe8d4;
        display: flex;
        flex-direction: column;
    }
    .form-container label {
        margin-top: 10px;
    }
    .form-container input,
    .form-container textarea {
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-container input:hover,
    .form-container textarea:hover {
        border-color: #feb900;
    }
    .btn-get-started {
        cursor: pointer;
    }


      .form-container input,
    .form-container textarea {
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s;
    }
    .form-container input:hover,
    .form-container textarea:hover,
    .form-container input:focus,
    .form-container textarea:focus {
        border-color: #feb900;
        outline: none; /* To remove the default outline on focus */
    }
    .custom-dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content label {
        display: block;
        padding: 8px 16px;
        cursor: pointer;
    }

    .dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    /* Hide the default radio buttons */
    .dropdown-content input[type="radio"] {
        display: none;
    }

    /* Style the custom radio buttons */
    .dropdown-content .radio-button {
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #ccc;
        margin-right: 8px;
        position: relative;
        cursor: pointer;
    }

    /* Style the selected custom radio button */
    .dropdown-content input[type="radio"]:checked + .radio-button::after {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        background-color: #333;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Show dropdown content on hover */
    .custom-dropdown:hover .dropdown-content {
        display: block;
    }
    #gender-button {
        width: 390px; /* Adjust width as needed */
        text-align: left; /* Align text to the left */
        white-space: nowrap; /* Prevent wrapping of text */
        overflow: hidden; /* Hide overflow text */
        text-overflow: ellipsis; /* Show ellipsis (...) for overflow text */
    }
    #status-button {
        width: 390px; /* Adjust width as needed */
        text-align: left; /* Align text to the left */
        white-space: nowrap; /* Prevent wrapping of text */
        overflow: hidden; /* Hide overflow text */
        text-overflow: ellipsis; /* Show ellipsis (...) for overflow text */
    }
     
    .form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #21252959;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #ffffffad;
    background-clip: padding-box;
    border: var(--bs-border-width) solid var(--bs-border-color);
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.custom-dropdown {
        position: relative;
        display: inline-block;
    }

    #age {
        outline: none; /* Remove the default outline */
        border-radius: 4px; /* Rounded corners */
        padding: 6px 12px; /* Padding for the dropdown */
        transition: border-color 0.3s; /* Smooth transition for border color */
    }

    #age:focus {
        border-color: #feb900; /* Yellow border on focus */
        box-shadow: 0 0 1px rgba(255, 255, 0, 0.5); /* Optional yellow shadow */
       
    }
     .btn-get-started {
    display: inline-block; /* Display elements inline */
    margin-right: 10px; /* Optional: Adjust margin between elements */
  }
  .button-container {
      display: flex; /* Use flexbox for layout */
      justify-content: space-around; /* Adjust spacing between items */
      align-items: center; /* Center items vertically */
    }

    .btn-get-started {
      margin: 5px; /* Adjust margin between elements */
      text-align: center; /* Center text horizontally */
      padding: 10px 20px; /* Adjust padding for buttons */
      text-decoration: none; /* Remove underline from anchor tag */
      color: white; /* Text color */
      border: none; /* Remove border from buttons */
      cursor: pointer; /* Show pointer cursor on hover */
    
      border-radius: 5px; /* Rounded corners */
    }

    .btn-get-started:hover {
      background-color: #0056b3; /* Darker blue on hover */
    }
    .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px 0;
        }
        
        .btn-get-started {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
           
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 10px;
        }
        
        .btn-get-started:hover {
            background-color: #0056b3;
        }
        
        @media (max-width: 768px) {
            .button-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-get-started {
                width: 80%;
                text-align: center;
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .btn-get-started {
                font-size: 12px;
                white-space: normal; /* Allows text to wrap */
                word-break: break-word; /* Breaks long words if necessary */
                width: 90%; /* Adjust width if necessary */
                padding: 8px 10px; /* Adjust padding to better fit smaller screens */
            }
        }
        .get-started .php-email-form input[type=text], .get-started .php-email-form input[type=email], .get-started .php-email-form textarea {
    font-size: 14px;
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 0;
    color: var(--default-color);
    background-color: 
color-mix(in srgb, var(--background-color), transparent 20%);
    border-color: 
color-mix(in srgb, var(--default-color), transparent 80%);
    border-radius: 10px;
    height: 43px;
}



    </style>
</head>

<body class="index-page">
  <?php
  include"header.php";
  ?>
 

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
             <!-- <h2>लोक उत्थान पहल फाउंडेशन </h2>-->
             <img  src="assets/img/lok-utthan-logo.png" alt="White Logo" >
              <h4>"लोक उत्थान पहल" में आपका स्वागत है </h4>
              <p style="word-break: break-all;">Also known as LUP is a registered Non-Governmental Organization, which started in the year 2014. 
                LUP is a selffunded NGO and work towards the welfare of women and children and the ones who are differently abled.
                At LUP, we believe in creating a world where everyone has the opportunity to thrive. Our initiatives focus on education, healthcare, and community development, ensuring that even the most marginalized individuals can build a better future. Together, we can make a significant difference in the lives of those who need it most.</p>
           <!--   <a href="#get-started" class="btn-get-started">कृपया VOLUNTEER स्वयंसेवक के रूप में प्रवेश करें</a>-->
              <div class="button-container">
              <a href="#get-started" class="btn-get-started">कृपया VOLUNTEER स्वयंसेवक के रूप में प्रवेश करें</a>
        <a href="#donate" class="btn-get-started">DONATE दान करें</a>
        <button id="openModalBtn" class="btn-get-started">Register for NGO Prize</button>
    </div>
          
      <div id="myModal" class="modal" style="display:none;">
    <div class="modal-content" style="position: relative; width: 50%; max-width: 800px; padding: 20px;">
        <span class="close" style="position: absolute; top: 10px; right: 10px; font-size: 24px; cursor: pointer;">&times;</span>
        <div class="form-container" style="padding-top: 40px;">
            <h3 style="margin-top: 0;  font-weight: 600;">Entry Form</h3>
            <h5 style="margin: 0px;">Please provide details for the FIRST LUP PRIZE Ceremony</h5>
            <hr style="border: 1px solid black; width: 100%;">

          <form action="Register.php" method="post">
                <label for="orgName">Organization Name/संगठन का नाम*</label>
                <input type="text" id="orgName" name="organization_name" required>

                <label for="organization_registration_details">Organization Registration Details/संगठन पंजीकरण विवरण*</label>
                <input type="text" id="orgRegDetails" name="organization_registration_details" required>

                <label for="first_name">Organizational Head/संगठन प्रमुख:<br> <hr style="border: 1px solid black; width: 45%;"> First Name/पहला नाम:</label>
                <input type="text" id="firstName" name="first_name">

                <label for="last_name">Last Name/उपनाम:</label>
                <input type="text" id="lastName" name="last_name">

                <label for="email">Email/ईमेल:</label>
                <input type="email" id="email" name="email">

                <label for="phone_number">Phone Number/फ़ोन नंबर:</label>
                <input type="tel" id="phoneNumber" name="phone_number">

                <label for="streetAddress"> Address/पता:</label>
                <input type="text" id="Address" name="address">

                <label for="streetAddress">Street Address/गली का पता:</label>
                <input type="text" id="streetAddress" name="street_address">

                <label for="streetAddress">Street Address line2/सड़क पता पंक्ति 2:</label>
                <input type="text" id="streetAddressline2" name="street_address_line2">

                <label for="state">State / Province/राज्य/प्रान्त:</label>
                <input type="text" id="state" name="state">

                <label for="postalCode">Postal / Zip Code/डाक का / ज़िप कोड:</label>
                <input type="text" id="postalCode" name="postal_code">

                <label for="work2023_2024">Please specify Work done in 2023-2024/कृपया 2023-2024 में किए गए कार्य निर्दिष्ट करें:</label>
                <textarea id="work2023_2024" name="work_done_2023_2024"></textarea>

                <label for="prizeDetails">Please provide details of any other prize received by your organization/कृपया आपके संगठन द्वारा प्राप्त किसी अन्य पुरस्कार का विवरण प्रदान करें:</label>
                <textarea id="prizeDetails" name="prize_details"></textarea>

                <input type="submit" style="margin:0px; padding:10px 30px; " value="Submit" name="submit">
            </form>
          
        </div>
    </div>
</div>

           <!--modelboxend-->
           
           
            </div> <!-- कृपया प्रवेश करें  -->
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets/img/banner2.png" alt="">
        </div>

        <div class="carousel-item ">
          <img src="assets/img/banner1.png" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/banner3 (2).png" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-8.jpeg" alt="">
        </div>

        <div class="carousel-item active  ">
          <img src="assets/img/hero-carousel/hero-carousel-9.png" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->

    <!-- Get Started Section -->
    <section id="get-started" class="get-started section">

      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="content">
              <h1>Become A Volunteer</h1>
              <p>
                <br>
                A volunteer is someone who helps a common cause and who does not expect to get paid for it. 
                <br><br>
                Working for an LUP allows you to contribute to the betterment of society. 
                Your efforts can lead to positive changes in your community
                <br><br>
                Working with LUP gives you life-changing experiences. 
                You engage in work that is meaningful and creates an impact in others' lives. 
                You can get a sense of satisfaction and work with like-minded people. 
                You will experience the feeling of contributing to disadvantaged communities and changing lives.
                <br><br>
                Joining LUP will expose you to different types of people and helps you develop social skills. 
                This gives you a chance to form lasting connections. 
                You can work at LUP for personal or work-related reasons. 
                Even so, the networking opportunities to meet new people through us are invaluable.
                <br><br>
                In conclusion, joining LUP offers so many benefits. 
                You can gain personal growth and develop professional skills. 
                Alongside you will make a meaningful contribution to society. 
                It is a rewarding journey that enhances your life. 
                It also leaves a lasting, positive impact on the people around you. 
                If you are considering joining us, don't hesitate. 
                We are THE Team, working to bring more people to volunteer.
                
              </p>
             <!-- <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>-->
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
      
            <form action="volunteerinsert.php" method="post" class="php-email-form">
                  <h3>Volunteer Application Form</h3>
    <div class="row gy-3">
        <div class="col-md-6" style="border-radius: 5px;">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col-md-6">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
        </div>
        <div class="col-md-12">
            <select class="form-control" id="age" name="age" required>
                <option value="">Select Age</option>
                <!-- Add age options here -->
            </select>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="bio" placeholder="Bio" required>
        </div>
        <div class="col-md-12">
            <select class="form-control" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="education_qualification" placeholder="Education Qualification" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="address" placeholder="Address" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="city" placeholder="City" required>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
        </div>
        <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your request has been sent successfully. Thank you!</div>
           <!-- <input type="submit" name="submit" value="Submit">-->
           <input type="submit" name="submit" value="Submit" style="background: var(--accent-color);border: 0;padding: 10px 30px;border-radius: 4px;color: white;">

  <!-- <input type="submit" value="Submit" name="submit">-->

        </div>
    </div>
</form>

         
          </div><!-- End Quote Form -->

        </div>

      </div>

    </section>
    
   
    <!--Donate form-->
    <br>
    <br>
    <br>
    <div class="container section-title" data-aos="fade-up">
  <h2>DONATE दान करें</h2>
  <br>
  <br>
  <p style="break-word:break-all;">Donating to charitable causes is a powerful way to make a positive impact on the world and support those in need. Contributions help provide essential resources, such as food, clean water, healthcare, and education, to underserved communities. Your donation can drive significant changes, from alleviating poverty and hunger to supporting disaster relief efforts and promoting environmental sustainability. By donating, you not only contribute to the well-being of others but also foster a sense of community and shared responsibility. Every contribution, no matter the size, can create a ripple effect of kindness and compassion, ultimately leading to a better, more equitable world for all.</p>
</div>
<br>
<section id="get-started" class="get-started section">
  <div class="container">
    <div class="row justify-content-between gy-4">
      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="content">
        <section id="account-details" class="account-details section">
        <div class="container">
            <h2>Account Details</h2>
            <div class="account-info">
              <p><strong>Customer ID:</strong><br> 63 9446 46 74</p>
              <p><strong>Company Name:</strong><br> LOK UTTHAN PEHAL FOUNDATION</p>
                <p><strong>Account Number:</strong><br> 101 7038 3673</p>
                <p><strong>IFSC Code:</strong><br> ABCD0123456</p>
                <p><strong>SWIFT Code:</strong><br>IDFB IN BB MUM</p>
                <p><strong>Bank Name:</strong><br>IDFC FIRST</p>
                <p><strong>Branch:</strong><br> Gurgon Golf Cource Road Branch</p>
               <!-- <p><strong>Sweep in balance(+):</strong><br></p>
                <p><strong>GST Number:</strong><br></p>-->
            </div>
        </div>
    </section>

          <!-- <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>-->
        </div>
      </div>

      <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200" style="    background: 
color-mix(in srgb, var(--default-color), transparent 97%); height: 50%;">
      <form action="DonateInsert.php" method="post" style="margin-bottom:20px;">
    <h3 style="    margin-left: 140px;">Donate Form</h3>
    <div class="row gy-3">
        <div class="col-md-12">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col-md-12">
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col-md-12">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="address" placeholder="Address" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="city" placeholder="City" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="pancard" placeholder="pancard" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="ReferenceId" placeholder="ReferenceId" required>
        </div>
        <div class="col-md-12 text-center">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary"  style="background: var(--accent-color);border: 0;padding: 10px 30px;border-radius: 4px;color: white;">
        </div>
    </div>
</form>
      </div><!-- End Quote Form -->
    </div>
  </div>
</section>

   
    
    
    <!--end donate--->
    
    
    
    
    
    
    <!-- /Get Started Section -->

    <!-- Constructions Section -->
    <section id="constructions" class="constructions section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2> Events</h2>
      <!--  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/woman-worker.png" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Women-worker</h4>
                    <p>Gender equality remains a burning issue even when women play equally important roles in driving the rural economy in India. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/non-skilled.png" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Non-Skilled</h4>
                    <p>An unskilled worker is an employee who does not use reasoning or intellectual abilities in their line of work. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/IT-intern.png" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">IT - Trainings for Intern</h4>
                    <p>An internship is a professional learning experience that offers meaningful, practical work related to a student's field of study or career interest. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/IT-training-organization.png" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">IT - Trainings for Organization</h4>
                    <p style="word-break:break-all;">IT experts from the earlier generation of automation system for trade argue that there are many critical enabling conditions for SMEs to effectively utilize IT for TF and these have little to do with trade (Schware and Kimberley 1995)</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Constructions Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Achievements</h2>
     <!--   <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                 <i class='fas fa-graduation-cap'></i>
             <!--   <i class="fa-solid fa-mountain-city"></i>-->
              </div>
              <h3>Educated 500+ Students: </h3>
              <p style="word-break:break-all;"> Our educational programs have reached out to over 50,000 students, raising awareness about environmental issues and inspiring the next generation of conservationist.</p>
            <!-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
               <i class=" gdlr-core-icon-item-icon fa fa-cogs"></i>
            <!--  <i class="fa-solid fa-arrow-up-from-ground-water"></i>-->
              </div>
              <h3>Provided 350+ Jobs for Non-Skilled Workers</h3>
              <p style="word-break:break-all;">Through our vocational training and employment programs, we've created job opportunities for 500 non-skilled individuals, enabling them to gain valuable experience and secure stable livelihoods.</p>
            <!-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Trained and Employed 300+ Women Workers</h3>
              <p style="word-break:break-all;"> Through our vocational training and employment initiatives, we've trained and employed 300 women, providing them with economic independence and opportunities for professional growth.</p>
             <!-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
            </div>
          </div>
          <!-- End Service Item -->
<!--
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Asperiores Commodit</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-
            </div>
          </div> -->
    <!-- End Service Item -->

       <!--   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Velit Doloremque</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
<!--
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Services Section -->

    <!-- Alt Services Section -->
   <!-- <section id="alt-services" class="alt-services section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/alt-services.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>--><!-- End Icon Box -->
<!--
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>--><!-- End Icon Box -->
<!--
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
              </div>
            </div>--><!-- End Icon Box -->
<!--
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
              </div>
            </div>--><!-- End Icon Box -->

         <!-- </div>
        </div>

      </div>

    </section><!-- /Alt Services Section -->

    <!-- Features Section -->
  <!--  <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

          <li class="nav-item col-3" role="presentation">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
              <h4>Modisit</h4>
            </a>
          </li>--><!-- End tab nav item -->
<!--
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" tabindex="-1" role="tab">
              <h4>Praesenti</h4>
            </a>--><!-- End tab nav item -->
        <!--
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" tabindex="-1" role="tab">
              <h4>Explica</h4>
            </a>
          </li><!-- End tab nav item -->
<!--
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false" tabindex="-1" role="tab">
              <h4>Nostrum</h4>
            </a>
          </li><!-- End tab nav item -->
<!--
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>--><!-- End tab content item -->
<!--
          <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Neque exercitationem debitis</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>--><!-- End tab content item -->
<!--
          <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatibus commodi accusamu</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>--><!-- End tab content item -->

        <!--  <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Omnis fugiat ea explicabo sunt</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Projects Section -->
    <section id="projects" class="projects section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Social Conclaves</h2>
    </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <!-- <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li> -->
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
           <img src="assets/img/yd1.png" class="img-fluid" alt="">
        <!--  <img src="assets/img/projects/construction-1.jpg" style="width: 500px; height: 300px;" alt="">-->

                <div class="portfolio-info">
                <h4>Yoga Day</h4>
                <!--  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
             <a href="assets/img/yoga1.jpeg"  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/yd3.png" class="img-fluid" alt="">
           <!--    <img src="assets/img/yoga1.jpeg" style="width: 356px; height: 267px;" alt="">-->

                <div class="portfolio-info">
                 <h4>Yoga Day</h4>
              <!--    <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                <a href="assets/img/yoga3.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/yd2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                 <h4>Yoga Day</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/yoga2.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div>



            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/WhatsApp Image 2024-06-22 at 6.30.53 AM.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                 <h4>Skills Trainings for girls</h4>
                <!--  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                  <a href="assets/img/WhatsApp Image 2024-06-22 at 6.30.53 AM.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/WhatsApp Image 2024-06-22 at 6.30.57 AM.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>शाहिद दिवस</h4><!--
                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                  <a href="assets/img/WhatsApp Image 2024-06-22 at 6.30.57 AM.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/WhatsApp Image 2024-06-22 at 6.35.57 AM.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Teaching for Students</h4>
               <!--   <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                  <a href="assets/img/WhatsApp Image 2024-06-22 at 6.35.57 AM.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/WhatsApp Image 2024-06-22 at 6.35.59 AM.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                 <h4>Training for 9th student</h4><!--
                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                  <a href="assets/img/WhatsApp Image 2024-06-22 at 6.35.59 AM.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/WhatsApp Image 2024-06-22 at 6.37.02 AM.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                 <h4>लोक उत्थान फाउंडेशन कार्यक्रम</h4>
            <!--      <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                  <a href="assets/img/WhatsApp Image 2024-06-22 at 6.37.02 AM.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div> 
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/WhatsApp Image 2024-06-24 at 2.18.22 AM.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>लोक उत्थान फाउंडेशन कार्यक्रम</h4><!--
                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
                  <a href="assets/img/WhatsApp Image 2024-06-24 at 2.18.22 AM.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                 <a href="project-details.html" title="More Details" class="details-link"></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
<!--
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
           <div class="portfolio-content h-100">
               <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
           <div class="portfolio-content h-100">
               <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
           <div class="portfolio-content h-100">
               <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
           <div class="portfolio-content h-100">
               <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
           <div class="portfolio-content h-100">
               <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
--> <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
           <div class="portfolio-content h-100">
               <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
-->   <!--</div>
              </div>
            </div>--><!-- End Portfolio Item -->

          <!--  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->

            <!--<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->

        <!--    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->

        <!--  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->

         <!--   <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->

          <!--  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
             </div>--><!-- End Portfolio Item -->
<!--
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->
<!--
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>--><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Projects Section -->
    <?php include 'testimonial.php'; ?>

    <!-- Testimonials Section -->
   <!-- <section id="testimonials" class="testimonials section">-->

      <!-- Section Title -->
     <!-- <div class="container section-title" data-aos="fade-up">-->
    <!--    <h2>Testimonials</h2>-->
      <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
   <!--   </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/imresizer-1718106485398.jpg" class="testimonial-img" alt="">
                  <h3>Bhoopendra Nath Pandey</h3>
                  <h4>Director / COO</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>I knew we had a salesforce efficiency
                      problem and needed it to be resolved ASAP. Thanks to mSELL for the
                      rescue. Keep going mSELL.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->
<!--
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/imresizer-1718099493996.jpg" class="testimonial-img" alt="">
                  <h3>Manish Sharma(CTO)</h3>
                  <h4>Chief Technology Officer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>From sweets outlets to FMCG products
                      the leap was tough but thanks to mSELL and their SFA solution to bring
                      out the full potential of our sales force.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->
<!--
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/imresizer-1718105588297.jpg" class="testimonial-img" alt="">
                  <h3>pawan Singh</h3>
                  <h4>Business Head</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>From sweets outlets to FMCG products
                      the leap was tough but thanks to mSELL and their SFA solution to bring
                      out the full potential of our sales force.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->
<!--
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/imresizer-1718106447496.jpg" class="testimonial-img" alt="">
                  <h3>Dr.Rishi Mohan Bhatnagar</h3>
                  <h4>Board Member / Mentor</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>mSELL truly knows what they are doing.
                      They helped our biggest problem of expiry on Distributor end through
                      Their DMS.Thank you mSELL.  </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
          --><!--
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/imresizer-1718105723377.jpg" class="testimonial-img" alt="">
                  <h3>Manish Sharma(CTO)</h3>
                  <h4>Chief Technology Officer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->

      <!--    </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>--><!-- /Testimonials Section -->

    <!-- Recent Blog Posts Section -->
  <!--  <section id="recent-blog-posts" class="recent-blog-posts section">-->

      <!-- Section Title -->
     <!--- <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>-->
     <!--   <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>--><!-- End Section Title -->
<!--
      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">The Future of Civil Engineering: Innovations and Trends in 2024</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">kiran</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>--><!-- End post item -->
          <!--

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>--><!-- End post item -->
          <!--

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>--><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Blog Posts Section -->

  </main>

  <?php
  include"footer.php";
  ?>
<!--
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ageSelect = document.getElementById('age');
        
        // Add options for ages above 18 and below 60
        for (let i = 18; i <= 60; i++) {
            let option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            ageSelect.appendChild(option);
        }
        
        // Set default placeholder option
        let placeholderOption = document.createElement('option');
        placeholderOption.disabled = true;
        placeholderOption.selected = true;
        placeholderOption.textContent = 'Age';
        ageSelect.insertBefore(placeholderOption, ageSelect.firstChild);
    });
</script>

<script>
    // JavaScript to handle dropdown functionality
    document.addEventListener('DOMContentLoaded', function() {
        const dropdown = document.getElementById('status-dropdown');
        const statusButton = document.getElementById('status-button');

        dropdown.addEventListener('change', function(e) {
            if (e.target && e.target.type === 'radio') {
                const selectedValue = e.target.value;
                statusButton.textContent = selectedValue;
            }
        });
    });
</script>
<script>
    // JavaScript to handle dropdown functionality
    document.addEventListener('DOMContentLoaded', function() {
        const dropdown = document.getElementById('gender-dropdown');
        const genderButton = document.getElementById('gender-button');

        dropdown.addEventListener('change', function(e) {
            if (e.target && e.target.type === 'radio') {
                const selectedValue = e.target.value;
                genderButton.textContent = selectedValue;
            }
        });
    });
</script>
<script>
  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById('openModalBtn');

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName('close')[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = 'block';
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = 'none';
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }
  function handleSubmit(event) {
    event.preventDefault(); // Prevent the default form submission

    // Create a new FormData object from the form
    var form = event.target;
    var formData = new FormData(form);

    // Send the form data using Fetch API
    fetch(form.action, {
      method: 'POST',
      body: formData
    }).then(function(response) {
      if (response.ok) {
        // Show success alert
        alert('Data successfully submitted');
        // Optionally, reset the form and close the modal
        form.reset();
        modal.style.display = 'none';
      } else {
        // Handle errors here
        alert('Error submitting data');
      }
    }).catch(function(error) {
      // Handle errors here
      console.error('Error:', error);
      alert('Error submitting data');
    });
  }
</script>
 

  <!-- Scroll Top -->
 
</body>

</html>