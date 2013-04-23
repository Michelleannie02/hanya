<?php
/**
 * Hanya - A rapid Website Engine
 *
 * @author Joël Gähwiler <joel.gaehwiler@bluewin.ch>
 * @copyright Joël Gähwiler 
 * @package Hanya
 **/

class Asset_Tag {
	
	public static function call($attributes) {
		return Url::_("assets/".$attributes[0]);
	}
	
}