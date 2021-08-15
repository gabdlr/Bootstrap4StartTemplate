<?php include "templates/header.php" ?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/nosotros.jpg" alt="nosotros" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">
                    Nosotros
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit nulla sed arcu
                    gravida, ac laoreet nisi hendrerit. Cras aliquet vestibulum velit, at semper augue bibendum
                    nec. Sed gravida velit dui, et accumsan nulla consequat at. Curabitur pharetra sit amet
                    velit id rhoncus. Pellentesque cursus sem ut lectus molestie tincidunt.
                    Proin vestibulum massa vitae nulla mattis, ut finibus nisl ornare. Mauris id tempus sem, at suscipit
                    sapien. Maecenas tellus risus, molestie quis sodales vitae, gravida eget metus. Nulla eget purus eu
                    arcu iaculis pretium nec a leo. Nam vitae risus ex. Integer nec eleifend nibh.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit nulla sed arcu
                    gravida, ac laoreet nisi hendrerit. Cras aliquet vestibulum velit, at semper augue bibendum
                    nec. Sed gravida velit dui, et accumsan nulla consequat at. Curabitur pharetra sit amet
                    velit id rhoncus. Pellentesque cursus sem ut lectus molestie tincidunt.
                    Praesent rhoncus gravida suscipit. Etiam sodales dolor vel mattis congue. Aliquam ut purus feugiat
                    tellus tempor feugiat vitae sit amet justo.</p>
                <h1 class="text-center text-capitalize mt-5 encabezado">
                    <span class="text-lowercase d-block">conoce nuestras</span>instalaciones
                </h1>
                <div class="imagenes pt-4">
                    <div class="row text-center">
                    <a href="#" data-target="#imagen_1" data-toggle="modal" class="col-md-4 mb-4">
                        <img src="img/galeria_mini_01.jpg" alt="mini 01">
                    </a>
                    <a href="#" data-target="#imagen_2" data-toggle="modal" class="col-md-4 mb-4">
                        <img src="img/galeria_mini_02.jpg" alt="mini 02">
                    </a>
                    <a href="#" data-target="#imagen_3" data-toggle="modal" class="col-md-4 mb-4">
                        <img src="img/galeria_mini_03.jpg" alt="mini 03">
                    </a>
                    </div>
                    <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_01.jpg" alt="grande 01" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_02.jpg" alt="grande 02" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_03.jpg" alt="grande 03" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
                <div class="sidebar horario">
                    <h2 class="text-center text-uppercase mt-4 mt-5">Horarios</h2>
                    <p class="text-center mt-3 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis
                        tortor ac
                        eros
                        congue blandit et sed felis. Sed aliquam viverra sem, id luctus nunc luctus quis. Nam tincidunt
                        congue
                        iaculis.</p>
                    <table class="table table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">Día</th>
                                <th class="text-center">De</th>
                                <th class="text-center">Hasta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Miércoles</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Jueves</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Viernes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Sábado</td>
                                <td>10:00</td>
                                <td>14:00</td>
                            </tr>
                            <tr>
                                <td>Domingo</td>
                                <td>Cerrado</td>
                                <td>Cerrado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </aside>
        </div>
    </div>

    <?php include "templates/footer.php" ?>