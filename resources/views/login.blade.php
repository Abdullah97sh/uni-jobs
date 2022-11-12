<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="author" content="Zaur">
    <meta descryption content="Presentation of website">
    <meta name="keywords" content="technology, cyber security, software">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="stock-photo-cropped-image-of-a-young-man-working-on-his-laptop-in-a-coffee-shop-rear-view-of-business-man-258726044.jpg"
                    alt="">
                <div class="form-link">
                    <span class="img-text-1">test<br> new responsive <br>
                        Login/Signup form
                    </span>
                    <span class="img-text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img class="back-img"
                    src="stock-photo-portrait-of-a-successful-business-man-sitting-at-the-cafe-in-front-of-a-laptop-1783984655.jpg"
                    alt="">
                <div class="form-link">
                    <span class="img-text-1">Complete miles of journey <br> with Zaur</span>
                    <span class="img-text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <div class="input-groups">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="input" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="input-groups">
                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" class="input" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <div class="form-link pass">
                        <a href="#">Forget your password?</a>
                    </div>

                    <div class="input-groups">
                        <div class="button input-box">
                            <button>Submit</button>
                        </div>
                    </div>
                    <div class="form-link login-text">
                        <span>Don't have an account? <label class="link login-link" for="flip">Signup
                                now</label></span>
                    </div>
                </div>

                <div class="sign-form">
                    <div class="title">Signup</div>
                    <div class="input-groups">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" class="input" placeholder="Enter your name" required>
                        </div>
                    </div>

                    <div class="input-groups">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" class="input" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="input-groups">
                        <div class="input-box">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" class="input" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <div class="input-groups">
                        <div class="button input-box">
                            <!--	<input type="submit" value="Submit">  -->
                            <button>Submit</button>
                        </div>
                    </div>
                    <div class="form-link signup-text">
                        <span>Already have an account? <label class="link login-link" for="flip">Login now
                            </label></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
