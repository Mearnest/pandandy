<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pandandy</title>

      <link rel="shortcut icon" href="/images/favicon.ico">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
      <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Sniglet'>
      <link rel="stylesheet" href="/css/jquery-ui.theme.min.css">
      <link rel="stylesheet" href="/css/jquery-ui.structure.min.css">
      <link rel="stylesheet" href="/css/style.css">
   </head>
   <body>
      <h1 class="title"><a href="/">Pandandy</a></h1>
      <h3 class="title">What ingredients do you have left?</h3>
      <h3 class="title">What sort of recipes could you make?</h3>

      <section class="container ingredients">
         <div class="ingredient-select">
            <input id="search-ingredient" type="text" placeholder="Search">
            <br>
            <ul id="search-result"></ul>
            <br>
            <div id="ingredient-count"><span>0</span></div>
            <button type="button" id="find-btn" class="btn btn-default" aria-label="Left Align" disabled>
               <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
               &nbsp;Find
            </button>
         </div>

         <div class="ingredient-counter">
            <img class="ingredient beef-stock" data-ingredient="beef-stock" src="/images/beef-stock.png">
            <img class="ingredient brandy" data-ingredient="brandy" src="/images/brandy.png">
            <img class="ingredient butter" data-ingredient="butter" src="/images/butter.png">
            <img class="ingredient french-bread" data-ingredient="french-bread" src="/images/french-bread.png">
            <img class="ingredient olive-oil" data-ingredient="olive-oil" src="/images/olive-oil.png">
            <img class="ingredient onions" data-ingredient="onions" src="/images/onions.png">
            <img class="ingredient provolone" data-ingredient="provolone" src="/images/provolone.png">
            <img class="ingredient parmesan" data-ingredient="parmesan" src="/images/parmesan.png">
            <img class="ingredient pumpkin" data-ingredient="pumpkin" src="/images/pumpkin.png">
            <img class="ingredient swiss-cheese" data-ingredient= "swiss-cheese" src="/images/swiss-cheese.png">
            <img class="ingredient thyme" data-ingredient="thyme" src="/images/thyme.png">
            <img class="counter-top" data-ingredient="counter-top" src="/images/counter.png">
         </div>
      </section>

      <section class="container recipe">
         
         <div class="row">
            <div class="col-md-4">
               <h2>Pumpkin Soup 
                  <a data-pin-do="buttonBookmark" href="https://www.pinterest.com/pin/create/button/"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
                  <!-- Please call pinit.js only once per page -->
                  <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
               </h2>
               <img class="recipe" src="/images/pumpkin-soup.jpg">
            </div>
            <div class="col-md-1">
               
            </div>
            <div class="col-md-7">
               <h3>Ingredients</h3>
               <p>SERVINGS 4 UNITS US</p>
               <ul class="recipe-ingredients">
                  <li>3 Tbsp Butter</li>
                  <li>3 Tbsp Olive oil</li>
                  <li>4 cups Sliced onions</li>
                  <li>4 cups Beef stock</li>
                  <li>2 Tbsp Brandy</li>
                  <li>1 ea Spring fresh lime</li>
               </ul>

               <ul class="recipe-ingredients">
                  <li>2 cups Fresh pumpkin, cut into chunks</li>
                  <li>4 slices French bread, toasted</li>
                  <li>2 slices Swiss cheese</li>
                  <li>4 slices Swiss Provolone</li>
                  <li>Sprinkle Parmesean</li>
               </ul>
            </div>
         </div>
         <div class="row prep">
            <div class="col-md-12">
               <h3>Preperation</h3>
               In a medium saucepan, heat butter and oil. When butter is melted, add onions and cook over moderate heat until translucent, about 10 minutes. Turn the heat up slightly and add sugar and salt. Continue to cook until onions are tender and brown in color, another 10-15 minutes. Sprinkle flour, stir and let cook slowly 3 to 4 minutes. Remove from heat and slowly pour in broth while whisking as you pour to avoid clumps. When well blended, return to heat. Add fresh thyme and brandy. Cover loosely and allow to simmer 35 to 40 minutes, adding pumpkin and adjusting seasoning halfway through cooking time. Before serving, pour soup in individual crocks. Top with toasted French bread and cheese. Bake until brown and bubbly. Serves 4.
            </div>
         </div>
          
         <p><button class="close">Close</button></p>
      </section>

      <div id="cover"></div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="http://cdn.jquerytools.org/1.2.6/tiny/jquery.tools.min.js"></script>
      <script src="/js/jquery-ui.min.js"></script>
      <script src="/js/app.js"></script>
   </body>
</html>