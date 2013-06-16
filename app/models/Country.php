<?php

class Country extends Eloquent {
  protected $guarded = array();

  public static $rules = array();

  public function records() {
    return $this->hasMany('Record');
  }
}
