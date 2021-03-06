<?php
/**
 * Hanya - A rapid Website Engine
 *
 * @author Joël Gähwiler <joel.gaehwiler@bluewin.ch>
 * @copyright Joël Gähwiler 
 * @package Hanya
 **/

class Registry {
	
	// Storage
	private static $_data = array();
	
	// Load Array
	public static function load($array) {
		//$data = array();
		foreach($array as $key => $value) {
			if(strpos($key,".")) {
				$segments = explode(".",$key);
				self::$_data[$segments[0]][$segments[1]] = $value;
			} else {
				self::$_data[$key] = $value;
			}
		}
	}
	
	// Set Value by Key
	public static function set($key,$value) {
		if(strpos($key,".")) {
			$segments = explode(".",$key);
			self::$_data[$segments[0]][$segments[1]] = $value;
		} else {
			self::$_data[$key] = $value;
		}
	}
	
	// Get Value by Key
	public static function get($key) {
		if(strpos($key,".")) {
			$segments = explode(".",$key);
			if(isset(self::$_data[$segments[0]][$segments[1]])) {
				return self::$_data[$segments[0]][$segments[1]];
			} else {
				return null;
			}
			
		} else {
			return self::$_data[$key];
		}
	}
	
	// Check for Key
	public static function has($key) {
		return array_key_exists($key,self::$_data);
	}
	
	// Get All Values
	public static function all() {
		return self::$_data;
	}
	
	// Append String to a Value
	public static function append($key,$value) {
		self::set($key,self::get($key).$value);
	}
	
}