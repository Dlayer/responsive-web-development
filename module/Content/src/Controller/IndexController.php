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

class IndexController extends AbstractActionController
{
    /**
     * Layout variables for the navbar
     *
     * @return array
     */
    private function navbarVariables() : array
    {
        return [
            [ 'uri' => '/', 'name' => 'Home'],
            [ 'uri' => '/content', 'name' => 'Content Manager', 'active' => true ],
            [ 'uri' => '/helpers', 'name' => 'View helpers']
        ];
    }

    /**
     * Layout variable for the header jumbotron
     *
     * @return array
     */
    private function jumbotronVariables() : array
    {
        return [
            'title' => 'Dlayer',
            'sub_title' => 'Content manager',
            'tag_line' => 'Preview of the Content manager design',
            'navbar' => $this->navbarVariables()
        ];
    }

    /**
     * Root for content manager
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }
}
