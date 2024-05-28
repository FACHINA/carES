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
        <div class="shadow-sm position-relative bg-body">
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
            <?php include("pages/home/_about.php"); ?>
        </section>
        <div class="main">
            <section aria-label="Hero">
                <div class="aspect-hero w-100 px-0 overflow-hidden">
                    <img class="h-100 w-100 object-fit-cover" src="./assets/media/slides/01-sm.jpg" alt="" srcset="">
                </div>
            </section>
            <section id="timers_section" class="pt-5 pb-5" aria-label="Counter">
                <?php include("pages/home/_counter.php"); ?>
            </section>
            <section aria-label="Offres">
                <?php include("pages/home/_offer.php"); ?>
            </section>
            <div class="container my-5">
                <?php include("pages/home/_lorem.php"); ?>
            </div>
        </div>
    </main>

    <footer>
        <?php include("pages/home/_footer.php"); ?>
    </footer>

    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>