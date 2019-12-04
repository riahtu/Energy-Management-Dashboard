<?php

$page_title = "User Authentication - Registration Page";
include_once "partials/header.php";
include_once "partials/_signup.php";
?>



<!-- contact form -->
<section class="contact2 p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 pb-4">
                <h3 class="display-4 mb-5 text-white">Registration Form</h3>
                <div>
                    <?php if (isset($result)) echo $result; ?>
                    <?php if (!empty($form_errors)) echo show_errors($form_errors); ?>
                </div>

                <div class="clearfix"></div>

                <!-- form -->
                <form class="contact-form" method="post" action="">
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="Email" value="" name="email" id="emailField" />
                        <label for="emailField" class="label">Email</label>
                    </div>
                    <div class="form-group py-4">
                        <input type="text" class="form-control my-2 p-2 input" placeholder="UserName" value="" name="username" id="usernameField" />
                        <label for="usernnameField" class="label">UserName</label>
                    </div>
                    <div class="form-group py-4 mb-4">
                        <input type="password" class="form-control my-2 p-2 input" placeholder="Password" value="" name="password" id="passwordField" />
                        <label for="email" class="label">Password</label>
                    </div>
                    <div class="extrapad">.</div>
                    <button type="submit" name="signupBtn" class="btn btn-block mt-4 p-2 font-weight-bold text-uppercase submit-button xtra-m">
                        Sign Up
                    </button>
                </form>

                <!-- end of form -->
            </div>
        </div>
    </div>
</section>
<!-- end of contact form -->

<?php include_once "partials/footer.php"; ?>
</body>

</html>