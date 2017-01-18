/**
 * Récupère le prix d'un article, l'ajoute au prix total et l'affiche dans le panier
 * @param événement
 * 
 * @return none
 */
function buy(event)
{
  // Récupère l'élément <button>
  var elem = event.target || event.srcElement;
 
  // Récupération de l'élément <p> parent de elem
  var paragraph = elem.parentNode;
  
  // Récupération du texte contenu dans l'élément <b> du paragraphe
  var price = paragraph.getElementsByTagName('b')[0].innerHTML;
  
  // Extraction du prix (on enlève le €)
  price = price.substr(0, price.length-1);
  
  // Transformation du texte en flottant
  price = parseFloat(price);
  
  // Récupération de l'élément <div id="cart">
  var cart = document.getElementById('cart');
  
  // Récupération du texte contenu dans l'élément <b> de l'élément <div id="cart">
  var total_price = cart.getElementsByTagName('b')[0].innerHTML;
  
  // Test s'il exite déjà un total
  if (total_price)
  {
	// Extraction du prix (on enlève le €)
    total_price = total_price.substr(0, total_price.length-1);
  
    // Transformation du texte en flottant
    total_price = parseFloat(total_price);
  }
  
  // Ajout dans du prix dans le prix total
  total_price += price;
  
  // Affiche le prix total avec le €
  cart.getElementsByTagName('b')[0].innerHTML = total_price + '€';
  
  // Visualise l'élément <div id="cart"> en display de type table
  cart.style.display = 'table';

} // function buy(event)
