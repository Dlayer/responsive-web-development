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
    public function indexAction()
    {
        $this->layout()->setVariables([
            'title' => 'Dlayer',
            'sub_title' => 'Web development simplified',
            'tag_line' => 'Dlayer is an Open Source responsive web development tool 
            aimed primarily at users with limited web design or development experience.'
        ]);

        return new ViewModel();
    }

    public function homeAction()
    {
        $this->layout()->setVariables([
                'title' => 'Dlayer demo',
                'tag_line' => 'I have one very simple goal for this demo; I want to showcase the fundamental idea 
                    behind Dlayer, to show how simple the process of creating a custom responsive website can and 
                    should be.'
            ])->setTemplate('layout/content');

        return new ViewModel();
    }
}
