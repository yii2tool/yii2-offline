<?php

namespace yii2tool\offline\admin;

use yii\base\Module as YiiModule;
use yii2rails\extension\web\helpers\Behavior;
use yii2tool\offline\domain\enums\OfflinePermissionEnum;

/**
 * offline module definition class
 */
class Module extends YiiModule
{

	public static $langDir = '@yii2module/offline/admin/messages';

    public function behaviors()
    {
        return [
            'access' => Behavior::access(OfflinePermissionEnum::MANAGE),
        ];
    }

}
