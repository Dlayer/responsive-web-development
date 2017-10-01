<?php
/**
 * Tools for the toolbar
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Content\Model;

class Toolbar
{
    /**
     * Page tools for the toolbar
     *
     * @return array
     */
    public function page() : array
    {
        return [
            [
                [ 'uri' => '#', 'name' => 'Row', 'trigger' => [ 'page', 'column' ] ],
                [ 'uri' => '#', 'name' => 'Column', 'trigger' => [ 'row' ] ],
            ]
        ];
    }

    /**
     * Navigation tools for the toolbar
     *
     * @return array
     */
    public function navigate() : array
    {
        return [
            [
                [ 'uri' => '#', 'name' => 'Parent', 'trigger' => [ 'row' ] ],
                [ 'uri' => '#', 'name' => 'Row', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Column [prev]', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Column [next]', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Content [prev]', 'trigger' => [ 'content' ] ],
                [ 'uri' => '#', 'name' => 'Content [next]', 'trigger' => [ 'content' ] ],
            ]
        ];
    }

    /**
     * Content tools for the toolbar
     *
     * @return array
     */
    public function content() : array
    {
        return [
            [
                [
                    'uri' => '#',
                    'name' => 'Heading',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\Heading'
                ],
                [
                    'uri' => '#',
                    'name' => 'Rich text',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\RichText'
                ],
                [
                    'uri' => '#',
                    'name' => 'Plain text',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\PlainText'
                ],
                [
                    'uri' => '#',
                    'name' => 'HTML',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\Html'
                ]
            ],
            [
                [
                    'uri' => '#',
                    'name' => 'Jumbotron',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\Jumbotron'
                ],
                [
                    'uri' => '#',
                    'name' => 'Heading & date',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\HeadingAndDate'
                ],
                [
                    'uri' => '#',
                    'name' => 'Blog post',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Content\BlogPost'
                ]
            ]
        ];
    }

    /**
     * Import tools for the toolbar
     *
     * @return array
     */
    public function tools() : array
    {
        return [
            [
                [ 'uri' => '#', 'name' => 'Form', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Image', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Gallery', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Widget', 'trigger' => [ 'column' ] ]
            ]
        ];
    }
}
