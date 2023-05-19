<?php

namespace App\Easyjet\SwissinsideCoreBundle\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

use \mysqli;

class SwissinsideSidebarExtension extends AbstractExtension
{
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('swissinsideSidebar', [$this, 'swissinsideSidebar']),
        ];
    }

    /**
     * Return the sidebar html code from the old sidebar generation function.
     *
     * @param string $string
     *
     * @return int
     */
    public function swissinsideSidebar($currentApplication)
    {
        global $_HOST;
        global $_LOGIN;
        global $_PASSWORD;
        global $_DB;

        if (is_file(__DIR__."/../../../../../public/includes/functions.php")) {
            require_once __DIR__."/../../../../../public/includes/auth.inc.php";
            require_once __DIR__."/../../../../../public/includes/functions.php";
            require_once __DIR__."/../../../../../public/includes/functions_spec.php";

            return gestion_menu();
        } else {
            return '';
        }
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'swissinsideSidebar';
    }
}
