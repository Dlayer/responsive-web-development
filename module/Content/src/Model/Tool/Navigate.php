<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Content\Model\Tool;

class Navigate
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
                [ 'uri' => '#', 'name' => 'Parent', 'trigger' => [ 'row' ] ],
                [ 'uri' => '#', 'name' => 'Row', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Column [prev]', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Column [next]', 'trigger' => [ 'column' ] ],
                [ 'uri' => '#', 'name' => 'Content [prev]', 'trigger' => [ 'content' ] ],
                [ 'uri' => '#', 'name' => 'Content [next]', 'trigger' => [ 'content' ] ],
            ]
        ];
    }
}
