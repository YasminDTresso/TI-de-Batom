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

        /*=======SECTIONS=======*/

        .container-fluid section .row .col-12 {
        padding: 5rem 10rem;
        }

        .o-que-acreditamos{
          background-color: var(--preto-claro);
        }

    </style>

</head>
<body>
<?php
    
include "nav.html";

?>

<div class="main">

  <div class="container-fluid g-0">
    <div class="row">
      <section class="quem-somos">
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
        <div class="col-12 d-flex">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sint eligendi nemo officiis labore nostrum reiciendis velit voluptates provident perferendis, laboriosam placeat, beatae, commodi doloremque aspernatur distinctio? Sunt, voluptas et?</p>
           <img src="assets/logo.png" alt="">
        </div>
      </div>
    </section>

    <section class="o-que-acreditamos">
       <div class="row">
         <div class="col-12 d-flex">

          <img src="assets/logo.png" alt="">

           <div class="text-box">
            <h1 class="text-uppercase">O que acreditamos</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ratione deleniti rerum unde velit enim voluptatem, voluptate, voluptatibus voluptates facere, laboriosam blanditiis dolorem provident ipsa quis odio. Culpa, quia amet.</p>
           </div>

         </div>
       </div>
    </section>

    <section class="missao-visao-valores">
      <div class="row">
        <div class="col-12">

        <h1>Missão, Visão e Valores</h1>

        <div class="content-cards d-flex">
        <div class="my-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit inventore quam possimus quasi et nemo, consequatur deserunt. Reprehenderit labore dolorem iusto voluptate doloremque non, quam architecto esse necessitatibus, possimus corrupti.</p>
          <img src="assets/logo.png" alt="">
        </div>

        <div class="my-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit inventore quam possimus quasi et nemo, consequatur deserunt. Reprehenderit labore dolorem iusto voluptate doloremque non, quam architecto esse necessitatibus, possimus corrupti.</p>
          <img src="assets/logo.png" alt="">
        </div>

        <div class="my-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit inventore quam possimus quasi et nemo, consequatur deserunt. Reprehenderit labore dolorem iusto voluptate doloremque non, quam architecto esse necessitatibus, possimus corrupti.</p>
          <img src="assets/logo.png" alt="">
        </div>
        
        </div>

        </div>
      </div>

    </section>

  </div>

</div>


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