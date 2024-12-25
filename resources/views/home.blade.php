<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Using HTML CSS & JavaScript | Codehal</title>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <a href="#">Resume</a>
            <a href="#">Portfolio</a>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo rem nulla sunt, dolores quo sint nobis autem magnam at, cupiditate id sapiente necessitatibus, reprehenderit animi alias dolore obcaecati fugit expedita.</p>
            <div class="btn-sci">
                <a href="#" class="btn">Download CV</a>
                <div class="sci">
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-discord-alt'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
        </div>

        <div class="home-img">
            <div class="img-box">
                <div class="img-item">
                    <img src="images/home.png">
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
                <h3>Web Development</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>

            <div class="services-box">
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
                    <i class='bx bx-slideshow'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>Video Editing</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>

            <div class="services-box">
                <div class="icon">
                    <i class='bx bx-camera'></i>
                    <a href="#"><i class='bx bx-arrow-back'></i></a>
                </div>
                <h3>Photography</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab commodi est dolor enim. Illo.</p>
            </div>
        </div>
    </section>

    <!-- resume section -->
    <section class="resume">
        <div class="resume-container">
            <div class="resume-box">
                <h2>Why Hire Me?</h2>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum temporibus dolorem ducimus beatae iure amet.</p>
                <button class="resume-btn active">Experience</button>
                <button class="resume-btn">Education</button>
                <button class="resume-btn">Skills</button>
                <button class="resume-btn">About Me</button>
            </div>

            <div class="resume-box">
                <div class="resume-detail experience active">
                    <h2 class="heading">My <span>Experience</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, exercitationem nihil enim corporis esse facilis tempore assumenda quidem quaerat expedita.</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2023 - Present</p>
                            <h3>Frontend Developer</h3>
                            <p class="company">Abc Corp.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2022 - 2023</p>
                            <h3>Full Stack Developer</h3>
                            <p class="company">Google</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2021 - 2022</p>
                            <h3>Backend Developer</h3>
                            <p class="company">YouTube</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2020 - 2021</p>
                            <h3>Frontend Developer</h3>
                            <p class="company">Xyz Inc.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2019 - 2020</p>
                            <h3>UI/UX Designer</h3>
                            <p class="company">Abc Inc.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2018 - 2019</p>
                            <h3>Junior Developer</h3>
                            <p class="company">Xyz Corp.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="resume-detail education">
                    <h2 class="heading">My <span>Education</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, exercitationem nihil enim corporis esse facilis tempore assumenda quidem quaerat expedita.</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p class="year">2024</p>
                            <h3>Programming Course</h3>
                            <p class="company">Online Course</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, harum.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2022 - 2023</p>
                            <h3>Web Development Bootcamp</h3>
                            <p class="company">Online Course Platform</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, harum.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2020</p>
                            <h3>Certified Web Development</h3>
                            <p class="company">Online Course</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, harum.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2017 - 2018</p>
                            <h3>Doctor of Engineering</h3>
                            <p class="company">Codehal University</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, harum.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2015 - 2017</p>
                            <h3>Master of Computer Science</h3>
                            <p class="company">Codehal University</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, harum.</p>
                        </div>
                        <div class="resume-item">
                            <p class="year">2012 - 2015</p>
                            <h3>Bachelor of Data Science</h3>
                            <p class="company">Codehal University</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, harum.</p>
                        </div>
                    </div>
                </div>

                <div class="resume-detail skills">
                    <h2 class="heading">My <span>Skills</span></h2>
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
                            <i class='bx bxl-react'></i>
                            <span>React.js</span>
                        </div>
                        <div class="resume-item">
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
                        </div>
                    </div>
                </div>

                <div class="resume-detail about">
                    <h2 class="heading">About <span>Me</span></h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, exercitationem nihil enim corporis esse facilis tempore assumenda quidem quaerat expedita.</p>
                    <div class="resume-list">
                        <div class="resume-item">
                            <p>Name <span>Lucius Meshach</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Gender <span>Male</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Age <span>32 Years Old</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Status <span>Married</span></p>
                        </div>
                        <div class="resume-item">
                            <p>City <span>San Francisco</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Nationality <span>American</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Experience <span>10+ Years</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Full Time <span>Available</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Freelance <span>Available</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Phone <span>(+12) 345 678 910</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Email <span>lucius@gmail.com</span></p>
                        </div>
                        <div class="resume-item">
                            <p>Languages <span>English, French</span></p>
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