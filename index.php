<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!--CDN BOOTSTRAP - CSS E JAVASCRIPT-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <!--CDN UNICONS-->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" />

    <style>
      /*Colocar estilos exclusivos dessa page aqui! =)*/

      /*=======NavBar INDEX=======*/
      .my-nav-index {
        background-image: linear-gradient(
          to bottom,
          rgba(21, 21, 21, 1),
          rgba(21, 21, 21, 0)
        );
      }

      .my-nav-index .nav-link:hover {
        color: var(--rosa-escuro);
      }

      .my-nav-index .nav-item .nav-item-active {
        color: var(--rosa-escuro);
      }

      .my-nav-index .nav-link,
      .my-nav-index .navbar-brand,
      .btn-faca-parte {
        color: var(--branco);
        font-weight: bold;
      }

      .btn-faca-parte:hover {
        color: var(--preto-claro);
      }

      .my-nav-index .nav-link.show {
        color: var(--rosa-escuro);
      }

      .my-nav-index .navbar-nav .nav-link .unshow {
        color: var(--branco);
      }

      .my-nav-index .dropdown-menu {
        background-color: var(--preto-claro);
        border-color: var(--rosa-escuro);
      }

      .my-nav-index .dropdown-item {
        color: var(--branco);
      }

      .my-nav-index .dropdown-item:hover {
        background-color: var(--preto-claro);
        color: var(--rosa-escuro);
      }

      .my-nav-index .navbar-toggler,
      .my-nav-index .navbar-toggler:focus {
        border: none;
      }

      .my-nav-index .navbar-toggler,
      .my-nav-index .navbar-toggler:focus,
      .my-nav-index .navbar-toggler:active {
        outline: none;
        border: none;
        box-shadow: none;
      }

      .my-nav-index .navbar-nav .nav-item.d-flex {
        justify-content: center;
      }

      .my-nav .navbar-nav{
        align-items: center;
      }
    

      .bg-img {
        background-image: url(assets/Rectangle\ 1.png);
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .bg-img .row .col-12 {
        padding: 5rem 10rem;
      }

      .introducao-row {
        height: 92.3vh;
      }

      .my-nav-index .navbar-nav .nav-item.d-flex {
        justify-content: unset;
      }

      .bg-img .introducao-row{
      margin: 0;
      }

      /*=======SECTIONS=======*/

      section {
        width: 100%;
        background-size: cover;
      }

      section h1 {
        color: var(--rosa-escuro);
      }

      .container-fluid section .row .col-12 {
        padding: 5rem 10rem;
      }

      .redes-sociais {
        background-color: var(--branco);
      }

      .noticias {
        background-color: var(--branco);
      }

      .quem-somos .col-12 {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 5rem;
      }

      .quem-somos .about-us-img,
      .social-media-link > img,
      .partner-link > img {
        width: 25vw;
        height: auto;
        border-radius: 2rem;
      }

      .quem-somos .text-box button {
        color: var(--branco);
        background-color: var(--rosa-escuro);
      }

      .quem-somos .text-box button:hover {
        color: var(--preto-claro);
      }

      .social-media-links,
      .partners-links {
        display: flex;
        justify-content: center;
        gap: 5rem;
      }

      .quem-somos .row .col-12 a > h1, .redes-sociais .row .col-12 a > h1{
        margin-bottom: 2rem;
      }

      @media (max-width: 768px) {
        .my-nav-index {
          width: 100%;
          z-index: 9999;
        }

        .my-nav-index .nav-link,
        .my-nav-index .navbar-brand,
        .my-nav-index button {
          margin-bottom: 0.2rem;
        }

        .my-nav-index .navbar-nav{
         align-items: normal;
        }
    

        .introducao-row {
          height: 100vh;
        }

        .introducao-row h1 {
          margin-top: 4rem;
        }

        .bg-img .row .col-12 {
          padding: 5rem 1rem;
        }

        /*=======SECTIONS=======*/

        .content {
          padding: 0;
        }

        .container-fluid section .row .col-12 {
          padding: 5rem 1rem;
        }

        .quem-somos .col-12 {
          display: initial;
        }

        .quem-somos .row .col-12 a > h1, .redes-sociais .row .col-12 a > h1{
        margin-bottom: 0;
        }

        .social-media-links,
        .partners-links {
          display: grid;
          margin-top: 2rem;
        }

        .social-media-link > img,
        .partner-link > img {
          width: 60vw;
        }

        .quem-somos .text-box button {
          margin-bottom: 1rem;
        }

        .quem-somos .about-us-img {
          width: 60vw;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar fixed-top my-nav-index navbar-expand-md">
      <div class="container" id="container-nav">
        <a href="index.php" class="navbar-brand"
          ><img src="assets/logo.png" alt="logo-ti-batom" style="height: 45px"
        /></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          id="btn-nav-link"
        >
          <span
            class="uil uil-bars"
            style="font-size: 40px; color: var(--rosa-escuro)"
          ></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-around flex-grow-0"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav fs-5">
            <li class="nav-item">
              <a class="nav-link"  href="index.php" id="nav-home">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                id="nav-sobre-nos"
              >
                Sobre Nós
              </a>

              <ul class="dropdown-menu fs-6">
                <li><a class="dropdown-item" href="quem-somos.php" id="nav-quem-somos">Quem Somos</a></li>
                <li><a class="dropdown-item" href="redes-sociais.php" id="nav-redes-sociais">Redes Sociais</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="noticias.php" class="nav-link" id="nav-noticias">Notícias</a>
            </li>

            <li class="nav-item">
              <a href="parceiros.php" class="nav-link" id="nav-parceiros">Parceiros</a>
            </li>

            <li class="nav-item d-flex">
              <a href="faca-parte-comunidade.php" class="nav-link" id="nav-faca-parte">
                <button
                  class="btn btn-sm fs-5 btn-faca-parte"
                  style="background-color: var(--rosa-escuro)"
                  type="button"
                >
                  FAÇA PARTE
                </button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
    
    <div class="container-fluid bg-img">
      <div class="row align-items-center introducao-row">
        <div class="col-12 d-flex flex-column justify-content-center">
          <div class="card" style="background-color: transparent; border: none">
            <h1 class="display-1 fw-bold" style="color: var(--rosa-escuro)">
              T.I DE BATOM
            </h1>
            <h3 class="display-6 fw-bold" style="color: var(--branco)">
              Inspirando
              <span style="color: var(--rosa-claro)">mulheres</span> na
              <span style="color: var(--rosa-claro)">tecnologia</span>.
            </h3>
            <p class="fs-4 lh-sm" style="color: var(--branco)">
              Pensando nos desafios no mundo da T.I paras as mulheres,
              o T.I de batom foi criado por Milena Ceron com o objetivo 
              de incentivar a integração de mulheres que tenham o sonho de 
              ingressar na área da Tecnologia aLorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
              possimus tenetur maxime illo accusamus vel voluptatum autem
              reprehenderit explicabo libero beatae doloribus nemo, repudiandae
              doloremque iure, eum at praesentium eaque.
            </p>
            <a href="faca-parte-comunidade.php">
              <button
                class="btn btn-lg m-md-1 fs-3 btn-faca-parte"
                style="background-color: var(--rosa-escuro)"
                type="button"
              >
                FAÇA PARTE DA COMUNIDADE
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content container-fluid">
      <section class="quem-somos">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <div class="text-box">
              <h1 class="display-3 fw-bold text-uppercase">Quem Somos</h1>
              <p class="fs-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                amet debitis vitae magni, temporibus illo, optio officiis,
                facilis assumenda eius placeat. Excepturi corporis sit eligendi,
                vero labore exercitationem ad eum?
              </p>
              <a class="text-decoration-none" href="quem-somos.php">
                <button type="button" class="btn btn-lg fs-2 text-uppercase">
                  Saiba Mais
                </button>
              </a>
            </div>

            <img
              src="assets/logo_01.jpg"
              alt="logo-ti-batom"
              class="about-us-img"
            />
          </div>
        </div>
      </section>

      <section class="redes-sociais">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <a class="text-decoration-none" href="redes-sociais.php">
              <h1 class="display-3 fw-bold text-uppercase">
              Nossas Redes Sociais
             </h1>
            </a>
            <div class="social-media-links">
              <a href="" class="social-media-link"
                ><img src="assets/logo_01.jpg" alt=""
              /></a>
              <a href="" class="social-media-link"
                ><img src="assets/logo_01.jpg" alt=""
              /></a>
              <a href="" class="social-media-link"
                ><img src="assets/logo_01.jpg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </section>
      <section class="parceiros">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <a class="text-decoration-none" href="parceiros.php">
            <h1 class="display-3 fw-bold text-uppercase">Nossos Parceiros</h1>
           </a>
            <div class="partners-links">
              <a href="" class="partner-link"
                ><img src="assets/logo_01.jpg" alt=""
              /></a>
              <a href="" class="partner-link"
                ><img src="assets/logo_01.jpg" alt=""
              /></a>
              <a href="" class="partner-link"
                ><img src="assets/logo_01.jpg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </section>

      <section class="noticias">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h1 class="display-3 fw-bold text-uppercase">Notícias</h1>

            <div class="news-area d-flex justify-content-center">
              <div class="card" style="width: 18rem">
                <img src="#" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card" style="width: 18rem">
                <img src="#" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card" style="width: 18rem">
                <img src="#" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    </main>

    <?php
    
     include "footer.html";

    ?>

    <script src="script.js"></script>
    <script>
      const navActiveItem = document.querySelector('#nav-home');

      navActiveItem.classList.add("nav-item-active");
    </script>

  </body>
</html>
