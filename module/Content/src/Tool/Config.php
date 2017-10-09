<?php

declare(strict_types=1);

namespace Content\Tool;

/**
 * Definition of all the tools available to the system, id and namespace
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */
class Config
{
    /**
     * Return the entire config array
     *
     * @return array
     */
    static public function get() : array
    {
        return [
            'tools' => Config::tools()
        ];
    }

    /**
     * Define the tools available to the content manager, id and namespace
     *
     * @return array
     */
    static private function tools() : array
    {
        return [
            'cancel' => 'Content\Tool\Ui\Cancel',
            'expand' => 'Content\Tool\Ui\Expand',
            'row' => 'Content\Tool\Page\Row',
            'column' => 'Content\Tool\Page\Column',
            'heading' => 'Content\Tool\Content\Heading',
            'rich-text' => 'Content\Tool\Content\RichText',
            'plain-text' => 'Content\Tool\Content\PlainText',
            'html' => 'Content\Tool\Content\Html',
            'jumbotron' => 'Content\Tool\Content\Jumbotron',
            'heading-and-date' => 'Content\Tool\Content\HeadingAndDate',
            'blog-post' => 'Content\Tool\Content\BlogPost'
        ];
    }
}

