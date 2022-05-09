<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema 21</title>
    <link rel="icon" href="assets/img/user.png">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html" class="navbar-brand text-dark" style="font-size: 20px;">
                    <img src="assets/img/user.png" alt="" style="margin-right: 5px;" width="45"><strong>Cinema
                        21</strong>
                </a>
            </div>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse"
                aria-expanded="false" aria-label="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-btn" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link text-dark">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">Film</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">Contact Us</a>
                    </li>
                    <li>
                        <a href="Login.php" id="btn-sub" class="nav-item btn btn-primary ms-5 w-75">Join Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container film py-5 mt-5">
        <section class="sec_bg">
            <div class="card mb-3" style="max-width: 1250px;">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="assets/img/Sonic The Hedgehog 2.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h2 class="card-title">Sonic the Hedgehog 2 (2022)</h2>
                            <small>P | Aksi, Cerita Fiksi, Komedi, Keluarga | 2h 2m
                            </small>
                            <br><br><br>
                            <h5>Overview</h5>
                            <p class="card-text">After settling in Green Hills, Sonic is eager to prove he has what it
                                takes
                                to be a true hero. His test comes when Dr. Robotnik returns, this time with a new
                                partner,
                                Knuckles, in search for an emerald that has the power to destroy civilizations. Sonic
                                teams
                                up with his own sidekick, Tails, and together they embark on a globe-trotting journey to
                                find the emerald before it falls into the wrong hands.</p>
                            <br><br>
                            <button type="button" class="btn btn-outline-dark">Buy Ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h3>Actor Utama</h3>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                    <div class="card text-center shadow" style="width:fit-content;">
                        <img src="assets/img/Ben.jpg" class="img-fluid" width="250px" alt="">
                        <div class="card-body">
                            <b>Ben Schwartz</b>
                            <p>Sonic the Hedgehog (voice)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                    <div class="card text-center shadow" style="width:fit-content">
                        <img src="assets/img/Idris.jpg" class="img-fluid" width="250px" alt="">
                        <div class="card-body">
                            <b>Idris Elba</b>
                            <p>Knuckles the Echidna (voice)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                    <div class="card text-center shadow" style="width:fit-content">
                        <img src="assets/img/Collen.jpg" class="img-fluid" width="250px" alt="">
                        <div class="card-body">
                            <b>Colleen O'S</b>
                            <p>Miles "Tails" Prower (voice)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                    <div class="card text-center shadow" style="width:fit-content">
                        <img src="assets/img/Jim.jpg" class="img-fluid" width="250px" alt="">
                        <div class="card-body">
                            <b>Jim Carrey</b>
                            <p>Dr. Ivo Robotnik</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                    <div class="card text-center shadow" style="width:fit-content">
                        <img src="assets/img/James.jpg" class="img-fluid" width="250px" alt="">
                        <div class="card-body">
                            <b>James Marsden</b>
                            <p>Tom Wachowski</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                    <div class="card text-center shadow" style="width:fit-content">
                        <img src="assets/img/tika.jpg" class="img-fluid" width="250px" alt="">
                        <div class="card-body">
                            <b>Tika Sumpter</b>
                            <p>Maddie Wachowski</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>

</body>

</html>