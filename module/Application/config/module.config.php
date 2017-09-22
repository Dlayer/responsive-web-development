<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use DBlackborough\Zf3ViewHelpers;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application/admin' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application/admin[/:action]',
                    'defaults' => [
                        'controller' => Controller\AdminController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\AdminController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'layout/content-only'     => __DIR__ . '/../view/layout/content-only.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'view_helpers' => [
        'factories' => [
            Zf3ViewHelpers\Bootstrap4Badge::class => InvokableFactory::class,
            Zf3ViewHelpers\Bootstrap4Button::class => InvokableFactory::class,
            Zf3ViewHelpers\Bootstrap4Card::class => InvokableFactory::class,
            Zf3ViewHelpers\Bootstrap4Jumbotron::class => InvokableFactory::class,
            Zf3ViewHelpers\Bootstrap4NavbarLite::class => InvokableFactory::class,
            Zf3ViewHelpers\Bootstrap4ProgressBar::class => InvokableFactory::class,
            Zf3ViewHelpers\Bootstrap4ProgressBarMultiple::class => InvokableFactory::class,
        ],
        'aliases' => [
            'bootstrap4Badge' => Zf3ViewHelpers\Bootstrap4Badge::class,
            'bootstrap4Button' => Zf3ViewHelpers\Bootstrap4Button::class,
            'bootstrap4Card' => Zf3ViewHelpers\Bootstrap4Card::class,
            'bootstrap4Jumbotron' => Zf3ViewHelpers\Bootstrap4Jumbotron::class,
            'bootstrap4ProgressBarMultiple' => Zf3ViewHelpers\Bootstrap4ProgressBarMultiple::class,
            'bootstrap4NavbarLite' => Zf3ViewHelpers\Bootstrap4NavbarLite::class,
            'bootstrap4ProgressBar' => Zf3ViewHelpers\Bootstrap4ProgressBar::class,
        ]
    ]
];
