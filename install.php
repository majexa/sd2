<?php

$projFolder = dirname(__DIR__).'/ngn-env/projects/'.$_SERVER['argv'][2];
File::checkExists($projFolder);
$dummyFolder = __DIR__.'/dummy';
Dir::copy($dummyFolder, $projFolder, false);
