$(function() {
   var ingredients = ["butter", "thyme", "pumpkin", "french bread", "swiss cheese", "provolone", 
      "olive oil", "onions", "beef stock", "parmesan", "brandy", "pinto beans", "kidney beans", 
      "chickpeas", "lentils", "brown rice", "long-grain rice", "fettucini", "penni", "bowtie", 
      "couscous", "cornmeal", "bread crumbs", "green beans", "mushrooms", "applesauce", 
      "cranberries", "tomato sauce", "canned tuna", "chicken", "salmon", "peanut butter", "cider", 
      "canola oil", "yogurt", "cheddar cheese", "mozzarella", "sour cream", "cream cheese", "garlic",
      "frozen vegatables", "bagels", "English muffins", "hamburger", "cod", "flounder", "mayonnaise",
      "mustard", "soy sauce", "chili paste", "hot sauce", "worcestershire", "bay leaves", "cayenne pepper",
      "cinnamon", "cloves", "ginger", "nutmeg", "chili powder", "curry powder", "Italian seasoning",
      "vanilla extract", "black beans", "olives", "tuna fish", "oats", "barley", "quinoa", "baking powder",
      "brown sugar", "cornstartch", "granulated sugar", "honey", "flour", "almond extract", "apple", 
      "apricot", "angelica", "avocado", "potatoes", "raisins", "almonds", "peanuts", "eggs"];

   ingredients.sort();

   function capitalize(s) {
      return s[0].toUpperCase() + s.slice(1);
   }

   function processIngredient(field, ingredient) {
      var index = ingredients.indexOf(ingredient);

      if (index != -1) {
         ingredients.splice(index, 1); // Remove the selected ingredient from raw ingredient list
         var ingredientClass = ingredient.replace(" ", "-");

         $("#search-result").append('<li class="' + ingredientClass + '">' + 
            capitalize(ingredient) + '</li>');

         var count = parseInt($("#ingredient-count").text()) + 1;
         $("#ingredient-count").html(count);

         $("img." + ingredientClass).fadeIn(); // Show the image for this ingredient

         field.value = ""; // Clear the field since it's been added to the result list
         if (count >= 3) {
            $("#find-btn").attr("disabled", false);
         }
      }
   }

   $("#find-recipe-btn").draggable({});
   $("#add-btn").draggable({});

   $("#find-recipe-btn").click(function(event) {
      location.href = "/find.php";
   });

   $("img.ingredient").draggable({
      stop: function(event, ui) {
         var ingredient = ui.position;
         var counter = $("img.counter-top").offset();

         if (ingredient.top < 187 || ingredient.left < 350 ||
             ingredient.top > 245 || ingredient.left > 980) {

            var name = $(this).attr("data-ingredient");

            $("li." + name).remove();

            var count = parseInt($("#ingredient-count").text()) - 1;
            $("#ingredient-count").html(count);

            ingredients.push(name.replace("-", " "));
            ingredients.sort();
            $(this).fadeOut();
         }
      }
   });

   $("#search-ingredient").keyup(function(event) {
      if (event.keyCode == 13) {
         processIngredient(this, this.value);
         $(this).autocomplete( "close" );
      }
   });

   $("#search-ingredient").autocomplete({
      source: function(req, responseFn) {
         var re = $.ui.autocomplete.escapeRegex(req.term);
         var matcher = new RegExp( "^" + re, "i" );
         var a = $.grep(ingredients, function(item,index) {
            return matcher.test(item);
         });
         responseFn(a);
      },

      select: function(event, ui) {
         processIngredient(this, ui.item.value);
         return false;
      }
    });

   $("#find-btn").click(function(event) {
      $("section.recipe").overlay().load();
      $("#cover").show();
   }); 

   var top = $("section.ingredients").offset().top;
   var left = $("section.ingredients").offset().left;
   $("section.recipe").overlay({
      top: top - 60,
      left: left,

      mask: {
         color: '#000',
         loadSpeed: 200,
         opacity: 0.5
      },

      closeOnClick: false,
      load: false,
      onClose: function() {
         $("#cover").hide();
      }
   });

});