<?php

namespace Content\View\Helper;

use Zend\View\Helper\AbstractHelper;

class TestHelper extends AbstractHelper
{
    public function __construct()
    {
        return $this;
    }

    public function render() : string
    {
        $html = '<p>Test renderer....woohoo!</p>';
        $html .= '<p>' . $this->view->bootstrap4Button('Button')->setStyle('info')->setModeInput('submit') . '</p>';

        return $html;
    }
}
