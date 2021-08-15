<?php include "templates/header.php" ?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/servicios.jpg" alt="nosotros" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">
                    Servicios
                </h2>
                <div id="servicios">
                    <div class="card">
                        <div class="card-header" id="servicio1">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1"
                                    aria-expanded="true" aria-controls="#descripcion1">
                                    Servicio 1
                                </button>
                            </h2>
                        </div>
                        <!--.card-header-->
                        <div id="descripcion1" class="collapse show" aria-labelledby="servicio1"
                            data-parent="#servicios">
                            <div class="card-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate magna ac dui
                                    placerat ultricies. Donec eu dui sodales, semper lacus sit amet, commodo tellus.
                                    Morbi dapibus lacus ultricies urna maximus, eget mattis lorem elementum. Vivamus
                                    elit lacus, rutrum id nunc eu, dapibus dignissim dui. In leo sapien, interdum sit
                                    amet aliquet sed, rhoncus in orci.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--.card-->
                    <div class="card">
                        <div class="card-header" id="servicio2">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2"
                                    aria-expanded="false" aria-controls="#descripcion2">
                                    Servicio 2
                                </button>
                            </h2>
                        </div>
                        <!--.card-header-->
                        <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                            <div class="card-body">
                                <p>
                                    Ut eget metus et leo porta semper vel et metus. Nulla venenatis auctor ligula, nec
                                    sodales massa ullamcorper id. Fusce non est nulla. Fusce aliquet vel metus vel
                                    mollis. Curabitur eget nibh auctor, faucibus lacus nec, volutpat ipsum. Sed mollis
                                    augue sit amet orci interdum, in sodales turpis tempus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--.card-->
                    <div class="card">
                        <div class="card-header" id="servicio3">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3"
                                    aria-expanded="false" aria-controls="#descripcion3">
                                    Servicio 3
                                </button>
                            </h2>
                        </div>
                        <!--.card-header-->
                        <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                            <div class="card-body">
                                <p>
                                    Donec nec ex vel nunc feugiat euismod quis vel justo. Etiam in massa eu arcu
                                    lobortis pellentesque a eu eros. Nulla facilisi. Duis id lacus ex. Morbi sed nisl ut
                                    urna aliquam interdum blandit ut orci. Nunc id turpis posuere, tempus lectus eu,
                                    maximus nunc. Ut vel lorem a tellus scelerisque dapibus vitae at nisl.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--.card-->
                </div>
            </main>
            <aside class="col-lg-4 pt-4 pt-lg-0 mt-5 mt-md-0">
                <div class="sidebar">
                    <h2 class="text-center text-uppercase mt-4 p-3 ">
                        Nuevos <br>clientes
                    </h2>
                    <p class="lead text-center mt-4">Recibe 20% de descuento<br> con este cupón</p>
                    <div class="cupon p-1 mt-5 mb-5">
                        <p class="text-uppercase text-center">
                            <span class="display-4">20% de descuento</span>
                            <br>en todos los servicios
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <div class="container-fluid citas py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 text-center">
                <h3 class="text-uppercase">Realiza una cita</h3>
                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tortor ac eros
                    congue
                    blandit et sed felis. Sed aliquam viverra sem, id luctus nunc luctus quis.</p>
                <a href="" class="btn btn-primary mt-3 btn-lg text-uppercase">Leer mas</a>
            </div>
        </div>
    </div>

    <?php include "templates/footer.php" ?>