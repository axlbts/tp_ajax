<?php
/**
 * Affichage des parties gauche et droite
 * @author Christian Bonhomme
 *
 */
class VAside
{
  /**
   * Affichage HTML
   * @var object instancié par la classe VHtml
   */ 
  private $vhtml;

  /**
   * Constructeur
   */ 
  public function __construct()
  {
    $this->vhtml = new VHtml();
  }

  /**
   * Destructeur
   */ 
  public function __destruct() {}

  /**
   * Affichage de la partie gauche
   * 
   * @return none;
   */ 
  public function showAsideLeft()
  {
     $this->vhtml->showHtml('../Html/left.html.php');
  		
  } // showAsideLeft()

  /**
   * Affichage de la partie droite
   * 
   * @return none;
   */ 
  public function showAsideRight()
  {
     $this->vhtml->showHtml('../Html/right.html.php');
   		
  } // showAsideRight()

} // VAside

?>
