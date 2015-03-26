<?php
/**
 *  @package PHPonTrax
 *  @uses Dispatcher::dispatch()
 *  $Id: dispatch.php 199 2006-05-05 01:52:43Z haas $
 */

/**
 *  Load the Trax environment
 */
require_once("environment.php");

$dispatcher = new Dispatcher();
$dispatcher->dispatch();

?>