<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CS Technology Builders</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link rel="stylesheet" href="./style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link rel="icon" href="img/logo.ico">
    </head>
    <body>

    <body>
       
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        @if ($success)
            <div class="alert alert-success">
                             {{ $success }}
            </div>
        @endif  

        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <!-- <p><span><img src="img/logt.jpg" alt="Image" class="logt"></p>  -->
            <style type="text/css">
                .logt{
                    width: 80px;
                }
            </style>   
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#temoignage">Temoignages</a></li>

        </ul>
        <div class="logo">
            <p><span>CS </span>Technology <span>Builders</span></p>
        </div>
    </header>
    <!-- section Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1>Bienvenue chez <span> Cs</span> Technology  <span>Builders..</span>👋</h1>
            <p>"Vous imaginez nous construisons..."</p>
            <p> Toujours disponible pour vos services technologiques</p> 

            <a href="#contact">Nous contacter</a>
        </div>
        <div class="right">
            <style type="text/css">
                *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                
                .slide-container{
                    position: relative;
                    width: 800px;
                    height: 350px;
                    
                }
                .slide-container .slides{
                    width: 100%;
                    height: calc(100% - 40px);
                    position: relative;
                    overflow: hidden;
                }
                .slide-container .slides img{
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    object-fit: cover;
                }
                .slide-container .slides img:not(.active){
                    top: 0;
                    left: -100%;
                }
                span.next, span.prev{
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    padding: 14px;
                    color: #eee;
                    font-size: 24px;
                    font-weight: bold;
                    transition: 0.5s;
                    border-radius: 3px;
                    user-select: none;
                    cursor: pointer;
                    z-index: 1;
                }
                span.next{
                    right: 20px;
                }
                span.prev{
                    left: 20px;
                }
                span.next:hover, span.prev:hover{
                    background-color: #eeecf3;
                    opacity: 0.8;
                    color: #222;
                } 
                .dotsContainer{
                    position: absolute;
                    bottom: 5px;
                    z-index: 3;
                    left: 50%;
                    transform: translateX(-50%);
                }
                .dotsContainer .dot{
                    width: 15px;
                    height: 15px;
                    margin: 0px 2px;
                    border: 3px solid rgb(245, 244, 248);
                    border-radius: 50%;
                    display: inline-block;
                    cursor: pointer;
                    transition: background-color 0.6s ease;
                }
                .dotsContainer .active{
                    background-color: #28047c;
                }
        
                @keyframes next1{
                    from{
                        left: 0%
                    }
                    to{
                        left: -100%;
                    }
                }
                @keyframes next2{
                    from{
                        left: 100%
                    }
                    to{
                        left: 0%;
                    }
                }
        
                
                @keyframes prev2{
                    from{
                        left: -100%
                    }
                    to{
                        left: 0%;
                    }
                }
        
            </style>
              
            <div class="slide-container">
            
            <div class="slides">
                <img src="img/securite.jpg" class="active">
                <img src="img/mobile.jpg">
                <img src="img/web.jpg">
                <img src="img/Maintenance.jpg">
                
            </div>
        
            <div class="buttons">
                <span class="next">&#10095;</span>
                <span class="prev">&#10094;</span>
            </div>
        
            <div class="dotsContainer">
                <div class="dot active" attr='0' onclick="switchImage(this)"></div>
                <div class="dot" attr='1' onclick="switchImage(this)"></div>
                <div class="dot" attr='2' onclick="switchImage(this)"></div>
                <div class="dot" attr='3' onclick="switchImage(this)"></div>
                <div class="dot" attr='4' onclick="switchImage(this)"></div>
            </div>
        
        </div>
        
        <script type="text/javascript">
            
            // Access the Images
            let slideImages = document.querySelectorAll('img');
            // Access the next and prev buttons
            let next = document.querySelector('.next');
            let prev = document.querySelector('.prev');
            // Access the indicators
            let dots = document.querySelectorAll('.dot');
        
            var counter = 0;
        
            // Code for next button
            next.addEventListener('click', slideNext);
            function slideNext(){
            slideImages[counter].style.animation = 'next1 2s ease-in forwards';
            if(counter >= slideImages.length-1){
                counter = 0;
            }
            else{
                counter++;
            }
            slideImages[counter].style.animation = 'next2 2s ease-in forwards';
            indicators();
            }
        
            // Code for prev button
            prev.addEventListener('click', slidePrev);
            function slidePrev(){
            slideImages[counter].style.animation = 'prev1 2s ease-in forwards';
            if(counter == 0){
                counter = slideImages.length-1;
            }
            else{
                counter--;
            }
            slideImages[counter].style.animation = 'prev2 2s ease-in forwards';
            indicators();
            }
        
            // Auto slideing
            function autoSliding(){
                deletInterval = setInterval(timer, 3000);
                function timer(){
                    slideNext();
                    indicators();
                }
            }
            autoSliding();
        
            // Stop auto sliding when mouse is over
            const container = document.querySelector('.slide-container');
            container.addEventListener('mouseover', function(){
                clearInterval(deletInterval);
            });
        
            // Resume sliding when mouse is out
            container.addEventListener('mouseout', autoSliding);
        
            // Add and remove active class from the indicators
            function indicators(){
                for(i = 0; i < dots.length; i++){
                    dots[i].className = dots[i].className.replace(' active', '');
                }
                dots[counter].className += ' active';
            }
        
            // Add click event to the indicator
            function switchImage(currentImage){
                currentImage.classList.add('active');
                var imageId = currentImage.getAttribute('attr');
                if(imageId > counter){
                slideImages[counter].style.animation = 'next1 2s ease-in forwards';
                counter = imageId;
                slideImages[counter].style.animation = 'next2 2s ease-in forwards';
                }
                else if(imageId == counter){
                    return;
                }
                else{
                slideImages[counter].style.animation = 'prev1 2s ease-in forwards';
                counter = imageId;
                slideImages[counter].style.animation = 'prev2 2s ease-in forwards';	
                }
                indicators();
            }
        
        </script>


        </div>    
    </section>




    <!-- section vehicule -->

    

    <!-- section services -->

    <section id="services">
        <h1 class="section_title">Nos Services</h1>
        <div class="list_services">
            <div class="service" class="div-zoom">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Developpement Web</h3>
                <p>Nous déployons des solutions web efficace et integrable selon vos besoins </p>
                 <a href="/DevWeb" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Maintenance informatique</h3>
                <p>Ce service est plus centrer sur l'entretien des machines ordinateur (laptop, desktop ) </p>
                 <a href="/Maintenance" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Graphique design</h3>
                <p>Construisez des design abile pour vos cibles  </p>
                 <a href="/GraphDesign" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Developpement d'application mobile</h3>
                <p>Nous construisons des applications robuste et efficace pour vos besoins.</p>
                 <a href="/DevApp" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Sécurité des reseaux</h3>
                <p>possédez plus de liberté sur les réseaus avec nos services de sécurité.</p>
                 <a href="/Securite" class="read_more">Lire Plus</a>
            </div>
        </div>
        <h1 class="section_title">Témoignages</h1>

    </section>
    <!-- Bouton de chat -->
    

    <!--------------------- section temoignage--------------- -->
    <section id="temoignage" class="testimonials section-bg" id="services">
        
        <div class="container">
  
          <div class="section-title">
          <h2>Testimonials</h2>
          </div>
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->


    

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Nos Services</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15937.93313521318!2d11.4996556!3d3.8837497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x108bcf53ba347f7d%3A0x67f9cc68e52ddd0c!2sCS%20Technology%20Builders%2C%20Yaound%C3%A9!3m2!1d3.8666452!2d11.5650925!4m5!1s0x0%3A0x0!2s@3.8600704%2C11.5146752!3m2!1d3.8600704!2d11.5146752!5e0!3m2!1sfr!2sfr!4v1644955637071!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
            <div class="form_contact">
               
                <h3>Envoyer un message</h3>
                <form action="/ajouter" method="POST" id=myForm>
                    @csrf
                    <input type="text"placeholder="Nom" name="nom">
                    <input type="email"placeholder="Adresse Mail" name="mail">
                    <input type="text"placeholder="Objet" name="object">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>



    <footer>
