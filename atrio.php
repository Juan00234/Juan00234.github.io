<meta http-equiv = "X-UA-Compatible" content = "IE = 9; IE = 7; IE = 8; IE = 11; IE = EDGE, Chrome = 1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atrio. San Pedro y San Pablo</title>
    <link rel="stylesheet" href="principal_atrio.css">

    
  
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/fondo2.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="indexx.php" id="enlace-inicio" class="btn-header">Home</a>
                     <a href="login.php" id="enlace-inicio_sesion" class="btn-header">Inicio de Sesión</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Historia</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Ubicacion</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Gobernantes</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                   
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Atrio. Iglesia San Pedro y San Pablo</h1>
            <h2>Jilotepec Centro</h2>
        </div>
    </header>
<main>
    <br>
<br>
<div class="frase-abajo" id="frase-abajo">
<h3><marquee> -Lugar: Plaza Manuel Ávila Camacho No. 210, JIlotepec, Estado de Mexico<br>
     -CP: 54240<br>
     -Horario: 9:00 hrs - 20:00 hrs<br>
     -Coste: Ninguno<br>
     -Telefono: 7617340015</h3></marquee>
     <br>
     <br>
     <br></div>
 <div style="text-align: justify;">    
<h3>Parroquia de estilo colonial, hecha por los franciscanos del siglo XVI, Acompañada de un atrio hermoso, una cruz de manufactura indígena, una pila bautismal tallada en roca y un ex convento franciscano.
<br> 
La parroquia de San Pedro y San Pablo fue fundada por los franciscanos en el siglo XVI. En ella se aprecian un púlpito, una enorme pila bautismal de estilo tequitqui y algunos monogramas marianos. Su fachada es sencilla, fue labrada en piedra y cuenta con una capilla abierta, dedicada a la ascensión de Jesucristo, con un retablo que conserva siete óleos del siglo XVIII. Tiene, además, una torre en forma de cubo, con reloj. Su convento se encuentra anexo, se puede visitar el claustro y, en su parte frontal, se aprecia una cruz indígena de rica iconografía.</h3></div>

<br>

 <head>


        <style>
            .slide {
                position: relative;
                box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
                margin-top: 26px;
                width:400;
                height: 300px
                
            }
            .slide-inner {
                position: relative;
                overflow: hidden;
                width: 100%;
                height: calc( 300px + 0em);
            }
            .slide-open:checked + .slide-item {
                position: static;
                opacity: 100;
            }
            .slide-item {
                position: absolute;
                opacity: 0;
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }
            .slide-item img {
                display: block;
                height: auto;
                max-width: 100%;
            }
            .slide-control {
                background: rgba(0, 0, 0, 0.28);
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                display: none;
                font-size: 40px;
                height: 40px;
                line-height: 35px;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(0, -50%);
                cursor: pointer;
                -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
                text-align: center;
                width: 40px;
                z-index: 10;
            }
            .slide-control.prev {
                left: 2%;
            }
            .slide-control.next {
                right: 2%;
            }
            .slide-control:hover {
                background: rgba(0, 0, 0, 0.8);
                color: #aaaaaa;
            }
            #slide-1:checked ~ .control-1,
            #slide-2:checked ~ .control-2,
            #slide-3:checked ~ .control-3 {
                display: block;
            }
            .slide-indicador {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }
            .slide-indicador li {
                display: inline-block;
                margin: 0 5px;
            }
            .slide-circulo {
                color: #828282;
                cursor: pointer;
                display: block;
                font-size: 35px;
            }
            .slide-circulo:hover {
                color: #aaaaaa;
            }
            #slide-1:checked ~ .control-1 ~ .slide-indicador 
                 li:nth-child(1) .slide-circulo,
            #slide-2:checked ~ .control-2 ~ .slide-indicador 
                  li:nth-child(2) .slide-circulo,
            #slide-3:checked ~ .control-3 ~ .slide-indicador 
                  li:nth-child(3) .slide-circulo {
                color: #428bca;
            }
            #titulo {
                width: 100%;
                position: absolute;
                padding: 0px;
                margin: 0px auto;
                text-align: center;
                font-size: 27px;
                color: rgba(255, 255, 255, 1);
                font-family: 'Open Sans', sans-serif;
                z-index: 9999;
                text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
                     -1px 0px 2px rgba(255, 255, 255, 0);
            }
        </style>
    </head>
    <body>
     
        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" 
                      name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="img/iglesia.jpg" alt="" width="410" height="350px">
                </div>
                <input class="slide-open" type="radio" id="slide-2" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="img/atrio.png" alt="" width="410" height="300px">
                </div>
                <input class="slide-open" type="radio" id="slide-3" 
                      name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="img/atrio1.jpg" alt="" width="410" height="300px">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    
    </body>
</div>
 <br>
 <br>
<div style="text-align: center;">
<h1>¿Donde está?</h1>
<br>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.356989769692!2d-99.53686502759746!3d19.95148368291293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2363ce6dc8f5d%3A0x77a07b20a79cb619!2sParroquia%20de%20San%20Pedro%20y%20San%20Pablo!5e0!3m2!1ses-419!2smx!4v1686893211243!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
<br>
<br>
<div class="frase-abajo" id="frase-abajo">
<marquee>Jilotepec "Pueblo con encanto"</marquee>
</div>

<script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>