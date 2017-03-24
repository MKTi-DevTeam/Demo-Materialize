
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="./materialize/js/materialize.min.js"></script>
      <div class="container">
        <!-- Scaled in -->
        <a id="scale-demo" href="#!" class="btn-floating btn-large scale-transition">
          <i class="material-icons">add</i>
        </a>

        <!-- Scaled out -->
        <a id="scale-demo" href="#!" class="btn-floating btn-large scale-transition scale-out">
          <i class="material-icons">add</i>
        </a>
        <blockquote>
          This is an example quotation that uses the blockquote tag.
        </blockquote>
        <p class="flow-text">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.

Para ver el Flujo de Texto en acción, cambie el tamaño de su navegador lentamente y verá cambiar el tamaño de este texto. ¡Utilice el botón de arriba para activar o desactivar el flujo de texto y ver la diferencia!</p>

        <a class="btn btn-floating pulse"><i class="material-icons">menu</i></a>
        <a class="btn btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
        <a class="btn btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>

            <div class="col s12 m2">
              <p class="z-depth-1">z-depth-1</p>
            </div>
            <div class="col s12 m2">
              <p class="z-depth-2">z-depth-2</p>
            </div>
            <div class="col s12 m2">
              <p class="z-depth-3">z-depth-3</p>
            </div>
            <div class="col s12 m2">
              <p class="z-depth-4">z-depth-4</p>
            </div>
            <div class="col s12 m2">
              <p class="z-depth-5">z-depth-5</p>
            </div>

            <table class="responsive-table highlight">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Item Name</th>
                          <th>Item Price</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                    </tbody>
                  </table>

        <img class="responsive-img" src="images/yuna.jpg">

         <div class="col s12 m8 offset-m2 l6 offset-l3">
           <div class="card-panel grey lighten-5 z-depth-1">
             <div class="row valign-wrapper">
               <div class="col s2">
                 <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
               </div>
               <div class="col s10">
                 <span class="black-text">
                   This is a square image. Add the "circle" class to it to make it appear circular.
                 </span>
               </div>
             </div>
           </div>
         </div>

         <div class="video-container">
             <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
         </div>

         <video class="responsive-video" controls>
           <source src="movie.mp4" type="video/mp4">
         </video>

      </div>
    </body>
  </html>
