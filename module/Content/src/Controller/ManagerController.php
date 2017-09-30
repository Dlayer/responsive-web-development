<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

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
                [ 'uri' => '/', 'name' => 'Dlayer vNext'],
                [ 'uri' => '/content', 'name' => 'Content Manager', 'active' => true ],
                [ 'uri' => '/helpers', 'name' => 'View helpers']
            ]
        ];
    }

    /**
     * Row selected
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function rowSelectedAction() : ViewModel
    {
        $this->layout()->setVariables($this->layoutVariables())->setTemplate('layout/content-manager-row-selected');

        return new ViewModel();
    }

    /**
     * Column selected
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function columnSelectedAction() : ViewModel
    {
        $this->layout()->setVariables($this->layoutVariables())->setTemplate('layout/content-manager-column-selected');

        return new ViewModel();
    }

    /**
     * Sample HTML when a tool is selected, add mode
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function toolSelectedAction() : ViewModel
    {
        $this->layout()->setVariables($this->layoutVariables())->setTemplate('layout/content-manager-tool-selected');

        return new ViewModel();
    }

    /**
     * Sample HTML when a tool is selected and item in edit mode
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function toolAndItemSelectedAction() : ViewModel
    {
        $this->layout()->setVariables($this->layoutVariables())->setTemplate('layout/content-manager-tool-and-item-selected');

        return new ViewModel();
    }

    /**
     * Mocking up the tools
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function mockToolsAction() : ViewModel
    {
        $this->layout()->setVariables($this->layoutVariables())->setTemplate('layout/content-manager-mock-tools');

        return new ViewModel();
    }
}
