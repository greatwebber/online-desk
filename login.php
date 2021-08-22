<?php
    session_start();
    ob_start();

    $currentPage = "Login";
    $message = "";
   
    include('includes/navbar.php');

    if(isset($_POST['btnLogin'])) {

        $user->login();
        $email = $_POST['fEmail'];
        $message = $user->returnedMessage;
    }
    
?>



<body style="background-image: url(img/background.jpg); background-size: cover;">
<main  >

<?php 
if($user->errors > 0) {echo "<div class='error-div'><p class='error-message'>"; echo $user->returnedMessage . "</p> </div>";
        }
    
?>

<div class="inside-main">


    <div class='auth-div'>
        <form class='auth-form' action="login.php" method="POST">
            
            <div class="form-header">
                <img src="img/logo.png" alt="">
                <h3>Project Topic</h3>
                <p>Design a Online Desk Support</p>
                <p style="text-transform: capitalize;">(A case study of computer science department)</p>
                <p style="text-transform: capitalize;">(supervised by ....)</p>
            </div>
            <h3 class='form-header'>Login</h3>
            <hr>
            <input id='email-login' type="email" class='auth-input' name="fEmail" placeholder='Email'>
            <input id='password-login' type="password" class='auth-input' name="fPassword" placeholder='Password'>

            <div>
                <input class='authenticate-btn' type="button" id="btnRegister" value="Register">
                <input class="authenticate-btn" type="submit" id='btnLogin' name="btnLogin" value="Login"></input>
            </div>

        </form>
        <center>
            <div>
                <div class="dropdown-modal">
                    <a href="javascript:void(0);">Developed By</a>
                    <div class="dropdown-menu">
                        <!-- <div>
                            <img style="border-radius: 50%; width: 100px; aspect-ratio: auto 100 / 100; height: 100px; float: left; "
                                src="https://www.federalpolyede.edu.ng/passport/RegCS20180200632.jpg" alt="">
                            <center>
                                <p>
                                    <b>CS20180200632</b>
                                    <p>KEHINDE AYOKUNLE TEMILOLUWA</p>
                                    <p>ND2DPT</p>
                                </p>
                            </center>
                        </div> -->

                        <table border="1" style="text-transform:uppercase; border-collapse:collapse">
                            <tr>
                                <th></th>
                                <th>NAME</th>
                                <th>level</th>
                            </tr>
                            <tr>
                                <th><img style="border-radius: 50%; width: 70px; aspect-ratio: auto 100 / 100; height: 70px; float: left; "
                                        src="https://www.federalpolyede.edu.ng/passport/RegCS20180200632.jpg"
                                        alt=""></th>
                                <th>KEHINDE AYOKUNLE TEMILOLUWA</th>
                                <th>ND2DPT</th>
                            </tr>
                            <tr>
                                <th><img style="border-radius: 50%; width: 70px; aspect-ratio: auto 100 / 100; height: 70px; float: left; "
                                        src="https://www.federalpolyede.edu.ng/passport/RegCS20180200632.jpg"
                                        alt=""></th>
                                <th>KEHINDE AYOKUNLE TEMILOLUWA</th>
                                <th>ND2DPT</th>
                            </tr>
                            <tr>
                                <th><img style="border-radius: 50%; width: 70px; aspect-ratio: auto 100 / 100; height: 70px; float: left; "
                                        src="https://www.federalpolyede.edu.ng/passport/RegCS20180200632.jpg"
                                        alt=""></th>
                                <th>KEHINDE AYOKUNLE TEMILOLUWA</th>
                                <th>ND2DPT</th>
                            </tr>
                            <tr>
                                <th><img style="border-radius: 50%; width: 70px; aspect-ratio: auto 100 / 100; height: 70px; float: left; "
                                        src="https://www.federalpolyede.edu.ng/passport/RegCS20180200632.jpg"
                                        alt=""></th>
                                <th>KEHINDE AYOKUNLE TEMILOLUWA</th>
                                <th>ND2DPT</th>
                            </tr>
                        </table>


                    </div>
                </div>
            </div>
        </center>
    </div>
</div>

</main>
</body>
<?php
    include_once('includes/footer.php');
?>