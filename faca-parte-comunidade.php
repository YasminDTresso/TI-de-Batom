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
    </style>

</head>
<body>
    <?php
    
    include "nav.html";

    ?>

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