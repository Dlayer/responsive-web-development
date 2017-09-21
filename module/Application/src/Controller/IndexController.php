<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

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
            [ 'uri' => '/', 'name' => 'Home', 'active' => true ],
            [ 'uri' => '/content', 'name' => 'Content Manager'],
            [ 'uri' => '/helpers', 'name' => 'View helpers' ]
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
            'sub_title' => 'Web development simplified',
            'tag_line' => 'Dlayer is an Open Source responsive web development tool 
                aimed primarily at users with limited web index or development experience. I am 
                in the process of migrating Dlayer from Zend Framework 1 to 3, the original project 
                can be reached below.',
            'show_links' => true,
            'navbar' => $this->navbarVariables()
        ];
    }

    /**
     * Site root
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    public function homeAction()
    {
        $this->layout()->setVariables([
            'title' => 'Dlayer demo',
            'tag_line' => 'I have one very simple goal for this demo; I want to showcase the fundamental idea 
                behind Dlayer, to show how simple the process of creating a custom responsive website can and 
                should be.'
        ])->setTemplate('layout/content-only');

        return new ViewModel();
    }
}
