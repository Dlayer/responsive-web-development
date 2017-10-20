<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

declare(strict_types=1);

namespace Content;

use Dlayer\ViewHelper;
use Zend\Mvc\Controller\ControllerManager;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'content' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/content',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'content/manager' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/content/manager',
                    'defaults' => [
                        'controller' => Controller\ManagerController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'content/mockup' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/content/mockup[/:action]',
                    'defaults' => [
                        'controller' => Controller\MockupController::class,
                        'action'     => 'row-selected',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\ManagerController::class => InvokableFactory::class,
            Controller\MockupController::class => InvokableFactory::class
        ],
    ],
    'view_helpers' => [
        'factories' => [
            ViewHelper\Toolbar::class => InvokableFactory::class
        ],
        'aliases' => [
            'toolbar' => ViewHelper\Toolbar::class
        ]
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/content-manager-row-selected'     => __DIR__ . '/../view/layout/content-manager-row-selected.phtml',
            'layout/content-manager-column-selected'     => __DIR__ . '/../view/layout/content-manager-column-selected.phtml',
            'layout/content-manager-tool-selected'     => __DIR__ . '/../view/layout/content-manager-tool-selected.phtml',
            'layout/content-manager-tool-and-item-selected'     => __DIR__ . '/../view/layout/content-manager-tool-and-item-selected.phtml',
            'layout/content-manager-designer'     => __DIR__ . '/../view/layout/designer.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
