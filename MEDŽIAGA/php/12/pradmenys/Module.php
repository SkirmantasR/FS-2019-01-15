<?php
class Module
{
  private $title;
  private $credits;

  public function __construct(string $title, int $credits)
  {
    $this->title = $title;
    $this->credits = $credits;
  }

  public function getCredits()
  {
    return $this->credits;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
