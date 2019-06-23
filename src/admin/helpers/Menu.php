<?php

namespace yii2tool\offline\admin\helpers;

use yii2rails\extension\menu\interfaces\MenuInterface;
use yii2tool\offline\domain\enums\OfflinePermissionEnum;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['offline/main', 'title'],
			'url' => 'offline',
			'module' => 'offline',
			//'icon' => 'power-off',
			'access' => OfflinePermissionEnum::MANAGE,
		];
	}

}
