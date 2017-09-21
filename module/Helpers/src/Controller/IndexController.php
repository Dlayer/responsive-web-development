<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Helpers\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout()->setVariables([
            'title' => 'View helpers',
            'sub_title' => 'Zend Framework 3 view helpers',
            'tag_line' => 'View helpers I developed for use in my projects',
            'show_view_helper_links' => true,
            'navbar' => $this->navbarVariables()
        ]);

        return new ViewModel();
    }

    private function navbarVariables()
    {
        return [
            [ 'uri' => '/', 'name' => 'Home'],
            [ 'uri' => '/content', 'name' => 'Content Manager'],
            [ 'uri' => '/helpers', 'name' => 'View helpers', 'active' => true ]
        ];
    }
}
