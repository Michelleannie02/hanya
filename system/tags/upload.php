<?php
/**
 * Hanya - A rapid Website Engine
 *
 * @author Joël Gähwiler <joel.gaehwiler@bluewin.ch>
 * @copyright Joël Gähwiler 
 * @package Hanya
 **/

class Upload_Tag {
	
	public static function call($attributes) {
		return Url::_("uploads/".$attributes[0]);
	}
	
}