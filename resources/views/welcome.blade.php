<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="MyCustomer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <title>My Customer - Home</title>
    <script src="https://kit.fontawesome.com/25fffa082a.js" crossorigin="anonymous"></script>
</head>

<body>
<!-- Starting of Navigation Bar -->
<header>
    <nav>
        <div class="navigation-bar container">
            <div class="brand-name">
                <a href="./index.html">
                    <h6>MyCustomer</h6>
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="./about-us">About Us</a></li>
                <li><a href="./index.html#aim">What We Do</a></li>
                <li><a href="./index.html#feature">Features</a></li>
                <li><a href="./contact">Contact Us</a></li>
                <a href="/register"><button class="btn-register">Register</button></a>
                <a href="./login"><button class="btn-login">Login</button></a>
            </ul>
            <a onclick="iconMenu()" class="hamburger-icon" href="#"><i class="fas fa-bars" style="color: #fff;"></i></a>
        </div>
    </nav>
    <!-- Navbar for Mobile -->
    <div class="ham-mob">
        <ul class="m-nav-links">
            <li><a href="./about.html">About Us</a></li>
            <li><a href="./index.html#aim">What We Do</a></li>
            <li><a href="./index.html#feature">Features</a></li>
            <li><a href="./contact-us.html">Contact Us</a></li><br>
            <a href="./sign-up.html"><button class="btn-register">Register</button></a>
            <a href="./sign-in.html"><button class="btn-login">Login</button></a><br><br>
            <a onclick="closeMenu()" class="hamburger-icon" href="#"><i class="fas fa-times" style="color: #fff;"></i></a>
        </ul>
    </div>
</header>

<!-- Ending of Navigation Bar -->

<!-- Main-Hero Section -->
<section id="hero-section">
    <div class="hero-section-overlay">
        <div class="hero-content-div container">
            <h1 class="hero-heading">Welcome to <span class="hero-head-highlight">MyCustomer</span></h1>
            <p class="hero-content">Track debts,send messages to your customers all from<br>MyCustomer.</p>
            <button class="hero-btn">Click to Get Started</button>
        </div>
    </div>
</section>
<!-- End of Hero Section -->


<!-- Start of Our aim Section -->
<section id="aim">
    <div class="aim_heading">
        <h2 >What We Aim To Do For You</h2>
    </div>
    <div class="aim_box">
        <div class="aim_box_item">
            <div class="aim_box_item_image">
                <img src="./assets/images/aim_1.svg" alt="our_aim_1">
            </div>
            <div class="aim_box_item_content">
                <p>Automate Payment for debts from customers</p>
            </div>
        </div>
        <div class="aim_box_item">
            <div class="aim_box_item_image">
                <img src="{{asset('images/aim_2.svg')}}" alt="our_aim_2">
            </div>
            <div class="aim_box_item_content">
                <p>Keep track of your customers</p>
            </div>
        </div>
        <div class="aim_box_item">
            <div class="aim_box_item_image">
                <img src="{{asset('images/aim_3.svg')}}" alt="our_aim_3">
            </div>
            <div class="aim_box_item_content">
                <p>Automate sending of messages to customers and debtors</p>
            </div>
        </div>
    </div>
</section>
<!-- End of Our Aim Section -->

<!-- Start of About Section -->
<section id="about">
    <div class="about">
        <div class="about_box">
            <div class="about_box_image left">
                <img src="{{asset('images/about_img_1.svg')}}" alt="about-us">
            </div>
            <div class="about_box_content">
                <h2>About MyCustomer</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum auctor blandit. Quisque rhoncus libero in pretium faucibus. Cras sagittis pretium nunc quis gravida.</p>
            </div>
        </div>
        <div class="about_box">
            <div class="about_box_image">
                <img src="{{asset('/images/about_img_2.svg')}}" alt="about-us">
            </div>
            <div class="about_box_content left">
                <h2>MyCustomer, bringing you closer to your customers.</h2>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us section -->

<!-- Start of Features Section -->
<section id="feature">
    <div class="feature_heading">
        <h2>MyCustomer Features</h2>
    </div>
    <div class="feature_box">
        <div class="feature_box_item">
            <h3>Track Customers Debts</h3>
            <p>Amazing record keeping feature to trace every customers debt</p>
        </div>
        <div class="feature_box_item">
            <h3>Add Customers</h3>
            <p>Add as much customers as you want</p>
        </div>
        <div class="feature_box_item">
            <h3>Create Ledgers</h3>
            <p>Keep records of sales and balance accounts automatically with a simple click</p>
        </div>
        <div class="feature_box_item">

            <h3>Accept Payments</h3>
            <p>Make simple, fast and seamless online transactions even on the go with our App </p>
        </div>
    </div>
</section>
<!-- End of Features section -->

<!-- Start of Testemonial Section -->

<!-- End of Testemonial Section  -->

<!-- Start of Message Us Section -->
<section id="message">
    <div class="message_heading">
        <h2>Send Us A Message</h2>
    </div>
    <div class="message_box">
        <div class="message_form">
            <form action="#" method="post">

                <label for="Email">Email Address</label>
                <input type="email" placeholder="Email Address" name="email-address">

                <label for="Message">Message</label>
                <textarea name="message" cols="30" placeholder="Message" rows="10"></textarea>

                <button class="message_form_button"><a href="#">Send Message</a></button>
            </form>
        </div>
        <div class="message_contact">
            <div class="message_contact_heading">
                <h3>Contact Details</h3>
            </div>
            <div class="message_contact_phone">
                <p>
                    <span class="message_contact_icon"><img src="{{asset('images/phone_icon.svg')}}" alt="phone_vector_icon"></span>   +901 244 6653 662
                </p>
            </div>
            <div class="message_contact_email">
                <p>
                    <span class="message_contact_icon"><img src="{{asset('images/message_icon.svg')}}" alt="message_contact_icon"></span>
                    mycustomer@gmail.com
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End of messages section -->

<!-- Start of Get Our App Section -->
<section id="download">
    <div class="download_message">
        <h2>Download the MyCustomer App on your phone to use on the Go</h2>
        <a href="#"><img src="{{asset('images/play_store.svg')}}" alt="playstore icon"></a>
    </div>
    <div class=" anim">
        <img src="{{asset('images/phone_image.svg')}}" alt="phone image">
    </div>
</section>

<section id="footer">
    <div class="footer_top">
        <div class="footer_top_heading">
            <h3>MyCustomer</h3>
        </div>
        <div class="footer_top_list">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">What We Do</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer_top_form">
            <label for="Newsletter Subscription"> Subscribe to our newsletter</label>
            <input type="email" name="subscription" placeholder="Enter Your Email Address">
        </div>
    </div>

    <div class="footer_bottom">
        <div class="footer_bottom_copyright">
            <p>&copy;2020 MyComputer. All Rights Reserved.</p>
            <a href="#hero">Terms</a>
            <a href="#hero">Privacy</a>
        </div>
        <div class="footer_bottom_sociallinks">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google-plus-g"></i>
        </div>
    </div>

</section>


<!-- linking js File -->
<script src="{{asset('scripts/index.js')}}"></script>
</body>

</html>
