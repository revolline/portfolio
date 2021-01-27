<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Admin base controller
 *
 * @method void addJsonError($attrName, $errorMessage = null)
 * @method void addJsonErrors($list)
 * @method bool hasJsonErrors()
 * @method array getJsonErrors()
 * @method string sendJsonError($attrName, $errorMessage = null)
 * @method string sendJsonErrors($list)
 * @method string sendJsonResponse($errorsOnlyIfExists = true)
 *
 * @property-read array $jsonErrors
 */
class AdminBaseController extends Controller
{
    /**
     * @var string
     */
    public $layout = '@app/views/layouts/admin/main';

    /**
     * @var string
     */
    public $pageTitle = '';

    /**
     * Массив с пунктами меню, которые выводятся в подразделе
     * @var array
     */
    public $menu_item = '';


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Admin menu items
     * @return array
     */
    public static function getMenu()
    {
        return [
            [
                'label' => 'Статьи',
                'icon' => 'fa fa-file-text',
                'url' => ['/articles'],
            ],

        ];
    }

}