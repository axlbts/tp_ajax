<?php
// Inclusion du fichier des utilitaires de l'application
require('../Inc/require.inc.php');

// Instancie la variable de contrôle
$EX = isset($_REQUEST['EX']) ? $_REQUEST['EX'] : 'home';

// Contrôleur
switch($EX)
{
  case 'home'     : home();     break;
  case 'products' : products(); break;
  case 'product'  : product();  break;
  case 'contact'  : contact();  break;
  default         : home();
}

// Inclusion du fichier de mise en page
require('../View/layout.view.php');

/**
 * Affiche la page d'accueil
 *
 * @return none
 */
function home()
{
    global $content;

    $content['title'] = 'Accueil';
    $content['meta'] = '<meta name="description" content="Description de la page d\'accueil" />
                        <meta name="keywords" content="mots, clefs, page, accueil" />
                        <meta name="author" content="Christian BONHOMME" />';
    $content['class'] = 'VHtml';
    $content['method'] = 'showHtml';
    $content['arg'] = '../Html/home.html.php';

} // home()

/**
 * Affiche la page des produits
 *
 * @return none
 */
function products()
{
    global $content;

    $content['title'] = 'Produits';
    $content['meta'] = '<meta name="description" content="Description de la catégorie aromathérapie" />
                        <meta name="keywords" content="mots, clefs, page, aromathérapie" />
                        <meta name="author" content="Christian BONHOMME" />';
    $content['class'] = 'VHtml';
    $content['method'] = 'showHtml';
    $content['arg'] = '../Html/products.html.php';

} // products()

/**
 * Affiche la page d'un produit
 *
 * @return none
 */
function product()
{
    global $content;

    $content['title'] = 'Produit';
    $content['meta'] = '<meta name="description" content="Description du produit lorem ipsum" />
                        <meta name="keywords" content="mots, clefs, page, lorem, ipsum" />
                        <meta name="author" content="Christian BONHOMME" />';
    $content['class'] = 'VHtml';
    $content['method'] = 'showHtml';
    $content['arg'] = '../Html/product.html.php';

} // product()

/**
 * Affiche le formulaire de contact
 *
 * @return none
 */
function contact()
{
    global $content;

    $content['title'] = 'Contact';
    $content['meta'] = '<meta name="robots" content="none" />';
    $content['class'] = 'VHtml';
    $content['method'] = 'showHtml';
    $content['arg'] = '../Html/contact.html.php';

} // contact()

?>