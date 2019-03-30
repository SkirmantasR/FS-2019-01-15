<?php
class ValidationInput
{
  private $input;
  private $errors;

  public function __construct($input)
  {
    $this->input = $input;
    $this->success = true;
    $this->errors = [];
  }

  public function length($from, $to)
  {
    if (!($from <= strlen($this->input) && strlen($this->input) <= $to)) 
      array_push($this->errors, "Must have $from to $to letters");
    return $this;
  }

  public function minCapitals($number)
  {
    $capitals = 0;
    $input = $this->input;
    for ($i = 0; $i < strlen($input); $i++) if (ucfirst($input[$i]) === $input[$i]) $capitals++;
    if ($capitals < $number)  array_push($this->errors, "At least $number capitals");
    return $this;
  }

  public function email()
  {
    $input = $this->input;
    $etaIndex = -1;
    $dotIndex = -1;
    for ($i = 0; $i < strlen($input); $i++) {
      if ($input[$i] === '@') $etaIndex = $i;
      if ($input[$i] === '.' && ($i - $etaIndex) > 2) $dotIndex = $i;
    }
    if(!($dotIndex > 0 && (strlen($input) - $dotIndex) > 1)) array_push($this->errors, 'Not good email');
    return $this;
  }

  public function success(){
    return (count($this->errors) > 0)? false: true;
  }


  public function getValue()
  {
    return $input;
  }
}