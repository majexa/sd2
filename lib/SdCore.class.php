<?php

class SdCore {

  const defaultOwnPageId = 1;

  static function getLayout($ownPageId) {
    return $ownPageId == SdCore::defaultOwnPageId ? 'home' : 'inner';
  }

  static function pageBlockItems() {
  }

}