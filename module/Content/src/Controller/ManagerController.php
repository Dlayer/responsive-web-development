<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\View;

class ManagerController extends AbstractActionController
{
    /**
     * Layout variables for the navbar
     *
     * @return array
     */
    private function layoutVariables() : array
    {
        return [
            'navbar' => [
                [ 'uri' => '/', 'name' => 'Home'],
                [ 'uri' => '/content', 'name' => 'Content Manager', 'active' => true ],
                [ 'uri' => '/helpers', 'name' => 'View helpers']
            ]
        ];
    }

    /**
     * Root for content manager
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction() : ViewModel
    {
        $this->layout()->setVariables($this->layoutVariables())->setTemplate('layout/content-manager');

        return new ViewModel();
    }
}
