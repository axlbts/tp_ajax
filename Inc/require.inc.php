<?php
/**
 * Travaux Pratiques : Mvc
 * Autoload
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc
 */

// Debugggage
define('DEBUG', false);

/**
 * Chargement automatique des class
 * @param string class appelée
 *
 * @return none;
 */
function __autoload($class)
{
  // Inclusion des class de type Vue
  require_once('../View/'.$class.'.view.php');
  
  return;

} // __autoload($class)

// Visualisation des erreurs
if (DEBUG)
{
  // Détecte toutes les erreurs  
  error_reporting(E_ALL);
  // Affiche les erreurs
  ini_set('display_errors', 1);

  /**
   * Fonction de debug pour les tableaux
   * @param array tableau à débugguer
   *
   * @return none;
   */
  function debug($Tab)
  {
    echo '<pre>Tab';
    print_r($Tab);
    echo '</pre>';
         
  } // debug($Tab)
}
?>