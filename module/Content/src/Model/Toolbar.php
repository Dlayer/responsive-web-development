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
                [
                    'uri' => '#',
                    'name' => 'Row',
                    'trigger' => [ 'page', 'column' ],
                    'namespace' => 'Content\Model\Tool\Page\Row'
                ],
                [
                    'uri' => '#',
                    'name' => 'Column',
                    'trigger' => [ 'row' ],
                    'namespace' => 'Content\Model\Tool\Page\Column'
                ],
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
        /*return [
            [
                [
                    'uri' => '#',
                    'name' => 'Parent',
                    'trigger' => [ 'row' ],
                    'namespace' => 'Content\Model\Tool\Navigate\Row'
                ],
                [
                    'uri' => '#',
                    'name' => 'Row',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Navigate\Column'
                ],
                [
                    'uri' => '#',
                    'name' => 'Column [prev]',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Navigate\ColumnPrev'
                ],
                [
                    'uri' => '#',
                    'name' => 'Column [next]',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Navigate\ColumnNext'
                ],
                [
                    'uri' => '#',
                    'name' => 'Content [prev]',
                    'trigger' => [ 'content' ],
                    'namespace' => 'Content\Model\Tool\Navigate\ContentPrev'
                ],
                [
                    'uri' => '#',
                    'name' => 'Content [next]',
                    'trigger' => [ 'content' ],
                    'namespace' => 'Content\Model\Tool\Navigate\ContentNext'
                ]
            ]
        ];*/

        return []; // deal with these tools later.
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
    public function import() : array
    {
        /*return [
            [
                [
                    'uri' => '#',
                    'name' => 'Form',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Import\Form'
                ],
                [
                    'uri' => '#',
                    'name' => 'Image',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Import\Image'
                ],
                [
                    'uri' => '#',
                    'name' => 'Gallery',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Import\Gallery'
                ],
                [
                    'uri' => '#',
                    'name' => 'Widget',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Model\Tool\Import\Widget'
                ]
            ]
        ];*/

        return []; // Deal with these tools later
    }
}
