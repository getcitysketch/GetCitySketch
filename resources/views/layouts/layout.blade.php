<!DOCTYPE html>
<html lang="en">
<head>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>{{env("APP_NAME")}}</title>
</head>
<body>
        <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="orbitron"> <img class="logo" width="80" height="80" src="{{asset('logo/CSK_Logo.svg')}}" alt="CitySketch Logo">CitySketch</label>   
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Diplomarbeit</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

    <div class="page-wrapper">
        </div>

    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>About us</h2>
                <div class="content">
                    <p>CitySketch is a Blender-AddOn created for building 3D cities in just a few seconds. The usage of the AddOn is more likely for games, architect-sketches and much more.<p>
                    <div class="social">
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>

            <div class="center box">
                <h2>Adress</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">HTL Rennweg 1030 Wien</span>
                    </div>
        
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">Coming Soon</span>
                    </div>

                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">support@citysketch.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Contact us</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <span class="credit">Created By Huy Tran |</span>
            <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
        </div>
    </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>