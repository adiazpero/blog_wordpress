<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
 <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/yeti/bootstrap.min.css"> -->

    <title>Hello, world!</title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo Corporativo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Blog</a>
                    <a class="nav-item nav-link" href="#">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fin Menu -->

    <!-- Blog -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Mi Blog Personal</h2>
        <hr>

        <div class="row">
            <!-- Entradas -->
            <div class="col-lg-9">
                <!-- Entrada -->
                <div class="card-body">
                    <a href="single.html">
                        <h2>Titulo de la entrada</h2>
                    </a>
                    <p class="small mb-0">Fecha: 14-07-2020</p>
                    <p class="small  mb-0">Autor: Ana Diaz</p>
                    <p class="small">categoria: <a href="#">Novela / Aventura</a> Etiquetas: <a href="#">Azul / Verde</a></p>
                    <img src="img/Lectura-leer-libros.jpg" alt="" class="img-fluid mb-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, laudantium ratione dicta nulla, commodi reprehenderit totam ex, odit architecto earum eligendi minima. Nostrum similique optio nobis minus itaque facilis recusandae.</p>
                    <a href="single.html" class="btn btn-primary">Maas info...</a>
                </div>

                <!-- Entrada -->
                <div class="card-body">
                    <a href="single.html">
                        <h2>Titulo de la entrada</h2>
                    </a>
                    <p class="small mb-0">Fecha: 12-07-2020</p>
                    <p class="small  mb-0">Autor: Ana Diaz</p>
                    <p class="small">categoria: <a href="#">Novela / Aventura</a> Etiquetas: <a href="#">Azul / Verde</a></p>
                    <img src="img/lectura-facil-espana.jpg" alt="" class="img-fluid mb-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, laudantium ratione dicta nulla, commodi reprehenderit totam ex, odit architecto earum eligendi minima. Nostrum similique optio nobis minus itaque facilis recusandae.</p>
                    <a href="single.html" class="btn btn-primary">Maas info...</a>
                </div>

                <!-- Paginacion -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </div>

            <!-- Aside -->
            <div class="col-lg-3 card-body">
                <div>
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="img/la-sinfonia-del-tiempo.jpg" alt="" class="img-fluid mb-4">
                </div>
                <div>
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="img/perro.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Fin blog -->

    <!-- Footer -->
    <footer class="container-fluid py-4 text-center text-light bg-dark">
        <h5>Lorem ipsum dolor, sit amet</h5>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
   <!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

    <?php wp_footer(); ?>
</body>

</html>