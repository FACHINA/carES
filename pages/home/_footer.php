<div class="bg-footer">
    <div class="container py-5">
        <div class="row gy-4">
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
                <h5 class="fw-bolder mb-4">RESTEZ CONNECTER</h5>
                <input placeholder="Votre adresse email" type="text" class="form-control border-0 shadow-none py-3">
                <p class="fw-light mt-3">
                    Nous ne partagerons pas vos données
                    et vous pourrez vous désinscrire à tout
                    moment.
                </p>
                <button class="btn btn-on-footer btn-lg fw-bold text-uppercase">S'inscrire</button>
                <div class="d-flex gx-2 flex-row gap-3 flex-wrap mt-3">
                    <a class="link-light" href="javascript:void(0)">
                        <svg fill="currentColor" class="rounded-1" width="30" height="30" viewBox="4 4 40 40" xmlns="http://www.w3.org/2000/svg">
                            <title>facebook</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="invisible_box" data-name="invisible box">
                                    <rect width="48" height="48" fill="none" />
                                    <rect width="48" height="48" fill="none" />
                                </g>
                                <g id="icons_Q2" data-name="icons Q2">
                                    <path d="M44,6.1V41.9a.3.3,0,0,1-.1.2,1.9,1.9,0,0,1-1.8,1.8H31.6V28.5h4.9c.3,0,.3,0,.4-.3l.3-2.5c.1-1,.2-2,.4-3s0-.3-.2-.3H31.6V18.5c0-.3.1-.7.1-1a1.8,1.8,0,0,1,1.6-1.6l1.3-.2h3c.2,0,.2,0,.2-.2V10.4c0-.1,0-.2-.2-.2H33a7.2,7.2,0,0,0-3.3.7A6,6,0,0,0,26.2,14a7.3,7.3,0,0,0-.8,3.6c-.1,1.5,0,3.1,0,4.7H20.3c-.2,0-.2.1-.2.2v5.7c0,.2,0,.2.2.2h5.1V43.8a.3.3,0,0,0-.1.2H5.9a1.9,1.9,0,0,1-1.8-1.8c-.1,0-.1-.1-.1-.2V6.1c0-.1,0-.2.1-.2A1.9,1.9,0,0,1,5.9,4.1H42.1a1.9,1.9,0,0,1,1.8,1.8Z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a class="link-light" href="javascript:void(0)">
                        <svg fill="currentColor" class="bg-white text-footer p-1 rounded-1" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" />
                            <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" />
                        </svg>
                    </a>
                    <a class="link-light" href="javascript:void(0)">
                        <svg fill="currentColor" class="bg-white text-footer rounded-1" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.67 8.14002C19.5811 7.7973 19.4028 7.48433 19.1533 7.23309C18.9038 6.98185 18.5921 6.80134 18.25 6.71001C16.176 6.4654 14.0883 6.35517 12 6.38001C9.91174 6.35517 7.82405 6.4654 5.75001 6.71001C5.40793 6.80134 5.09622 6.98185 4.84674 7.23309C4.59725 7.48433 4.41894 7.7973 4.33001 8.14002C4.10282 9.41396 3.99236 10.706 4.00001 12C3.99198 13.3007 4.10244 14.5994 4.33001 15.88C4.42355 16.2172 4.60391 16.5239 4.85309 16.7696C5.10226 17.0153 5.41153 17.1913 5.75001 17.28C7.82405 17.5246 9.91174 17.6349 12 17.61C14.0883 17.6349 16.176 17.5246 18.25 17.28C18.5885 17.1913 18.8978 17.0153 19.1469 16.7696C19.3961 16.5239 19.5765 16.2172 19.67 15.88C19.8976 14.5994 20.008 13.3007 20 12C20.0077 10.706 19.8972 9.41396 19.67 8.14002ZM10.36 14.39V9.63001L14.55 12L10.36 14.38V14.39Z" />
                        </svg>
                    </a>
                    <a class="link-light" href="javascript:void(0)">
                        <svg fill="currentColor" class="rounded-1" width="30" height="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                            <g>
                                <path d="M17.303,14.365c0.012-0.015,0.023-0.031,0.031-0.048v0.048H17.303z M32,0v32H0V0H32L32,0z M9.925,12.285H5.153v14.354
		h4.772V12.285z M10.237,7.847c-0.03-1.41-1.035-2.482-2.668-2.482c-1.631,0-2.698,1.072-2.698,2.482
		c0,1.375,1.035,2.479,2.636,2.479h0.031C9.202,10.326,10.237,9.222,10.237,7.847z M27.129,18.408c0-4.408-2.355-6.459-5.494-6.459
		c-2.531,0-3.664,1.391-4.301,2.368v-2.032h-4.77c0.061,1.346,0,14.354,0,14.354h4.77v-8.016c0-0.434,0.031-0.855,0.157-1.164
		c0.346-0.854,1.132-1.746,2.448-1.746c1.729,0,2.418,1.314,2.418,3.246v7.68h4.771L27.129,18.408L27.129,18.408z" />
                            </g>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>