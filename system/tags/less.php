<?php
/**
 * Hanya - A rapid Website Engine
 *
 * @author Joël Gähwiler <joel.gaehwiler@bluewin.ch>
 * @copyright Joël Gähwiler 
 * @package Hanya
 **/

class Less_Tag {
	
	public static function call($attributes) {
		return Url::_("?command=less&file=assets/".$attributes[0]);
	}
	
}