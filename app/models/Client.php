<?php
namespace app\models;

class Client extends \app\core\Model{

	#[\app\validators\NonEmpty]//definition of validators to apply on property
	#[\app\validators\Name]//definition of validators to apply on property
	var $first_name;
	#[\app\validators\Name]
	var $last_name;

}