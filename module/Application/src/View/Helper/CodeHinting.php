<?php
/**
 * Code helper hinting helper class for views, in the view add a type hint to $this and
 * you will get code hinting help for any view helpers you add methods for.
 *
 * @note The view helpers typically use invoke, in this class we add the phpDoc for the
 * invoke method as though it was the constructor.
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/responsive-web-development/blob/master/LICENSE
 */

namespace Application\View\Helper;

use DBlackborough\Zf3ViewHelpers;

/**
 * Code hinting helper for custom view helpers
 *
 * @package Application\View\Helper
 */
class CodeHinting
{
    /**
     * Create a Bootstrap 4 badge
     *
     * @param string $label
     *
     * @return Zf3ViewHelpers\Bootstrap4Badge
     */
    public function bootstrap4Badge(string $label) : Zf3ViewHelpers\Bootstrap4Badge {}

    /**
     * Create a Bootstrap 4 button
     *
     * @param string $label
     *
     * @return Zf3ViewHelpers\Bootstrap4Button
     */
    public function bootstrap4Button(string $label) : Zf3ViewHelpers\Bootstrap4Button {}

    /**
     * Create a Bootstrap 4 jumbotron component
     *
     * @param string $heading
     * @param string $content
     *
     * @return Zf3ViewHelpers\Bootstrap4Jumbotron
     */
    public function bootstrap4Jumbotron(string $heading, string $content) : Zf3ViewHelpers\Bootstrap4Jumbotron {}

    /**
     * Create a Bootstrap 4 navbar, lite version
     *
     * @return Zf3ViewHelpers\Bootstrap4NavbarLite
     */
    public function bootstrap4NavbarLite() : Zf3ViewHelpers\Bootstrap4NavbarLite {}
}
