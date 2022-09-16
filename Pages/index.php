<?php ob_start(); ?>

<h2 class="m-4 perso_colorBlueLight mx-auto d-flex justify-content-center">Rémi : Développeur web junior</h2>
<div data-aos="fade-right" data-aos-once="false" data-aos-delay="1000" data-aos-mirror="true">
    <div class="container text-center" id="presentation">
        <div class="row mx-auto">
            <div class="col-12 col-lg-4">
                <img src="../Sources/images/unnamed.webp" alt="photo profil" class="perso_ImageRonde">
            </div>
            <aside class="col-12 col-lg-8">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Tenetur unde maiores maxime ad sunt sit, aperiam recusandae nesciunt nobis, nemo dolor blanditiis.
                Saepe quae cum alias quaerat, amet qui cupiditate?
                Maxime impedit blanditiis facere atque natus optio quae distinctio
                cum ipsum accusantium consectetur dolores reiciendis officiis totam sapiente ipsam explicabo
                esse soluta, veritatis tenetur! Odit nesciunt repellendus sunt nobis aut?
            </aside>
        </div>
    </div>
    <div class="container text-center" id="competences">

        <div data-aos="flip-right" data-aos-delay="800" data-aos-duration="2500" data-aos-easing="ease-in-out-back">
            <h2 class="m-5 perso_colorBlueLight">Mes compétences</h2>

            <!-- progress-bar -->
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4 my-4">
                    <h3>HTML / CSS</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 my-4">
                    <h3>PHP / POO</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 my-4">
                    <h3>Javascript</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 my-4">
                    <h3>Java</h3>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 my-4">
                    <h3>BDD (Postges-MySQL)</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 48%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">48%</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 my-4">
                    <h3>Prototypage (Figma)</h3>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" id="portfolio">
            <h2 class="m-5 perso_colorBlueLight">Mon Portfolio</h2>

            <div class="card-group">
                <!-- Card 1 -->
                <div class="card mb-3 mx-3 rounded">
                    <div class="card-header bg-transparent persoColor_Grey">Terre A 2 mains
                        <span class="badge badge-pill bg-info">Bootstrap</span>
                        <span class="badge badge-pill bg-info">Html-CSS</span>

                    </div>
                    <div class="card-body text-success p-0 ">
                        <img src="../Sources/images/remixxx31.github.io_TERRE_A_2MAINS__11zon.webp" class="d-block w-100" />
                    </div>
                    <div class="card-footer bg-transparent">
                        <button, type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">En savoir plus</button,>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>
                    <div class="modal fade" id="modal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" arial-label="Close"></button>
                                </div>
                                <div class="modal-body" aria-describedby="content">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Quos perferendis repellendus eveniet, fugiat accusantium
                                        explicabo facilis illum, tempore consectetur, totam distinctio
                                        obcaecati nisi! Eos magni totam, doloremque ex laborum maiores!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                card 2
                <div class="card mb-3 mx-3 rounded">
                    <div class="card-header bg-transparent persoColor_Grey ">Mediatek
                        <span class="badge badge-pill bg-info">Symfony</span>
                        <span class="badge badge-pill bg-info">PHP</span>
                    </div>
                    <div class="card-body text-success p-0">
                        <img src="../Sources/images/mediatek.webp" class="d-block w-100" />
                    </div>
                    <div class="card-footer bg-transparent">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours3">En savoir plus</button>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="card mb-3 mx-3">
                    <div class="card-header bg-transparent persoColor_Grey ">DICE_STAR
                        <span class="badge badge-pill bg-info">JS</span>
                        <span class="badge badge-pill bg-info">Html-CSS</span>
                        <span class="badge badge-pill bg-info">Bootstrap</span>
                    </div>
                    <div class="card-body text-success p-0">
                        <img src="../Sources/images/DIce_star.webp" class="d-block w-100" />
                    </div>
                    <div class="card-footer bg-transparent">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#catalogue">En savoir plus</button>
                    </div>
                </div>
                <!-- Modal 1 -->
            </div>
            <div class="modal fade" id="cours1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cours Javascript</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="../sources/images/cours1.png" class="d-block w-100" />
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, earum qui! Ab dolores non repellat cupiditate reprehenderit,
                                corrupti iure tempore sint similique veniam eum laborum laudantium at, incidunt sunt autem!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 2 -->

            <div class="modal fade" id="cours3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cours PHP</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="../sources/images/cours3.png" class="d-block w-100" />
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, earum qui! Ab dolores non repellat cupiditate reprehenderit,
                                corrupti iure tempore sint similique veniam eum laborum laudantium at, incidunt sunt autem!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 3 -->

            <div class="modal fade" id="catalogue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cas pratique PHP / MySQL</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="../sources/images/cours1.png" class="d-block w-100 " />
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, earum qui! Ab dolores non repellat cupiditate reprehenderit,
                                corrupti iure tempore sint similique veniam eum laborum laudantium at, incidunt sunt autem!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container text-center" id="temoignage">
                <h2 class="m-5 perso_colorBlueLight">Mes témoignages</h2>
                <div class='row'>
                    <!--image1 -->
                    <div class="col-12 col-lg-4">
                        <img src="../Sources/images/Client1.jpg" class="perso_ImageRonde img-fluid m-auto" alt="homme_client1">
                        <h3>Client 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum velit,
                            eos nihil impedit cum commodi ipsum atque! Ipsa quia totam enim reprehenderit nobis
                            commodi, necessitatibus repellendus voluptatibus, doloribus rerum cumque.</p>
                    </div>
                    <!--image2 -->
                    <div class="col-12 col-lg-4">
                        <img src="../Sources/images/Client2.jpg" class="perso_ImageRonde img-fluid m-auto" alt="femme_client2">
                        <h3>Client 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum velit,
                            eos nihil impedit cum commodi ipsum atque! Ipsa quia totam enim reprehenderit nobis
                            commodi, necessitatibus repellendus voluptatibus, doloribus rerum cumque.</p>
                    </div>
                    <!--Image3-->
                    <div class="col-12 col-lg-4">
                        <img src="../Sources/images/Client3.jpg" class="perso_ImageRonde img-fluid m-auto" alt="femme_client3">
                        <h3>Client 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum velit,
                            eos nihil impedit cum commodi ipsum atque! Ipsa quia totam enim reprehenderit nobis
                            commodi, necessitatibus repellendus voluptatibus, doloribus rerum cumque.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $content = ob_get_clean();
        require "commons/template.php";
        ?>