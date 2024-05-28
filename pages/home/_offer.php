<div class="mt-5 pb-5" style="background-color: #f3f9f2;">
    <div class="container py-5 text-center">
        <h1 class="mx-auto text-center mb-4 mt-5 d-inline-block ">
            <div class="h4 fw-bold">
                RENDRE HEUREUX POUR RENDRE MEILLEUR
            </div>
            <div class="mb-n1 display-5 border text-primary border-5 border-primary px-2 py-3 family-scandia" style="font-weight: 800;">
                Agir avec CarES
            </div>
        </h1>
    </div>
    <div class="container mb-5">
        <?php
        $actions = [
            [
                "title" => "Soutenir nos actions",
                "desc" => "Offrez aux équipes de Carrefour de l'Espoir les moyens de protéger les enfants vulnerables.",
                "label" => "Faire un don",
                "image" => "../../assets/media/illustration/donate.svg"
            ],
            [
                "title" => "Rejoindre notre équipe",
                "desc" => "Offrez aux équipes de Carrefour de l'Espoir les moyens de protéger les enfants vulnerables.",
                "label" => "Travaillez sur le terrain",
                "image" => "../../assets/media/illustration/team.svg"
            ],
            [
                "title" => "Agir autrement",
                "desc" => "Je lance un cagnotte pour aider un enfant",
                "label" => "En savoir plus",
                "image" => "../../assets/media/illustration/rotate.svg"
            ],
        ];
        ?>
        <div class="row gy-4 mb-5 justify-content-center text-start">
            <?php foreach ($actions as $card) {  ?>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div  styleo="aspect-ratio: 9/10 !important;" class="card h-100 w-100 border-0 shadow">
                        <div class="card-img-top">
                            <!-- <?php include "_partials/donate_svg.php" ?> -->
                            <img class="card-svg mt-4 px-3" src="<?= $card["image"] ?>" alt="" srcset="">
                        </div> 
                        <div class="card-body">
                            <h5 class="fw-bolder mb-4 text-primary">
                                <?= $card["title"] ?>
                            </h5>
                            <p class="mb-0 mt-auto">
                                <?= $card["desc"] ?>
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-body p-3">
                            <button class="fw-bold d-block w-100 btn btn-outline-primary rounded-2">
                                <div class="-mb-px"><?= $card["label"] ?></div>
                            </button>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>