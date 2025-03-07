<?php include "./koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width-device-width,initial-scale=1.0">
    <title>Portofolio Nabila</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header">
        <a href="#home" class="logo">Nabila
        <span>Maisie</span></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#timeline">Education</a>
            <a href="#skills">Skills</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>Hi, It's <span>Nabila Maisie</span></h1>
            <h4 class="text-animation">I'm a <span>
            </span></h4>
        

            <div class="social-icons">
                <a href="https://id.pinterest.com/nabilamai/"><i class='bx bxl-pinterest' ></i></a>
                <a href="#"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a>
                <a href="#"><i class='bx bxl-behance' ></i></a>
                <a href="#"><i class='bx bxl-dribbble' ></i></a>
            </div>

            <div class="btn-group">
                <a href="#about" class="btn">Hire</a>
                <a href="#contact" class="btn">Contact</a>
            </div>
        </div>
        <div class="home-img">
            <img src="./img/foto2.jpeg" alt="">
        </div>
    </section>

    <section class="about" id="about">

        <div class="about-img">
            <img src="./img/foto2.jpeg" alt="">
        </div>

        <div class="about-content">
            <h2>About <span> Me</span></h2>
            <p>Saya adalah keturunan jawa lahir pada 1 November 2008 yang memiliki jiwa disiplin, kepemimpinan, 
                mudah bergaul dengan sesama. Selain itu saya juga mempunyai jiwa yang humoris.
                Hobi saya memasak, mendengarkan lagu, melihat video lucu (meme) di internet. 
            </p>
        </div>
    </section>
    

    
    <section class="timeline" id="timeline">
        <h2 class="heading">My <span> Journey</span></h2>

        <div class="timeline-row">
            <div class="timeline-column">
                <h2 class="title">Education<span class="animate" style="--i:1;"></span></h2>

                <div class="timeline-box">
                    <div class="timeline-content">
                        <div class="content">
                            <h3>PAUD</h3>
                            <p>SITI AMINAH PEGALONGAN</p>
                        </div>
                    </div>

                    <div class="timeline-content">
                        <div class="content">
                            <h3>TK</h3>
                            <p>DIPONEGORO 188 PEGALONGAN</p>
                        </div>
                    </div>

                    <div class="timeline-content">
                        <div class="content">
                            <h3>SD</h3>
                            <p>SD NEGRI PEGALONGAN</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-column">
                <h2 class="title"><span class="animate" style="--i:4;"></span></h2>
            
                <div class="timeline-box">
                    <div class="timeline-content">
                        <div class="content">
                            <h3>SMP</h3>
                            <p>SMP TELKOM PURWOKERTO</p>
                        </div>
                    </div>
            
                    <div class="timeline-content">
                        <div class="content">
                            <h3>SMK</h3>
                            <p>SMK TELKOM PURWOKERTO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SKILLS-->
    <section class="skills" id="skills">
        <h2 class="heading">Skills</h2>
        <div class="skills__items">
            <img src="./img/logoAI.svg" width="100" height="100" alt="image" class="skills__item">
            <img src="./img/figma-icon.svg" width="100" height="100" alt="image" class="skills__item">
            <img src="./img/html-1.svg" width="100" height="100" alt="image" class="skills__item">
            <img src="./img/css-3.svg" width="100" height="100" alt="image" class="skills__item">
            <img src="./img/javascript-1.svg" width="100" height="100" alt="image" class="skills__item">
            <img src="./img/canva-wordmark-2.svg" width="100" height="100" alt="image" class="skills__item">
        </div>

    </section>

    <!--Portofolio-->
    <section class="portofolio" id="portofolio">
        <h2 class="heading">Latset <span> Project </span></h2>

        <div class="portofolio-container">
            <div class="portofolio-box">
                <img src="./img/bg-animasiie40i.png" width="500" height="auto" alt="">
                <div class="portofolio-layer">
                    <h4>Desain</h4>
                    <p>membuat desain background animasi</p>
                </div>
            </div>

            <div class="portofolio-box">
                <img src="./img/tampilan-game3.png" width="500" height="auto" alt="">
                <div class="portofolio-layer">
                    <h4>Desain</h4>
                    <p>membuat desain beranda game</p>
                </div>
            </div>

            <div class="portofolio-box">
                <img src="./img/Group 6.png" width="500" height="auto" alt="">
                <div class="portofolio-layer">
                    <h4>Desain</h4>
                    <p>membuat desain logo</p>
                </div>
            </div>

        </div>
    </section>

    <!--Contact-->
    
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span> Me </span></h2>

            <form method="POST">
                <input type="text" name="fullname" required placeholder="Nama Lengkap">
                <input type="email" name="email" required placeholder="Email">
                <textarea name="message" required placeholder="Pesan Anda"></textarea>
                <button type="submit">Kirim</button>
            </form>
    </section>

    <footer>
    <p>&copy; 2025 Nabila Maisie Ardelia | All right reserved</p>
</footer>





    <script src="./js/script.js"></script>
</body>
</html>