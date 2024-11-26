<?php
    include('header.php')
?>
<section class="join_trick_from">
    <div class="join_trick_header">
        <h1>Harvard Bhutan Winter Trek 2024</h1>
    </div>
    <div class="join_trick">
        <div class="header_signup">
            <h1>Join Now</h1>
        </div>
        <form action="#">
            <div class="from_input">
                <label for="name">Full Name:</label><br>
                <input type="text" placeholder="Enter your name" required>
            </div>
            <div class="from_input">
                <label for="email">Email:</label><br>
                <input type="email" placeholder="Enter your email" required>
            </div>
            <div class="from_input">
                <label for="number">Mobile Number:</label><br>
                <input type="number" placeholder="Enter your number" required maxlength="12">
            </div>
            <div class="from_input">
                <label for="org"> Organisation:</label><br>
                <input type="org" placeholder="Enter your Organisation name" required>
            </div>
            <div class="from_input_checkbox">
                <label for="symposium "> Symposium :</label><br>
                <div class="day_select" >
                    <input type="checkbox" name="day" id="day"><label for="day">Day 1</label>
                    <input type="checkbox" name="day" id="day"><label for="day">Day 2</label>
                </div>
            </div>            
            <div class="from_input">
                <label for="remark">Ramarks:</label><br>
                <textarea name="remark" id="remark" placeholder="Enter Some Text"></textarea>
            </div>
            <div class="from_input">
                <p><strong>N.B. There will be a registration fee of Nu.3000/- for the lunch, tea and snacks</strong></p>
            </div>
            
            <div class="trick_submit_btn">
                <button>Submit</button>
            </div>
        </form>
    </div>


</section>






<?php
    include('footer.php')
?>