<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Content\Model\Tool;

class Page
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
                [ 'uri' => '#', 'name' => 'Row', 'trigger' => [ 'page', 'column' ] ],
                [ 'uri' => '#', 'name' => 'Column', 'trigger' => [ 'row' ] ],
            ]
        ];
    }
}
