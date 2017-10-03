<?php
declare(strict_types=1);

namespace Content\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Generate the toolbar for the managers/designers
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */
class Toolbar extends AbstractHelper
{
    private $button_groups;

    /**
     * Entry point for the view helper
     *
     * @return Toolbar
     */
    public function __invoke() : Toolbar
    {
        $this->reset();

        return $this;
    }

    /**
     * Reset all properties in case the view helper is called multiple times within a script
     *
     * @return void
     */
    private function reset() : void
    {
        $this->button_groups = [];
    }

    /**
     * Worker method for the view helper, generates the HTML, the method is private so that we
     * can echo/print the view helper directly
     *
     * @return string
     */
    private function render() : string
    {
        $html = '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom mt5">';
        $html .= '
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarBottom" aria-controls="navbarBottom" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>';
        $html .= '
            <div class="collapse navbar-collapse" id="navbarBottom">
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-danger" href="#"><i class="fa fa-lg fa-ban" aria-hidden="true"></i> Cancel</a>
                </div>';

        foreach ($this->button_groups as $group) {
            if (count($group) > 0) {
                $html .= '<div class="btn-group btn-group-sm">';
                foreach ($group as $button) {
                    $html .= '<a class="btn btn-outline-info" href="' . $button['uri'] . '">' . $button['name'] . '</a>';
                }
                $html .= '</div>';
            }
        }

        $html .= '
            <div class="btn-group">
                <a class="btn btn-outline-info" href="#"><i class="fa fa-lg fa-expand" aria-hidden="true"></i></a>
            </div></div>';
        $html .= '</nav>';

        return $html;
    }

    /**
     * Override the __toString() method to allow echo/print of the view helper directly, saves a
     * call to render()
     *
     * @return string
     */
    public function __toString() : string
    {
        return $this->render();
    }
}
