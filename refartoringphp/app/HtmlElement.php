<?php

namespace App;

class HtmlElement{
  private $name;
  private $content;
  private $attributes;

  public function __construct(string $name, array $attributes=[],$content=null ) {
    $this->name = $name;
    $this->content = $content;
    $this->attributes = $attributes;
  }

  public function render() {
    
    //si el alemeto tiene atributos
    if (!empty($this->attributes)){

      $htmlAttributes='';
      foreach ($this->attributes as $name => $value){
        $htmlAttributes.=$name.'="'.$value.'"'; //name="value"
      }
      //abrir la etiqueta con atributos
      $result = '<'.$this->name.' '.$htmlAttributes.'>';

    //sino
    }else{

      //abrir la etiqueta con atributos
      $result = '<'.$this->name.'>';
    }

    //imprimir el contenido
    $result .=$this->content;
    //cerrar la etiqueta
    $result .= '</'.$this->name.'>';

    return $result;

  }
}