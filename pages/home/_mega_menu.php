<div class="container">
    <div class="row">
        <div class="col-xl-4">
            <div class="p-lg-3 p-0">
                <?php
                $links = "Qui sommes nous, Objectif, Mission, Organe de gestion, Identification légale";
                ?>
                <ul class="list-unstyled row flex-column gy-3 m-0">
                    <?php foreach (explode(", ", $links) as $link) { ?>
                        <li class="ps-0">
                            <a class="link-primary d-block text-dark text-decoration-none" href="javascript:void(0)">
                                <?php echo $link ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-xl-8 border-start">
            <div class="p-lg-3 p-0">
                <div class="row text-start text-xl-center">
                    <div class="col-lg-4">
                        <div class="mt-4 mt-lg-0">
                            <small class="text-muted"> NOS ORGANES DE GESTIONS </small>
                            <div class="title-divider mx-xl-auto opacity-25 rounded-5 mt-2"></div>
                        </div>
                        <div class="mt-4">
                            <?php include("_partials/user_svg.php") ?>
                        </div>
                        <div class="display-3 text-primary fw-semibold">
                            03
                        </div>
                        <small class="fw-light text-muted small d-inline-block">equipes differntes pou cadrer nos projets</small>
                    </div>
                    <div class="col-lg-4">
                        <div class="mt-4 mt-lg-0">
                            <small class="text-muted"> NOS PROJETS</small>
                            <div class="title-divider mx-xl-auto opacity-25 rounded-5 mt-2"></div>
                        </div>
                        <div class="mt-4">
                            <?php include("_partials/task_svg.php") ?>
                        </div>
                        <div class="display-3 text-primary fw-semibold">
                            100
                        </div>
                        <small class="fw-light text-muted small d-inline-block">projets déjà réalise grâce à vous</small>

                    </div>
                    <div class="col-lg-4">
                        <div class="mt-4 mt-lg-0">
                            <small> NOS OPERATIONS </small>
                            <div class="title-divider mx-xl-auto opacity-25 rounded-5 mt-2"></div>
                        </div>
                        <div class="mt-4">
                            <?php include("_partials/verified_svg.php") ?>
                        </div>
                        <div class="display-3 text-primary fw-semibold">
                            50
                        </div>
                        <small class="fw-light text-muted small d-inline-block">employés <strong class="text-primary">CaRes</strong> sur le terrains</small>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>