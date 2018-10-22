<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use SebastianBergmann\Version as VersionId;

class Version
{
    private static $version;

    /**
     * @return string
     */
    public static function id()
    {
        if (self::$version === null) {
<<<<<<< HEAD
            $version       = new VersionId('5.3.2', \dirname(__DIR__));
=======
            $version       = new VersionId('6.1.0', \dirname(__DIR__));
>>>>>>> 73afd074c7d7331c5955fbcccf9425080eb84f34
            self::$version = $version->getVersion();
        }

        return self::$version;
    }
}
