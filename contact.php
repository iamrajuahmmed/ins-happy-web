<?php
    include('header.php')
?>

<section class="contact">
    <div class="contact_header">
        <h1><a href="index.php">Home</a> > Contact</h1>
    </div>
</section>

<section class="contact_from">
    <div class="contact_us">
        <h1>Get in touch</h1>
    </div>
    <div class="contact_area">
        <div class="contact_text">
            <p>We invite your communication! Please use this form and a member of the Institute will be in touch with you as soon as possible.
            <br><br>Interested in <a href="signup.php">joining us</a>? <a href="signup.php">View open positions</a> with the IOH. </p>

        </div>
        <div class="contact_main_form">
            <form action="#">
                <div class="form_input_div">
                    <label for="fulName"> Full Name:</label><br>
                    <input type="text" placeholder="Enter your full name" required>
                </div>
                <div class="form_input_div">
                    <label for="email"> Email:</label><br>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="form_input_div">
                    <label for="number"> Mobile Number:</label><br>
                    <input type="text" placeholder="Enter your mobile number" required>
                </div>
                <div class="form_input_div">
                    <label for="textarea"> Message :</label><br>
                    <textarea name="textarea" id="textarea" placeholder="Enter your message " required> </textarea>
                </div>
                <div class="form_input_div">
                    <button>Submit</button> <span id="massage_alert"></span>
                </div>
                
            </form>
        </div>
    </div>
</section>

<?php
    include('footer.php')
?>