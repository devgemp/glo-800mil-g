<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="./css/style.css">

    <title>GLO</title>
</head>

<body>
    <!-- Contenido del landing -->
    <div data-aos="fade-up">
        <img src="img/imagen-1.jpg" class="img-fluid mx-auto d-block" width="100%">
    </div>

    <div class="mt-5 mb-5" data-aos="fade-down">
        <img src="img/Trámite-ágil-sin-tantas-trabas.png" class="img-fluid mx-auto d-block w-50 mb-5">
        <img src="img/Contamos-con-una-tasa-preferencial-CAT--que-puede-oscilar-entre.png" class="img-fluid mx-auto d-block w-50 mb-5">
        <img src="img/cheques.png" class="img-fluid mx-auto d-block w-50">
    </div><br>

    <div class="mt-5 mb-5" data-aos="fade-right">
        <img src="img/Nuestros-planes-son-faciles-de-adaptarse.png" class="img-fluid mx-auto d-block mb-5" width="65%" height="35%">
        <img src="img/En-GLOBAL-FINANCIAL-SYSTEM-flexibilizamos-el-tiempo-a-tu-favor,.png" class="img-fluid mx-auto d-block mt-5 mb-5" width="75%" height="25%">
        <div class="container mt-5">
            <div class="row">
                <img src="img/12-meses.jpg" class="col-md-2 img-fluid mx-auto d-block">
                <img src="img/36-meses.jpg" class="col-md-2 img-fluid mx-auto d-block">
                <img src="img/60-meses.jpg" class="col-md-2 img-fluid mx-auto d-block">
                <img src="img/96-meses.jpg" class="col-md-2 img-fluid mx-auto d-block">
            </div>
        </div>
    </div><br>

    <div class="mt-5 mb-5" data-aos="fade-left">
        <img src="img/Vector-Smart-Object.png" class="img-fluid mx-auto d-block mb-5" width="40%"><br>
        <img src="img/Shape-1-copy-5.png" class="img-fluid mx-auto d-block w-50 mt-5">
    </div><br>

    <div class="mt-5 mb-5" data-aos="flip-left">
        <img src="img/plan-.jpg" class="img-fluid mx-auto d-block mb-5" width="85%">
        <img src="img/Contamos-con-los-mejores-asesores-del-mercado-y-con-planes-que-.png" class="img-fluid mx-auto d-block w-75">
    </div><br>

    <div class="mt-5 mb-5" data-aos="flip-right">
        <img src="img/buró-.jpg" class="img-fluid mx-auto d-block mb-5" width="85%">
        <img src="img/El-buró-no-es-determínate-para-que-puedas-acceder-a-tu-crédito.png" class="img-fluid mx-auto d-block w-75">
    </div><br>

    <div class="mt-5 mb-5" data-aos="flip-up">
        <img src="img/trámite-.jpg" class="img-fluid mx-auto d-block mb-5" width="85%">
        <img src="img/Tomamos-en-cuenta-cada-una-de-las-necesidades-y-los-posibles-es.png" class="img-fluid mx-auto d-block w-75">
    </div><br>

    <div class="mt-5 mb-5" data-aos="flip-down">
        <img src="img/imagen-2.jpg" class="img-fluid mx-auto d-block w-75">
    </div><br>

    <div class="container text-center mt-5 mb-5" data-aos="fade-up">
        <div class="row justify-content-center mb-3">
            <div class="col-md-5">
                <div class="shadow-lg bg-white rounded">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="h4">¡Solicítalo hoy, sin tanto papeleo!</h4>
                        </div>
                        <div class="card-body">
                            <form action="save.php" method="POST">
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control text-center" name="nombres" aria-describedby="helpId" placeholder="Nombre(s)">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control text-center" name="apellidos" aria-describedby="helpId" placeholder="Apellidos">
                                    </div>
                                    <div class="form-group mb-3">
                                        <select name="sexo" class="form-control text-center">
                                            <option selected disabled>Sexo</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <select name="edad" class="form-control text-center">
                                            <option selected disabled>Seleccione Edad</option>
                                            <option value="18 a 24 años">18 a 24 años</option>
                                            <option value="25 a 34 años">25 a 34 años</option>
                                            <option value="35 a 49 años">35 a 49 años</option>
                                            <option value="45 a 54 años">45 a 54 años</option>
                                            <option value="55 a 64 años">55 a 64 años</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control text-center" name="correo" aria-describedby="helpId" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="number" class="form-control text-center" name="telefono" aria-describedby="helpId" placeholder="Teléfono (10 digitos)">
                                    </div>
                                    <div class="form-group mb-3">
                                        <select name="importe" class="form-control text-center">
                                            <option selected disabled>Seleccione el importe</option>
                                            <option value="$50,000">$50,000</option>
                                            <option value="$100,000">$100,000</option>
                                            <option value="$150,000">$150,000</option>
                                            <option value="$200,000">$200,000</option>
                                            <option value="$250,000">$250,000</option>
                                            <option value="$300,000">$300,000</option>
                                            <option value="$500,000">$500,000</option>
                                            <option value="$1,000,000">$1,000,000</option>
                                            <option value="$2,000,000">$2,000,000</option>
                                            <option value="$3,000,000">$3,000,000</option>
                                        </select>
                                    </div>

                                    <!-- Inputs ocultos -->
                                    <input type="hidden" name="marca" value="GLOBAL FINANCIAL SYSTEM">
                                    <input type="hidden" name="medio" value="GOOGLE">
                                    <input type="hidden" name="fecha" value="<?= date('Y-m-d') ?>">
                                    <input type="hidden" name="landing" value="glo-800mil-g">

                                    <div class="d-grip gap-2">
                                        <button type="submit" name="save" class="btn btn-outline-success btn-block">¡Solicítalo YA!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <footer class="mt-5 mb-5">
        <img src="img/Te-invitamos-a-visitarnos-en-Montecito-38,-Torre-WTC,-Col.png" class="img-fluid mx-auto d-block w-75">
    </footer>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198115615-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-198115615-1');
    </script>

    <!-- Animate on Scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
