<?php
    include('header.php')
?>
<section class="signup_from">
    <div class="signup_header">
        <h1> <a href="index.php">Home</a> > Register Now</h1>
    </div>
    <div class="signup_main">
        <div class="header_signup">
            <h1>Register Now</h1>
        </div>
        <form action="#">
            <div class="signup_input_from">
                <label for="name">Full Name:</label><br>
                <input type="text" placeholder="Enter your name" required>
            </div>
            <div class="signup_input_from">
                <label for="email">Email:</label><br>
                <input type="email" placeholder="Enter your email" required>
            </div>
            <div class="signup_input_from">
                <label for="number">Mobile Number:</label><br>
                <input type="number" placeholder="Enter your number" required>
            </div>
            <div class="signup_input_from">
                <label for="password">Password:</label><br>
                <input type="password" placeholder="Enter your password" required>
            </div>
            <div class="signup_input_from">
                <label for="cpassword">Confirm Password:</label><br>
                <input type="cpassword" placeholder="Enter confirm password" required>
            </div>
            <div class="signup_submit_btn">
                <button>Submit</button>
            </div>
            <div class="signup_submit_btn">
                <p>Already have an Account? <a href="login.php"> Login Now </a></p>
            </div>
        </form>
    </div>


</section>






<?php
    include('footer.php')
?>