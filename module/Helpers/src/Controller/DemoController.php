<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Helpers\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DemoController extends AbstractActionController
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
            [ 'uri' => '/content', 'name' => 'Content Manager'],
            [ 'uri' => '/helpers', 'name' => 'View helpers', 'active' => true ]
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
            'title' => 'ZF3 view helpers',
            'sub_title' => 'with a Bootstrap bias',
            'tag_line' => 'View helpers I have developed for use in my projects',
            'show_view_helper_links' => true,
            'navbar' => $this->navbarVariables()
        ];
    }

    /**
     * Badge example
     *
     * @return ViewModel
     */
    public function badgeAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    /**
     * Button example
     *
     * @return ViewModel
     */
    public function buttonAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    /**
     * Card example
     *
     * @return ViewModel
     */
    public function cardAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    /**
     * Jumbotron example
     *
     * @return ViewModel
     */
    public function jumbotronAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    /**
     * Multiple progress bars example
     *
     * @return ViewModel
     */
    public function multipleProgressBarsAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    /**
     * Navbar example
     *
     * @return ViewModel
     */
    public function navbarAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }

    /**
     * Progress bar example
     *
     * @return ViewModel
     */
    public function progressBarAction() : ViewModel
    {
        $this->layout()->setVariables($this->jumbotronVariables());

        return new ViewModel();
    }
}
