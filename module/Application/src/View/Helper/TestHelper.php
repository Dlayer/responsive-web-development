<?php

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class TestHelper extends AbstractHelper
{
    public function __construct()
    {
        return $this;
    }

    public function render() : string
    {
        return '<p>Test renderer....woohoo!</p>';
    }
}
