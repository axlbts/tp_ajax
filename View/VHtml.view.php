<?php
/**
 * Affichage des fichiers HTML
 * @author Christian Bonhomme
 *
 */
class VHtml
{
  /**
   * Constructeur
   */ 
  public function __construct(){}
  
  /**
   * Destructeur
   */ 
  public function __destruct(){}
  
  /**
   * Affichage du fichier HTML
   * @param fichier HTML
   * 
   * @return none;
   */ 
  public function showHtml($_html)
  {
    (file_exists($_html)) ? include($_html) : include('../Html/unknown.html');
    
  } // showHtml($_html)
  
} // VHtml
?>