<div id="footer">
<div class="social-icons">
<a href="https://wa.me/+237694289152" target="_blank"><img src="img/whatsapp.png"  alt="WhatsApp"></a>
<a href="https://m.facebook.com/p/CS-technology-builders-100084262153054/" target="_blank"><img src="img/facebook.png"  alt="Facebook"></a>
<a href="https://www.linkedin.com/feed/update/urn:li:activity:7157998690178154496?updateEntityUrn=urn%3Ali%3Afs_feedUpdate%3A%28V2%2Curn%3Ali%3Aactivity%3A7157998690178154496%29" target="_blank"><img src="img/linkedin.png"  alt="LinkedIn"></a>
<a href="https://www.instagram.com/invites/contact/?i=bcbnxbtwcx0j&utm_content=tpq8vn1" target="_blank"><img src="img/instagram.png"  alt="Instagram"></a>
</div>
<div class="contact-info">
<p>Vous pouvez également nous contacter par téléphone au +237694289152 ou au 0766212784</p>
<p>Ou par e-mail à l'adresse info@cstechnologybuilders.com</p>
</div>
<div class="credits">
<p>© 2024 CS Technology Builders. Tous droits réservés.</p>
</div>
</div>
</footer>

    <script>
        //menu responsive code JS


        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }


///>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>//>>//>>//>>/>/>/>/>/>/>/>
        const imageContainer = document.querySelector('.div-image');

imageContainer.addEventListener('mouseenter', () => {
    imageContainer.style.transform = 'scale(1.2)'; /* Agrandit l'élément */
});

imageContainer.addEventListener('mouseleave', () => {
    imageContainer.style.transform = 'scale(1)'; /* Rétablit la taille normale */
});

    </script>

    <script>
        
    </script>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

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


<!-- Script pour rester sur un scroll apres enregistrement -->

    
       
</html> 