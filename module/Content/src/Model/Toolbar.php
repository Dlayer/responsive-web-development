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
     * Cancel button for the left of the toolbar
     *
     * @return array
     */
    public function left() : array
    {
        return [
            [
                'uri' => '#',
                'name' => ' Cancel',
                'trigger' => [],
                'namespace' => null,
                'fa-glyphs' => [ 'fa-lg', 'fa-ban' ],
                'btn-classes' => [ 'btn-danger' ]
            ]
        ];
    }

    /**
     * Expand button for the right side of the toolbar
     *
     * @return array
     */
    public function right() : array
    {
        return [
            [
                'uri' => '#',
                'name' => ' Expand',
                'trigger' => [],
                'namespace' => null,
                'fa-glyphs' => [ 'fa-lg', 'fa-expand' ],
                'btn-classes' => [ 'btn-outline-info' ]
            ]
        ];
    }

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
                    'namespace' => 'Content\Tool\Page\Row',
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'uri' => '#',
                    'name' => 'Column',
                    'trigger' => [ 'row' ],
                    'namespace' => 'Content\Tool\Page\Column',
                    'btn-classes' => [ 'btn-outline-info' ]
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
                    'namespace' => 'Content\Tool\Navigate\Row'
                ],
                [
                    'uri' => '#',
                    'name' => 'Row',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Navigate\Column'
                ],
                [
                    'uri' => '#',
                    'name' => 'Column [prev]',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Navigate\ColumnPrev'
                ],
                [
                    'uri' => '#',
                    'name' => 'Column [next]',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Navigate\ColumnNext'
                ],
                [
                    'uri' => '#',
                    'name' => 'Content [prev]',
                    'trigger' => [ 'content' ],
                    'namespace' => 'Content\Tool\Navigate\ContentPrev'
                ],
                [
                    'uri' => '#',
                    'name' => 'Content [next]',
                    'trigger' => [ 'content' ],
                    'namespace' => 'Content\Tool\Navigate\ContentNext'
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
                    'namespace' => 'Content\Tool\Content\Heading',
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'uri' => '#',
                    'name' => 'Rich text',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Content\RichText',
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'uri' => '#',
                    'name' => 'Plain text',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Content\PlainText',
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'uri' => '#',
                    'name' => 'HTML',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Content\Html',
                    'btn-classes' => [ 'btn-outline-info' ]
                ]
            ],
            [
                [
                    'uri' => '#',
                    'name' => 'Jumbotron',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Content\Jumbotron',
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'uri' => '#',
                    'name' => 'Heading & date',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Content\HeadingAndDate',
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'uri' => '#',
                    'name' => 'Blog post',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Content\BlogPost',
                    'btn-classes' => [ 'btn-outline-info' ]
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
                    'namespace' => 'Content\Tool\Import\Form'
                ],
                [
                    'uri' => '#',
                    'name' => 'Image',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Import\Image'
                ],
                [
                    'uri' => '#',
                    'name' => 'Gallery',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Import\Gallery'
                ],
                [
                    'uri' => '#',
                    'name' => 'Widget',
                    'trigger' => [ 'column' ],
                    'namespace' => 'Content\Tool\Import\Widget'
                ]
            ]
        ];*/

        return []; // Deal with these tools later
    }
}
