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

use Content\Tool\Config;
use Zend\Session\Container as SessionContainer;

class Status
{
    /**
     * @var \Zend\Session\Container Session container
     */
    private $session;

    /**
     * Status constructor.
     */
    public function __construct()
    {
        $this->session = new SessionContainer('Content\Ui\Status');
    }

    /**
     * Clear the current column id
     *
     * @return void
     */
    public function clearColumnId() : void
    {
        unset($this->session->column_id);
    }

    /**
     * Clear the current content id
     *
     * @return void
     */
    public function clearContentId() : void
    {
        unset($this->session->content_id);
    }

    /**
     * Clear the current page id
     *
     * @return void
     */
    public function clearPageId() : void
    {
        unset($this->session->page_id);
    }

    /**
     * Clear the current row id
     *
     * @return void
     */
    public function clearRowId() : void
    {
        unset($this->session->row_id);
    }

    /**
     * Clear the currently selected tool
     *
     * @return void
     */
    public function clearTool() : void
    {
        unset($this->session->tool);
        unset($this->session->tool_tab);
    }

    /**
     * Get the id of the currently selected column or null
     *
     * @return int|null
     */
    public function getColumnId() : ?int
    {
        if (isset($this->session->column_id) === true) {
            return (int) $this->session->column_id;
        } else {
            return null;
        }
    }

    /**
     * Get the id of the currently selected content item or null
     *
     * @return int|null
     */
    public function getContentId() : ?int
    {
        if (isset($this->session->content_id) === true) {
            return (int) $this->session->content_id;
        } else {
            return null;
        }
    }

    /**
     * Get the id of the currently selected page or null
     *
     * @return int|null
     */
    public function getPageId() : ?int
    {
        if (isset($this->session->page_id) === true) {
            return (int) $this->session->page_id;
        } else {
            return null;
        }
    }

    /**
     * Get the id of the currently selected row or null
     *
     * @return int|null
     */
    public function getRowId() : ?int
    {
        if (isset($this->session->row_id) === true) {
            return (int) $this->session->row_id;
        } else {
            return null;
        }
    }

    /**
     * Get the name of the currently selected tool
     *
     * @return array|null
     */
    public function getTool() : ?array
    {
        if (isset($this->session->tool) === true) {
            return [
                'tool' => $this->session->tool,
                'tool_tab' => $this->session->tool_tab
            ];
        } else {
            return null;
        }
    }

    /**
     * Set the id of the selected column
     *
     * @param integer $id
     *
     * @return void
     */
    public function setColumnId(int $id) : void
    {
        $this->session->column_id = $id;
    }

    /**
     * Set the id of the selected content item
     *
     * @param integer $id
     *
     * @return void
     */
    public function setContentId(int $id) : void
    {
        $this->session->content_id = $id;
    }

    /**
     * Set the id of the selected page
     *
     * @param integer $id
     *
     * @return void
     */
    public function setPageId(int $id) : void
    {
        $this->session->page_id = $id;
    }

    /**
     * Set the id of the selected row
     *
     * @return void
     */
    public function setRowId(int $id) : void
    {
        $this->session->row_id = $id;
    }

    /**
     * Set the selected tool and tab
     *
     * @param string $name
     * @param string $tab
     *
     * @return void
     */
    public function setTool(string $name, string $tab) : void
    {
        if (array_key_exists($name, Config::get()['tools']) === true) {

            /**
             * Need to check to see if tab is defined in the tool config class and then
             * set the tool and tool tab ids in the session
             */
            //$this->session->tool = $name;
            //$this->session->tool_tab = $tab;
        }
    }
}
