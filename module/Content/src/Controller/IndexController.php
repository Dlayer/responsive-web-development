<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout()
            ->setVariables([
                'title' => 'Dlayer',
                'sub_title' => 'Content manager',
                'tag_line' => 'Preview of content manager design',
                'navbar' => $this->navbarVariables()
            ]);

        return new ViewModel();
    }

    private function navbarVariables()
    {
        return [
            ['uri' => '/', 'name' => 'Home'],
            ['uri' => '/content', 'name' => 'Content Manager', 'active' => true ],
            ['uri' => '/helpers', 'name' => 'View helpers']
        ];
    }
}
