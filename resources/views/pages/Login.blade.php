<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/45dcab17ea.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    .word{
        font-family: "EB Garamond", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
    .word1{
        font-family: "Fira Sans", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .linktag:hover{
        transform: translateY(-2px);
        transition: .25s ease-in-out;
    }
    button:hover{
        transform: translateY(-3px);
        transition: .3s ease-in-out;
    }
    .logo:hover{
        transform: scale(1.5,1.5);
        transition: .32s ease-in-out;
    }
</style>
<body>
    <section class="d-flex justify-content-center align-items-center vh-100" style="background-color: #242458;">
        <div class="container bg-transparent rounded-2" style="max-width: 960px;">
            <div class="row">
                <div class="col-md-5 d-none d-md-block p-0 m-0 position-relative">
                    <img src="{{asset('images/Bgimage.jpg') }}" alt="img" class="rounded-start-2 border-end" style="width:100%; height:100%; object-fit: fill; z-index:0;">
                    <div class="position-absolute top-50 start-0 translate-middle-y">
                        <h1 class="word ps-4" style="color:#F2A93B">
                            Built for Creators. Powered by Gamers.
                        </h1>
                        <p class="word1 ps-4" style="color:#D9D9E3">
                            Where innovation meets play.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-7 rounded-end" style="background: rgba(150, 187, 255, 0.05); backdrop-filter: blur(20px);">
                    <div class="container my-4">
                        <h1 class="d-flex justify-content-center display-4 text-uppercase word mb-1" style="color: #F2A93B;">Login</h1>
                        <hr class="border mb-4" style="color: #D9D9E3">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fs-5 word1" style="color: #D9D9E3"><i class="fa-solid fa-at me-2"></i>Enter your email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label fs-5 word1" style="color: #D9D9E3"><i class="fa-solid fa-user-shield me-2"></i>Enter your password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <a class="word1 text-decoration-none fs-6 d-flex justify-content-end me-1 linktag" href="#" style="color: #D9D9E3">Forgot Password?</a>
                            <div class="my-3 d-flex justify-content-evenly gap-2">
                                <button type="submit" class="btn w-100 word fs-5 submitbtn" style="background-color: #F2A93B; color:#211B4D">Login</button>
                                <button type="button" onclick="window.location.href='{{route('homepage')}}'" class="btn w-100 word fs-5 submitbtn" style="background-color: #52499C; color:#D9D9E3">Home</button>
                            </div>
                        </form>
                        <div class="container">
                            <h4 class="word d-flex justify-content-center" style="color: #D9D9E3">OR</h4>
                            <div class="mt-3 d-flex justify-content-center gap-5" style="color: #F2A93B">
                                <i class="fa-brands fa-x-twitter fs-3 logo"></i>
                                <i class="fa-brands fa-google-plus-g fs-3 logo"></i>
                                <i class="fa-brands fa-facebook fs-3 logo"></i>
                            </div>
                            <hr class="border mt-4" style="color: #D9D9E3">
                            <h6 class="word1 d-flex justify-content-center" style="color: #D9D9E3">Don't have an account?<a class="text-decoration-none ms-2 linktag" href="{{route('register')}}" style="color: #F2A93B">Create account.</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
