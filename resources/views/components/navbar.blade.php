<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
</head>
<style>
    .letter{
        font-family: "IBM Plex Serif", serif;
        font-weight: 500;
        font-style: normal;
        text-decoration: none;
    }
    .letter:hover{
        transform: translateY(-3px);
        transition: .25s ease-in-out;
    }
    .word2{
        font-family: "Fira Sans", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    button:hover{
        transform: translateY(-2px);
        transition: .2s ease-in-out;
    }
    .logo{
        font-family: "Protest Revolution", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .mobile-logo {
        font-size: 24px;
    }

    @media (max-width: 768px) {
        .mobile-logo {
            position: fixed;
            top: 2px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
            font-size: 24px;
        }
    }
</style>
<body>
    <nav class="navbar navbar-expand-md" style="min-height: 80px; background-color:#4b63826f;">
        <div class="container position-relative">
            <h1 class="text-uppercase logo mobile-logo" style="color: #bdb3a3; cursor:default; font-size: 54px;">
                GW
            </h1>
            <button class="navbar-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <div class="d-flex flex-column flex-md-row align-items-center gap-3 gap-md-5 mt-3 mt-md-0 mx-auto">
                    <a href="#" class="letter fs-6 fs-md-5 text-uppercase" style="color: #e1bc77">Home</a>
                    <a href="#" class="letter fs-6 fs-md-5 text-uppercase" style="color: #e1bc77">Categories</a>
                    <a href="#" class="letter fs-6 fs-md-5 text-uppercase" style="color: #e1bc77">News</a>
                    <a href="#" class="letter fs-6 fs-md-5 text-uppercase" style="color: #e1bc77">About</a>
                    <a href="#" class="letter fs-6 fs-md-5 text-uppercase" style="color: #e1bc77">Feedback</a>
                </div>
                <div class="d-flex justify-content-center justify-content-md-end mt-3 mt-md-0">
                    <button type="button" class="btn border text-uppercase fs-6" onclick="window.location.href='{{route('login')}}'" style="color: #e4d3b4;">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
