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

        main{
          margin-top: 4rem;
        }

        /*=======SECTIONS=======*/

        .container-fluid section .row .col-12 {
        padding: 5rem 10rem;
        }

        .o-que-acreditamos{
          background-color: var(--preto-claro);
          color: var(--branco);
        }

        .o-que-acreditamos .row .col-12{
          display: flex;
          text-align: center;
          justify-content: center;
        }

        .quem-somos .row .col-12{
        display: flex;
        text-align: center;
        justify-content: center;
        gap: 1rem;
        }

        .quem-somos .row .col-12 .single-text, .o-que-acreditamos .row .col-12 .text-box p{
        width: 40vw;
        }

        .o-que-acreditamos .row .col-12 .text-box > h1, .missao-visao-valores .row .col-12 > h1{
        margin-bottom: 2rem;
        }

        .o-que-acreditamos .row .col-12 .text-box > h1{
          color: var(--rosa-escuro);
        }

        .missao-visao-valores .content-cards {
        gap: 2rem;
        }
        
      @media (max-width: 768px) {

      /*=======SECTIONS=======*/
      .quem-somos .row .col-12, .o-que-acreditamos .row .col-12{
      display: initial;
      }

      .container-fluid section .row .col-12 {
      padding: 5rem 2rem;
      }

      .quem-somos .row .col-12 .single-text,  .o-que-acreditamos .row .col-12 .text-box p{
      width: 100%;
      }

      .content-cards{
        flex-direction: column;
      }

      .content-cards .my-card{
        margin-bottom: 2rem;
      }

      }

    </style>

</head>
<body>
<?php
    
include "nav.html";

?>

<main>

  <div class="container-fluid g-0">
    <div class="row">
      <section class="quem-somos-banner">
      <div class="col-12">
        <div class="banner">
        <div class="title-banner">
        <h1 class="text-uppercase">Quem Somos Nós?</h1>
        </div>
        </div>
      </div>
      </section>
    </div>
  </div>

  <div class="container-fluid g-0">

    <section class="quem-somos">
      <div class="row">
        <div class="col-12">
           <p class="single-text fs-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sint eligendi nemo officiis labore nostrum reiciendis velit voluptates provident perferendis, laboriosam placeat, beatae, commodi doloremque aspernatur distinctio? Sunt, voluptas et?</p>
           <img src="assets/logo.png" alt="">
        </div>
      </div>
    </section>

    <section class="o-que-acreditamos">
       <div class="row">
         <div class="col-12">

          <img src="assets/logo.png" alt="">

           <div class="text-box text-center">
            <h1 class="text-uppercase display-3">O que acreditamos</h1>
            <p class="fs-3">ALorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ratione deleniti rerum unde velit enim voluptatem, voluptate, voluptatibus voluptates facere, laboriosam blanditiis dolorem provident ipsa quis odio. Culpa, quia amet.</p>
           </div>

         </div>
       </div>
    </section>

    <section class="missao-visao-valores">
      <div class="row text-center">
        <div class="col-12">
          
        <h1 class="text-uppercase display-3"><span style="color: var(--rosa-escuro)">Missão</span>, <span style="color: var(--rosa-claro)">Visão</span> e <span style="color: var(--rosa-escuro)">Valores</span></h1>

        <div class="content-cards d-flex">
        <div class="my-card">
          <p class="fs-5">Com o objetivo de inserir mulheres no mercado de trabalho da T.I, queremos criar um espaço inclusivo para que possamos contrubuir com ideias, valoeres e visões diferentes, assim, incentivando mais mulheres a enfrentar seus medos e desafios dados no mundo profissional.</p>
          <img src="assets/logo.png" alt="">
        </div>

        <div class="my-card">
          <p class="fs-5">Queremos promover discussões e ideias diversas com integração de mulheres no time, assim criar uma ambiente de valores femininos, e ferramentas desenvolvidas com base no ambinte formado, promovendo algo distinto do que é visto no mercado.</p>
          <img src="assets/logo.png" alt="">
        </div>

        <div class="my-card">
          <p class="fs-5">A T.I de Batom acredita que somente com clareza, confiança, segurança, respeito, inovação e foco em nossos ideias, podemos desenvolver um ambiente distinto aos demais, e que possa integrar novos coloborados à nosso plantel. </p>
          <img src="assets/logo.png" alt="">
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
      const navActiveItem = document.querySelector('#nav-quem-somos');

      navActiveItem.classList.add("nav-item-active");
      linkSobreNos.classList.add("nav-item-active");
</script>
</body>
</html>
