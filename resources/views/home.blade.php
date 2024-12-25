<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Using HTML CSS & JavaScript | Codehal</title>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- header -->
    <header class="active">
        <a href="#" class="logo">keita.</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav>
            <a href="#" class="active">Accueil</a>
            <a href="#">Mes Services</a>
            <a href="#">Mon cv</a>
            <a href="#">Mes projets</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <!-- bars background -->
    <div class="bars-box active">
        <div class="bar" style="--i:6;"></div>
        <div class="bar" style="--i:5;"></div>
        <div class="bar" style="--i:4;"></div>
        <div class="bar" style="--i:3;"></div>
        <div class="bar" style="--i:2;"></div>
        <div class="bar" style="--i:1;"></div>
    </div>

    <!-- home section -->
    <section class="home active">
        <div class="home-detail">
            <h1>Abdou Karim</h1>
            <h2>Je suis un 
                <span style="--i:4;" data-text="développeur front-end">développeur front-end</span>
                <span style="--i:3;" data-text="éditeur vidéo"> éditeur vidéo</span>
                <span style="--i:2;" data-text="développeur front-end">développeur front-end</span>
                <span style="--i:1;" data-text="éditeur vidéo">éditeur vidéo</span>
            </h2>
            <p>Passionné par la création et l’innovation, avec 3 ans d’expérience, je suis spécialisé dans la conception d’interfaces modernes, dynamiques et interactives. Mon objectif est de créer des expériences utilisateur fluides, intuitives et esthétiques, pour répondre aux besoins actuels du digital.
            <br>
            <br>
            En parallèle, j’ai également plus de 3 ans d’expérience en montage vidéo, ce qui me permet d’allier créativité visuelle et compétences techniques pour produire des contenus impactants. 
            </p>
            <div class="btn-sci">
                <a href="#" class="btn">Download CV</a>
                <div class="sci">
                    <a href="https://github.com/keitaabdoukarim96" target="_blank"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-discord-alt'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
        </div>

        <div class="home-img">
            <div class="img-box">
                <div class="img-item">
                    <img src="images/photo_profil.png">
                </div>
            </div>
        </div>
    </section>

    <!-- services section -->
    <section class="services">
        <h2 class="heading">My <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-code-alt'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>Développement Web</h3>
                <p>Je conçois des sites web modernes, dynamiques et responsives, en mettant à profit mes compétences pour offrir une navigation fluide et une expérience utilisateur optimale. Spécialisé en développement front-end, je crée des interfaces interactives et adaptées à tous les supports.</p>
            </div>

            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-slideshow'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>Editeur Vidéo</h3>
                <p>Mon objectif principal est de fournir aux clients des vidéos qui les laissent sans voix. Mon approche méticuleuse et ma passion pour le montage vidéo me permettent de travailler avec précision et d’apporter une touche professionnelle à chaque projet. Que ce soit pour des vidéos promotionnelles, des tutoriels ou des documentaires, je m’engage à livrer un résultat final qui dépasse les attentes.</p>
            </div>

           <!-- <div class="services-box">
                <div class="icon">
                    <i class='bx bxs-paint'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>UI/UX Design</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>

            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-palette'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>Graphic Design</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>

            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-trending-up'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>SEO</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>

            

            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-camera'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>Photography</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>-->
        </div>
    </section>

    <!-- resume section -->
    <section class="resume">
        <div class="resume-container">
            <div class="resume-box">
                <!--<h2>Pourquoi m'embaucher ?</h2>-->
                <!--<p class="desc">Avec 2 ans d’expérience en développement front-end et 3 ans en montage vidéo, je combine une expertise technique pointue et une créativité artistique unique. Mon double profil me permet de concevoir des solutions modernes et dynamiques, tout en produisant des contenus visuels engageants. Polyvalent, rigoureux et curieux, je m’adapte rapidement à de nouveaux projets et apporte des résultats concrets. En m’embauchant, vous bénéficiez d’un professionnel capable de répondre à des besoins variés avec une approche innovante et orientée vers la qualité.</p>-->
                <button class="resume-btn active">Mes Expériences</button>
                <button class="resume-btn">Mes Formations</button>
                <button class="resume-btn">Mes Compétences</button>
                <button class="resume-btn">À Propos de Moi</button>
            </div>

            <div class="resume-box">
                <div class="resume-detail experience active">
                    <h2 class="heading">Mes <span>Expériences</span></h2>
                    <p class="desc">Avec 2 ans d’expérience en développement front-end et 3 ans en montage vidéo, je combine une expertise technique pointue et une créativité artistique unique. Mon double profil me permet de concevoir des solutions modernes et dynamiques, tout en produisant des contenus visuels engageants. Polyvalent, rigoureux et curieux, je m’adapte rapidement à de nouveaux projets et apporte des résultats concrets. En m’embauchant, vous bénéficiez d’un professionnel capable de répondre à des besoins variés avec une approche innovante et orientée vers la qualité.</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">Décembre 2020 - Décembre 2023</p>
                            <h3>Développeur Web</h3>
                            <p class="company">Amon Marketing Pratique.</p>
                            <p><ul>
                            <li>Chargé de concevoir les sites web du Cabinet AMP</li>
                                <li>Montage vidéo du Cabinet</li>
                                <li>Référencement SEO</li>
                                <li>Administrateur du site web du cabinet</li>
                                <li>Administrateur de la chaine YouTube</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">Septembre 2020 - Décembre 2020</p>
                            <h3>Stagiaire Développeur Web</h3>
                            <p class="company">Amon Marketing Pratique.</p>
                            <p><ul>
                            <li>Chargé de concevoir les sites web du Cabinet AMP</li>
                                <li>Montage vidéo du Cabinet</li>
                                <li>Référencement SEO</li>
                                <li>Administrateur du site web du cabinet</li>
                                <li>Administrateur de la chaine YouTube</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">Janvier 2020 - Juillet 2020</p>
                            <h3>Stagiaire Développeur Web</h3>
                            <p class="company">Ivoire Geek School.</p>
                            <p><ul><li>Durant ce stage, j'ai travaillé sur la conception d'un site web d'offres d'emploi avec Laravel. J'étais chargé de concevoir la partie front-end des pages "Nos Métiers", "Connexion" et "Inscription</li></ul>
                            </p>
                        </div>
                    </div>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">Mai 2019 - Novembre 2019</p>
                            <h3>Stagiaire Développeur Informatique</h3>
                            <p class="company">Université Virtuelle de Côte d'Ivoire.</p>
                            <p><ul>
                                <li>Encadrer les nouveaux étudiants sur le processus de suivi des cours en lign</li>
                                <li>Expliquer aux étudiants la méthode d’enseignement au sein de l’UVCI.</li>
                                <li>Expliquer l’utilisation de la plateforme de cours de l’UVCI.</li>
                                <li>Donner aux étudiants l'envie et la motivation de suivre les cours et d'effectuer leurs devoirs quotidiennement</li>
                                <li>Faire le bilan à la fin de chaque semestre</li>
                            </ul></p>
                        </div>
                    </div>

                </div>

                <div class="resume-detail education">
                    <h2 class="heading">Mes <span>Formations</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, exercitationem nihil enim corporis esse facilis tempore assumenda quidem quaerat expedita.</p>
                    
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">Septembre 2024 - à Aujourd'hui</p>
                            <h3>Licence 3 Informatique, produits et services multimédia</h3>
                            <p class="company">Université de Franche-Comté, Montbéliard</p>
                        </div>
                    </div>

                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2019 - 2020</p>
                            <h3>Master 1 Big Data</h3>
                            <p class="company">Université virtuelle de côte d’ivoire, Côte d'Ivoire</p>
                            <p><ul>
                            <li>Administration de données et Big Data</li>
                                <li>Technologie Blockchain</li>
                                <li>Calcul Scientifique</li>
                                <li>Probabilité et Statistique</li>
                                <li>Gestion des Projets Agile</li>
                                <li>Méthodologie de Résolution de Problèmes</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2016 - 2019</p>
                            <h3>Licence en Informatique</h3>
                            <p class="company">Université virtuelle de côte d’ivoire, Côte d'Ivoire</p>
                            <p><ul>
                            <li>Algorithme et Conception de Systèmes d’Information</li>
                                <li>Programmation Mobile</li>
                                <li>Développement Web II</li>
                                <li>Bases de données sous MS SQL Server</li>
                                <li>Gestion des Projets II </li>
                                <li>Système de Gestion des Bases de donnée Relationnelles </li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2015 - 2016</p>
                            <h3>Baccalauréat série scientifique D</h3>
                            <p class="company">Collège León Gueffie Soubré</p>
                        </div>
                    </div>
                </div>

                <div class="resume-detail skills">
                    <h2 class="heading">Mes <span>Compétences</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, exercitationem nihil enim corporis esse facilis tempore assumenda quidem quaerat expedita.</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <i class='bx bxl-html5'></i>
                            <span>HTML5</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-css3'></i>
                            <span>CSS3</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-javascript'></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="resume-item">
                            <i class="fa-brands fa-laravel"></i>
                            <span>Laravel</span>
                        </div>
                        <div class="resume-item">
                        <i class="fa-solid fa-database"></i>
                            <span>SQL </span>
                        </div>
                        <div class="resume-item">
                        <i class="bx bxl-github"></i>
                            <span>Github </span>
                        </div>
                        <div class="resume-item">
                        <i class="bx bxl-php"></i>
                            <span>Php </span>
                        </div>
                       
                        <!--<div class="resume-item">
                            <i class='bx bxl-vuejs'></i>
                            <span>Vue.js</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-tailwind-css'></i>
                            <span>Tailwind CSS</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-nodejs'></i>
                            <span>Node.js</span>
                        </div>
                        <div class="resume-item">
                            <i class='bx bxl-mongodb'></i>
                            <span>MongoDB</span>
                        </div>-->
                    </div>
                </div>

                <div class="resume-detail about">
                    <h2 class="heading">À Propos de  <span>Moi</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, exercitationem nihil enim corporis esse facilis tempore assumenda quidem quaerat expedita.</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p>Nom <span>Abdou Karim keita</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Genre <span>Homme</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Age <span>28 ans</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Status <span>Célibataire</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Pays <span>France</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Nationalité <span>Ivoirienne</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Expériences <span>2+ Years</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Phone <span>(+33) 0782273438</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Email <span>lucius@gmail.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section -->
    <section class="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <div class="portfolio-detail active">
                    <p class="numb">01</p>
                    <h3>Frontend Project</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                    <div class="tech">
                        <p>HTML5, CSS3, JavaScript</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="numb">02</p>
                    <h3>Full Stack Project</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                    <div class="tech">
                        <p>MongoDB, Express.js, React.js, Node.js</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="numb">03</p>
                    <h3>Frontend Project</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                    <div class="tech">
                        <p>React.js, Tailwind CSS</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="numb">04</p>
                    <h3>Full Stack Project</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                    <div class="tech">
                        <p>MongoDB, Express.js, AngularJS, Node.js</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="numb">05</p>
                    <h3>Frontend Project</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                    <div class="tech">
                        <p>Vue.js, Tailwind CSS</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                    </div>
                </div>

                <div class="portfolio-detail">
                    <p class="numb">06</p>
                    <h3>Full Stack Project</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                    <div class="tech">
                        <p>MongoDB, Express.js, Vue.js, Node.js</p>
                    </div>
                    <div class="live-github">
                        <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                        <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-box">
                <div class="portfolio-carousel">
                    <div class="img-slide">
                        <div class="img-item">
                            <img src="images/portfolio1.jpg">
                        </div>
                        <div class="img-item">
                            <img src="images/portfolio2.jpg">
                        </div>
                        <div class="img-item">
                            <img src="images/portfolio3.jpg">
                        </div>
                        <div class="img-item">
                            <img src="images/portfolio4.jpg">
                        </div>
                        <div class="img-item">
                            <img src="images/portfolio5.jpg">
                        </div>
                        <div class="img-item">
                            <img src="images/portfolio6.jpg">
                        </div>
                    </div>
                </div>

                <div class="navigation">
                    <button class="arrow-left disabled"><i class='bx bx-chevron-left'></i></button>
                    <button class="arrow-right"><i class='bx bx-chevron-right'></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact">
        <div class="contact-container">
            <div class="contact-box">
                <h2>Let's Work Together</h2>
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, voluptatem illo magni similique velit at mollitia corporis quaerat eaque asperiores.</p>
                <div class="contact-detail">
                    <i class='bx bxs-phone'></i>
                    <div class="detail">
                        <p>Phone</p>
                        <p>(+12) 345 678 910</p>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class='bx bxs-envelope'></i>
                    <div class="detail">
                        <p>Email</p>
                        <p>youremail@gmail.com</p>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class='bx bxs-map'></i>
                    <div class="detail">
                        <p>Address</p>
                        <p>123 Anywhere Street, Any City</p>
                    </div>
                </div>
            </div>

            <div class="contact-box">
                <form action="">
                    <h2 class="heading">Contact <span>Me!</span></h2>
                    <div class="field-box">
                        <input type="text" placeholder="Full Name" required>
                        <input type="email" placeholder="Email Address" required>
                        <input type="text" placeholder="Phone Number" required>
                        <input type="text" placeholder="Email Subject" required>
                        <textarea name="" id="" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    

    <!-- custom js -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>