<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Content\Controller;

use Content\Ui\State as UiState;
use Content\Ui\Toolbar as UiToolbar;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

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
        $this->ui();

        return new ViewModel();
    }

    /**
     * Data and state for the content manager toolbar
     *
     * @param array|null $tool Tool details or null if no tool selected
     *
     * @return array
     */
    private function toolbar(?array $tool) : array
    {
        $toolbar = new UiToolbar();

        return [
            'middle' => [
                'page' => $toolbar->page(),
                'navigate' => $toolbar->navigate(),
                'simple' => $toolbar->simple(),
                'complex' => $toolbar->complex(),
                'import' => $toolbar->import()
            ],
            'left' => $toolbar->left(),
            'right' => $toolbar->right(),
            'active' => ($tool !== null) ? $tool['tool'] : null
        ];
    }

    /**
     * Data and state of the currently selected tool
     *
     * @return array
     */
    private function tool() : array
    {
        return [];
    }

    /**
     * Data array for the navbar
     *
     * @return array
     */
    private function navbar() : array
    {
        return  [
            [ 'uri' => '/', 'name' => 'Dlayer vNext'],
            [ 'uri' => '/content', 'name' => 'Content Manager', 'active' => true ],
            [ 'uri' => '/helpers', 'name' => 'View helpers']
        ];
    }

    /**
     * Collect all the data for the content manager ui and send it to the layout
     *
     * @return void
     */
    private function ui() : void
    {
        $state = new UiState();

        $ui = [
            'navbar' => $this->navbar(),
            'tool' => $this->tool(),
            'toolbar' => $this->toolbar($state->getTool())
        ];

        $this->layout()->setVariables($ui)->setTemplate('layout/content-manager-mock-tools');
    }
}
