<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report;

use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\RuntimeException;

/**
 * Uses var_export() to write a SebastianBergmann\CodeCoverage\CodeCoverage object to a file.
 */
class PHP
{
    /**
<<<<<<< HEAD
     * @param CodeCoverage $coverage
     * @param string       $target
     *
     * @return string
=======
     * @throws \SebastianBergmann\CodeCoverage\RuntimeException
>>>>>>> 73afd074c7d7331c5955fbcccf9425080eb84f34
     */
    public function process(CodeCoverage $coverage, $target = null)
    {
        $filter = $coverage->filter();

        $buffer = \sprintf(
            '<?php
$coverage = new SebastianBergmann\CodeCoverage\CodeCoverage;
$coverage->setData(%s);
$coverage->setTests(%s);

$filter = $coverage->filter();
$filter->setWhitelistedFiles(%s);

return $coverage;',
            \var_export($coverage->getData(true), 1),
            \var_export($coverage->getTests(), 1),
            \var_export($filter->getWhitelistedFiles(), 1)
        );

        if ($target !== null) {
            if (!$this->createDirectory(\dirname($target))) {
                throw new \RuntimeException(\sprintf('Directory "%s" was not created', \dirname($target)));
            }

            if (@\file_put_contents($target, $buffer) === false) {
                throw new RuntimeException(
                    \sprintf(
                        'Could not write to "%s',
                        $target
                    )
                );
            }
        }

        return $buffer;
    }

    private function createDirectory(string $directory): bool
    {
        return !(!\is_dir($directory) && !@\mkdir($directory, 0777, true) && !\is_dir($directory));
    }
}
