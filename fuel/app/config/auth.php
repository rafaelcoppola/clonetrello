<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(
    'driver'                 => 'Ormauth',
    'verify_multiple_logins' => false,
    'salt'                   => 'VVxK6RRGi_?+f8En+5Sf2-@G9jgo8Eoc4Ld/=_kv/y90Yi+#:v0oAk_R)4m233upm3n_/KXZbXIsHusV7xSPMw!03!6L=ozr2KoU+UNXVeqxZjqq15ZeQxgNiY3pKX=c',
    'iterations'             => 10000,
);
