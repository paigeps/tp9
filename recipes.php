<? 

/* Recipe loader for TP9 */

$name = $_GET["recipename"];

$list = $_GET["recipelist"];

if ($name == "Spam Musubi") {
  
  if ($list == "ingredients") {
    include "ingredients.html";
  }
  elseif ($list == "equipment") {
    include "equipment.html";
  }
  elseif ($list == "directions") {
    include "directions.html";
  }
  
}

elseif ($name == "Tres Leches") {
  
  if ($list == "ingredients") {
    include "ingredients2.html";
  }
  elseif ($list == "equipment") {
    include "equipment2.html";
  }
  elseif ($list == "directions") {
    include "directions2.html";
  }
  
}

elseif ($name == "Cauliflower Mac and Cheese") {
  
  if ($list == "ingredients") {
    include "ingredients3.html";
  }
  elseif ($list == "equipment") {
    include "equipment3.html";
  }
  elseif ($list == "directions") {
    include "directions3.html";
  }
  
}