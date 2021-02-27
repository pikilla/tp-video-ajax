<?php

/**
 * Class Form
 * Permet de générer un formulaire
 */
class Form {

  /**
   * @var array Donnée utilisées par le formulaire
   */
  private $data;

 /**
   * @var string Tag utilisé pour entourer les champs
   */
  public $wrapper = 'p';

  /**
   * @param array $data
   */
  public function __construct($data = array()) 
  {
    $this->data = $data;
  }

  /**
   * @param string $html Code HTML à entourer
   * @return string 
   */
  private function wrapper($html) {
    return "<{$this->wrapper}>{$html}</{$this->wrapper}>";
  }


  private function getValue($index) {
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }

  public function input($champ,$type)
  {
    return $this->wrapper('<label for='.$champ.'>'.$champ.'</label><br><input type='.$type.' placeholder='.$champ.' name="'.$champ.'" value="'.$this->getValue($champ).'">');
  }
  public function titre($titre)
  {
    return $this->wrapper('<h1>'.$titre.'</h1>');
  }

  public function submit()
  {
    return $this->wrapper('<input type="submit" name="submit" value="Envoyer" />');
  }
  public function input_preremli($champ,$type,$champ1)
  {
    return $this->wrapper("<label for='$champ'>$champ</label><br><input type='$type' value='$champ1' name='$champ' />");
  }

}