<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarES (Carrefour de l'Espoir)</title>
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/cares.css">
    <link rel="shortcut icon" href="assets/media/logo.png" type="image/x-icon">
</head>

<body>
    <?php include("pages/home/_snackbar.php"); ?>
    <header class="sticky-top">
        <div class="shadow-sm position-relative bg-white">
            <div class="container">
                <?php include("pages/home/_header.php"); ?>
            </div>
            <div class="position-absolute invisible w-100 top-100 border-bottom">
                <?php include("pages/home/_mega_menu.php"); ?>
            </div>
        </div>
    </header>
    <main>
        <section aria-label="A propos">
            <div class="w-100 oveflow-hidden">
                <div class="row mx-0">
                    <div class="col-lg-6 text-lg-end text-start">
                        <div class="container py-3">
                            <div class="fw-bold h5 mt-2 mb-3">Nos réalisations</div>
                            <p class="fw-light mt-1 col-xxl-11 ms-auto">
                                Carrefour de l'Espoir en abrégé CarES, est une Organisation
                                non Gouvernemetale à but non lucratif reconnue par le gouvernemet
                                béninois et officielement enregistrée.
                            </p>
                            <a href="" class="link link-primary fw-bolder btn-hover text-decoration-none">En savoir plus
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="height: 1.55rem;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-primary bg-opacity-10 text-lg-start text-end--">
                        <div class="container py-3">
                            <div class="fw-bolder h5 text-bg-primary bg-opacity-100 d-inline-block p-2">
                                <span class="mb-n1 d-block">AGIR AVEC CarES</span>
                            </div>
                            <p class="fw-light mt-1 text-dark">
                                Découvrez les differentes manieres d'agir avec le <br> Carrefour de l'Espoir.
                            </p>
                            <a href="" class="link link-primary fw-bolder btn-hover text-decoration-none">Commencer
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="height: 1.55rem;">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main">
            <section aria-label="Hero">
                <div class="aspect-hero w-100 px-0 overflow-hidden">
                    <img class="h-100 w-100 object-fit-cover" src="./assets/media/slides/01-sm.jpg" alt="" srcset="">
                </div>
            </section>
            <div class="container mt-5">
                <?php include("pages/home/_lorem.php"); ?>
            </div>
        </div>
    </main>

    <footer>
        <?php include("pages/home/_footer.php"); ?>
    </footer>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>