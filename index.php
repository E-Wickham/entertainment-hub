<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b55d11ffa3.js" crossorigin="anonymous"></script>

    <title>PHP Assignment - 1</title>
</head>
<body>
    <header>
        <div class="nav">
            <nav>
            <!--This is where the navigation/header goes-->

            </nav>
        </div>
    </header> 
    <div id="hero-landing">
        <h1>The Lightbulb Movie Awards</h1>

        <div id="register">
            
            <h2>Register: </h2>
            <p>Sign up for an account to nominate and vote for your favourite movies to win an award!</p>
            <form action="" method="POST">
                <div><label for="firstName">First Name: </label></div>
                <input type="text" name="firstName" />
                <div><label for="lastName">Last Name: </label></div>
                <input type="text" name="lastName" />
                <div><label for="email">Email: </label></div>
                <input type="text" name="email" />
                <div><label for="username">Username: </label></div>
                <input type="text" name="username" />
                <div><label for="password">Password: </label></div>
                <input type="text" name="password" />
                <div><button id="register-btn" type="submit">Register!</button></div>
            </form>
        </div>

        <div id="container-3-lead">
            <div id="feature-box1" class="title-feature-box">
                <h3>Upcoming Events</h3>
                <div class="feature-icon">
                    <i class="fa-5x fas fa-calendar-day"></i>
                </div>
            </div>
            <div id="feature-box2" class="title-feature-box">
                <h3>New Movies</h3>
                <div class="feature-icon">
                    <i class="fa-5x fas fa-film"></i>
                </div>                  
            </div>
            <div id="feature-box3" class="title-feature-box">
                <h3>Leaderboards</h3>
                <div class="feature-icon">
                    <i class="fa-5x fas fa-trophy"></i>
                </div>
            </div>

        </div>
    </div>   
    <div id="movie-slider">
        <!--Slider for movies goes here-->
        <h2>Smital Movie Slider Section Here:</h2>
    </div>
    <div>
        <div id="info-section-container">
            <div class="info-box">
                <h3>Social Media Trends</h3>
                <h4>Find out which movies are trending!</h4>
                <div class="info-button">Read More</div>
            </div>
            <div class="info-box">
                <h3>Quiz</h3>
                <h4>Think you know movies? Prove it in our toughest quiz yet!</h4>
                <div class="info-button">Read More</div>
            </div>
            <div class="info-box">
                <h3>Prize Pool Contest</h3>
                <h4>Enter the contest for your chance twin!</h4>
                <div class="info-button">Read More</div>
            </div>
        </div>
    </div>
    <div>
        <div id="leaderboard">
            <h2>Top Ten Movies</h2>
            <div id="top-ten-list">
                <ol>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
    <footer>
        <div class="nav">
            Footer
            <!--This is where the footer goes-->
        </div>      
    </footer>
</body>
</html>