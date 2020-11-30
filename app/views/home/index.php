<?php 
    $this->view('home/cabecario');
?>

<body>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="mp4/bg.mp4" type="video/mp4">
    </video>

    <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="masthead-content text-white py-5 py-md-0">
                        <h2 class="mb-3 mx-auto" style="width: calc(115%);">Quer Ser um Desenvolvedor ?</h2>
                        <p class="mb-5">Se cadastre no nosso site , e lhe mandaremos fertar exclusivas !!<br>
                            <strong>Janeiro 2020<br></strong>
                        </p>

                    </div>
                    <?php 
                        $this->view('home/form');
                        ?>
                </div>

            </div>

        </div>

    </div>
    <?php 
        $this->view('home/menu');
                        ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

</body>

</html>