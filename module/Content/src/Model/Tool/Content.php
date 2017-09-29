<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Content\Model\Tool;

class Content
{
    /**
     * Tools array for toolbar
     *
     * @return array
     */
    public function tools() : array
    {
        return [
            [
                [ 'uri' => '#', 'name' => 'Heading', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Rich text', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Plain text', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'HTML', 'trigger' => [ 'column' ] ]
            ],
            [
                [ 'uri' => '#', 'name' => 'Jumbotron', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Heading & date', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Blog post', 'trigger' => [ 'column' ] ]
            ]
        ];
    }
}
