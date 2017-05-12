<?php
/**
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout()->setVariables([
            'title' => 'Web sites',
            'tag_line' => 'This section will help you create new web sites or edit the options for all your  
                existing web sites.'
        ])->setTemplate('layout/content');

        return new ViewModel();
    }
}
