<div class="bg-footer">
    <div class="container py-5">
        <div class="row gy-4">
            <div class="col-xl-3 col-lg-6">
                <img src="../../assets/media/logo.png" alt="logo-footer" class="mb-3" width="65">
                <p class="text-white">Rendre heureux pour rendre <br> meilleur.</p>
                <ul class="list-unstyled row flex-column gy-2 flex-wrap">
                    <li class="text-white">
                        <span>
                            <?php include("_partials/phone-svg.php") ?>
                        </span>
                        +229 55 17 00 00
                    </li>
                    <li class="text-white">
                        <span>
                            <?php include("_partials/whatsapp-svg.php") ?>
                        </span>
                        +229 41 76 12 12
                    </li>
                    <li class="text-white">
                        <span>
                            <?php include("_partials/mail-svg.php") ?>
                        </span>
                        ongcares.info@gmail.com
                    </li>
                    <li class="pt-2">
                        <span class="bg-white p-1 rounded-3 d-inline-flex align-items-center pe-2">
                            <span class="me-2">
                                <img class="rounded-3 shadow-sm" height="35" src="../../assets/media/images/mtn-momo.jpg" alt="mtn-logo">
                            </span>
                            <span class="-mb-px fw-semibold text-dark">+229 97 74 97 22</span>
                        </span>
                    </li>

                </ul>
            </div>
            <div class="col-xl-3 col-lg-6">
                <h5 class="fw-bolder mb-4">QUI SOMMES NOUS ?</h5>
                <ul class="list-unstyled row fw-light flex-column gy-3 flex-wrap">
                    <?php
                    $links = "Objectif, Mission, Contexte, Organe de gestion, Contactez-nous, Identification légale";
                    ?>
                    <?php foreach (explode(", ", $links) as $link) { ?>
                        <li>
                            <a class="link-light text-uppercase d-block text-white text-decoration-none" href="javascript:void(0)">
                                <?php echo $link ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6">
                <h5 class="fw-bolder mb-4">COMMENT PARTICIPER</h5>
                <ul class="list-unstyled row fw-light flex-column gy-3 flex-wrap">
                    <?php
                    $links = "Don mensuelle, Devenez partenaire, Collecte de fonds";
                    ?>
                    <?php foreach (explode(", ", $links) as $link) { ?>
                        <li>
                            <a class="link-light text-uppercase d-block text-white text-decoration-none" href="javascript:void(0)">
                                <?php echo $link ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6">
                <h5 class="fw-bolder mb-4">RESTEZ CONNECTER</h5>
                <input placeholder="Votre adresse email" type="text" class="form-control form-control-lg border-0 shadow-none py-2">
                <p class="fw-light mt-3">
                    Nous ne partagerons pas vos données
                    et vous pourrez vous désinscrire à tout
                    moment.
                </p>
                <button class="btn btn-on-footer btn-lg fw-bold text-uppercase">S'inscrire</button>
            </div>
        </div>
    </div>
</div>