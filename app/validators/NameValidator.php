<?php
namespace app\validators;

#[\Attribute]
class NameValidator{
	function valid($data){
		echo "name validation on '$data'";
		return $data != "";
	}
}