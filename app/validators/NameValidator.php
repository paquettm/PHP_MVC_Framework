<?php
namespace app\validators;

#[\Attribute]
class NameValidator{
	function valid($data){
		return $data != "";
	}
}
