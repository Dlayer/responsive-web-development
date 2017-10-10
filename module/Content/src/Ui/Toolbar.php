<?php

declare(strict_types=1);

namespace Content\Ui;

/**
 * Tools for the toolbar
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */
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
                'id' => 'cancel',
                'name' => ' Cancel',
                'trigger' => [],
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
                'id' => 'expand',
                'name' => ' Expand',
                'trigger' => [],
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
                    'id' => 'row',
                    'name' => 'Row',
                    'trigger' => [ 'page', 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'id' => 'column#',
                    'name' => 'Column',
                    'trigger' => [ 'row' ],
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
                    'id' => 'heading',
                    'name' => 'Heading',
                    'trigger' => [ 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'id' => 'rich-text#',
                    'name' => 'Rich text',
                    'trigger' => [ 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'id' => 'plain-text',
                    'name' => 'Plain text',
                    'trigger' => [ 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'id' => 'html',
                    'name' => 'HTML',
                    'trigger' => [ 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ]
            ],
            [
                [
                    'id' => 'jumbotron',
                    'name' => 'Jumbotron',
                    'trigger' => [ 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'id' => 'heading-and-date',
                    'name' => 'Heading & date',
                    'trigger' => [ 'column' ],
                    'btn-classes' => [ 'btn-outline-info' ]
                ],
                [
                    'id' => 'blog-post',
                    'name' => 'Blog post',
                    'trigger' => [ 'column' ],
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
