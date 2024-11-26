<?php
    include('header.php')
?>
<section class="login_from">
    <div class="login_header">
        <h1><a href="index.php">Home</a> > Login</h1>
    </div>
    <div class="login_main">
        <div class="header_login">
            <h1>Login</h1>
        </div>
        <form action="#">
            <div class="login_input_from">
                <label for="text">Email / Phone Number:</label><br>
                <input type="text" placeholder="Enter your email or phone no." required>
            </div>
            <div class="login_input_from">
                <label for="password">Password:</label><br>
                <input type="password" placeholder="Enter your password" required>
            </div>
            <div class="login_submit_btn">
                <button>Submit</button>
            </div>
            <div class="login_submit_btn">
                <p>Don't have an Account? <a href="signup.php"> Register Here </a></p>
            </div>
            <div class="login_submit_btn">
                <p>Forgot Password? <a href="#"> Request for Reset </a></p>
            </div>

        </form>
    </div>


</section>






<?php
    include('footer.php')
?>