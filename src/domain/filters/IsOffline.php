<?php

namespace yii2tool\offline\domain\filters;

use yii2rails\extension\scenario\base\BaseScenario;

class IsOffline extends BaseScenario {

    public $exclude = [];
	
	public function run() {
		$config = $this->getData();
		if(in_array(APP, $this->exclude)) {
			unset($config['catchAll']);
		}
		$this->setData($config);
	}
 
}
