<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Install\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout()->setVariables([
            'title' => 'Dlayer',
            'tag_line' => 'Dlayer is an Open Source responsive web development tool 
                aimed primarily at users with limited web design or development experience.',
            'nav' => [
                [ 'name' => 'Demo', 'uri' => '/', 'active' => true ],
                [ 'name' => 'Install', 'uri' => '/', 'active' => false ],
            ]
        ]);

        return new ViewModel();
    }
}
