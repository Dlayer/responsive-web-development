<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Helpers;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use DBlackborough\Zf3ViewHelpers;

return [
    'router' => [
        'routes' => [
            'helpers' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/helpers',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'helpers/demo' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/helpers/demo[/:action]',
                    'defaults' => [
                        'controller' => Controller\DemoController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\DemoController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [

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
