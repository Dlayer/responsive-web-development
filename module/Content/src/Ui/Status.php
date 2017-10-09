<?php
/**
 * Designer UI status, the currently selected tool, page, content row, column and content item
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Content\Ui;

use Zend\Mvc\MvcEvent;
use Zend\Session\Container as SessionContainer;
use Zend\Session\SessionManager;

class Status
{
    /**
     * @var integer Id of the selected page, if any, otherwise null
     */
    private $page_id = null;

    /**
     * @var integer Id of the selected row, if any, otherwise null
     */
    private $row_id = null;

    /**
     * @var integer Id of the selected column, if any, otherwise null
     */
    private $column_id = null;

    /**
     * @var integer Id of the selected content item, if any, otherwise null
     */
    private $content_id = null;

    /**
     * @var string Name of the selected tool, if any, otherwise null
     */
    private $tool = null;

    /**
     * @var string Name of the selected tool tab, if any, otherwise null
     */
    private $tool_tab = null;

    /**
     * @var \Zend\Session\Container Session container
     */
    private $session;

    public function __construct()
    {
        $this->session = new SessionContainer('Content\Ui\Status');
    }
}
