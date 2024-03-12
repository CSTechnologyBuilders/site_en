
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CS Technology Builders</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="img/logo.ico">
            <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 800px;
        }

        .image {
            flex: 1;
            padding: 20px;
        }

        .text {
             flex: 1;
             padding: 15px;
             font-size: 15px; /* Augmentez la taille de la police selon vos préférences */
         }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <!-- menu responsive -->
         
        <div class="menu_toggle">
            <span></span>
        </div>

        <p><span><img src="img/logt.jpg" alt="Image" class="logt"></p>
            <style type="text/css">
                .logt{
                    width: 80px;
                }
            </style>
        <ul class="menu">
            <li><a href="/" class="read_more">Acceuil</a></li>
            <li><a href="/#services">Services</a></li>
            <li><a href="/#contact">Contact</a></li>
            <li><a href="/#temoignage">Temoignages</a></li>

        </ul>
        <div class="logo">
            <p><span>CS </span>Technology <span>Builders</span></p>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <div class="image">
                <img src="img/Maintenance.jpg" alt="Image">
            </div>
            <div class="text">
                <h1>Service de maintenance</h1>
                <p>Nous proposons des services de maintenance préventive, en effectuant des contrôles réguliers pour détecter les problèmes potentiels.</p>
                <p>En cas de panne, notre équipe intervient rapidement pour diagnostiquer et résoudre les problèmes, minimisant ainsi les interruptions de service. La sécurité informatique est également une priorité, avec des mesures de protection avancées pour prévenir les cyberattaques. </p>
                <p>En plus de la maintenance technique, nous offrons des conseils et des consultations pour optimiser l'infrastructure informatique. En travaillant avec nous, les entreprises et nos clients peuvent s'assurer que leurs systèmes informatiques sont entre de bonnes mains, leur permettant de se concentrer sur leurs activités principales en toute tranquillité d'esprit.</p>
            </div>
        </div>
    </div>
</body>

<script>
        var botmanWidget = {
            title:"BuilderMan",
            aboutText: 'Write Something',
            mainColor:"#35b90d",
            aboutLink:"https://botman.io",
            introMessage: "Hi, moi c'est builderMan votre assistant bot de coeur...🤖 ",
             };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>