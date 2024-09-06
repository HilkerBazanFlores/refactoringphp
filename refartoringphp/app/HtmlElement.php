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
    
    $result = $this->open();
    
    if ($this->isVoid()){
      return $result;
    }

    $result .=$this->content();
    
    $result .= $this->close();

    return $result;
  }

  public function open(): string
  {
    if (!empty($this->attributes)){

      $htmlAttributes='';
      foreach ($this->attributes as $name => $value){
        if (is_numeric($attribute)){
          $htmlAttributes.=' '.$value;
        }else{
          $htmlAttributes.=' '.$attribute.'="'.htmlentities($value, ENT_QUOTES, 'UTF-8').'"'; //name="value"
        }
        
      }
      //abrir la etiqueta con atributos
      $result = '<'.$this->name.$htmlAttributes.'>';

    //sino
    }else{

      //abrir la etiqueta con atributos
      $result = '<'.$this->name.'>';
    }
    return $result;
  }

  public function isVoid(): bool
  {
    return in_array($this->name, ['br','hr','img','input','meta']);
  }

  public function content(): string{
    return htmlentities($this->name, ENT_QUOTES, 'UTF-8');
  }

  public function close(): string{
    return '</'.$this->name.'>';
  }
}