<?php ob_start(); ?>

    <div class="row text-center mt-3 mb-4">
        <div class="col-lg-6 offset-lg-3">
            <h1 class="w-100 main-title mt-4">Part de Rêves - Votre Artisan du Voyage</h1><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1 mt-md-0 col-sm-10 offset-sm-1 py-2 mt-lg-4 d-flex flex-column justify-content-center">
            <div class="embed-responsive embed-responsive-16by9 video-youtube">
                <iframe class="embed-responsive-item" width="560" height="315"
                        src="https://www.youtube.com/embed/XSCd63x8ga4?rel=0&autoplay=1&controls=0&showinfo=0&loop=1&playlist=XSCd63x8ga4&modestbranding=1&mute=1"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture">
                </iframe>
            </div>
            <div class="filter"></div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-10 offset-md-1 mt-md-0 col-sm-10 offset-sm-1 text-center py-2 mt-lg-4">
            <div id="carouselPromotions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active img-fluid">
                        <img class="d-block custom-carousel w-100" src="img/promo-img1.jpg" alt="First slide">
                    </div>
                    <?php while ($dataPromotionsModel = $data->fetch()) { ?>
                        <figure class="carousel-item img-fluid">
                            <img class="d-block custom-carousel w-100"
                                 src="imgPromo/<?php echo htmlspecialchars($dataPromotionsModel['file']); ?>"
                                 alt="Others slide">
                            <figcaption><?php echo htmlspecialchars($dataPromotionsModel['description']); ?></figcaption>
                        </figure>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselPromotions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPromotions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row text-center mt-5 mb-4">
        <div class="col-lg-6 offset-lg-3">
            <h2 class="w-100 main-title mt-4">Nos clients en parlent le mieux ...</h2><br/>
        </div>
    </div>

    <div class="row text-center mt-4">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 mt-md-2">
            <div id="carouselReview" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="quote">Simon. L</p>
                        <p>J'apprécie beaucoup les bons conseils et que l'agence reçoive sur RDV.<br/>
                            Je confie mes futurs mariés à Sandrine sans hésiter en sachant qu'elle trouvera<br/>
                            le voyage de noces de leurs rêves !</p>
                        <p class="quote">Avis extrait de "Google Avis".</p><br/>
                    </div>
                    <div class="carousel-item">
                        <p class="quote">Lucas. B</p>
                        <p>Vacances été 2019 encore réservées chez Part de Rêves !!!<br/>
                            Vraiment à l'écoute de nos attentes et disponible, Sandrine arrive toujours<br/>
                            à satisfaire toute la famille. Merci</p>
                        <p class="quote">Avis extrait de "Google Avis".</p><br/>
                    </div>
                    <div class="carousel-item">
                        <p class="quote">Celine. M</p>
                        <p>Une agence aux petits soins du début à la fin de la préparation de votre voyage.<br/>
                            C'est vraiment agréable. Nous avions fait plusieurs agences pour comparer et c'est
                            vraiment celle ci qui a retenu toute notre attention.<br/>
                            Professionnalisme, conseil, écoute et prix.</p>
                        <p class="quote">Avis extrait de "Google Avis".</p><br/>
                    </div>
                    <div class="carousel-item">
                        <p class="quote">topdriverjeanmarc</p>
                        <p>Une agence de voyages pas comme les autres je vous invite a reserver vos<br/> projets de
                            vacances dans cette agence tres grand professionnalisme tres disponible<br/> dossier très
                            complet et rien n'est laisser au hasard et surtout d' une grande<br/> gentillesse
                            je lui attribue la note de 5 sans hesiter merci</p>
                        <p class="quote">Avis extrait des "Pages Jaunes".</p><br/>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselReview" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselReview" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div>
                <p class="review-link">Pour nous laisser votre avis, cliquez
                    <a class="underline" target="_blank"
                       href="https://www.google.com/search?q=part+de+r%C3%AAves&oq=part+de+r%C3%AAves+&aqs=chrome.0.69i59l4j69i60l3j69i65.2269j0j7&sourceid=chrome&ie=UTF-8#lrd=0x47e66360bdeba8af:0x193526f7f4bfd946,3,,,">ici</a>
                    !</p>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>