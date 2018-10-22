<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Html;

use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Node\Directory as DirectoryNode;
use SebastianBergmann\CodeCoverage\RuntimeException;

/**
 * Generates an HTML report from a code coverage object.
 */
class Facade
{
    /**
     * @var string
     */
    private $templatePath;

    /**
     * @var string
     */
    private $generator;

    /**
     * @var int
     */
    private $lowUpperBound;

    /**
     * @var int
     */
    private $highLowerBound;

    /**
     * Constructor.
     *
     * @param int    $lowUpperBound
     * @param int    $highLowerBound
     * @param string $generator
     */
    public function __construct($lowUpperBound = 50, $highLowerBound = 90, $generator = '')
    {
        $this->generator      = $generator;
        $this->highLowerBound = $highLowerBound;
        $this->lowUpperBound  = $lowUpperBound;
        $this->templatePath   = __DIR__ . '/Renderer/Template/';
    }

    /**
     * @param CodeCoverage $coverage
     * @param string       $target
     */
    public function process(CodeCoverage $coverage, $target)
    {
        $target = $this->getDirectory($target);
        $report = $coverage->getReport();
        unset($coverage);

        if (!isset($_SERVER['REQUEST_TIME'])) {
            $_SERVER['REQUEST_TIME'] = \time();
        }

        $date = \date('D M j G:i:s T Y', $_SERVER['REQUEST_TIME']);

        $dashboard = new Dashboard(
            $this->templatePath,
            $this->generator,
            $date,
            $this->lowUpperBound,
            $this->highLowerBound
        );

        $directory = new Directory(
            $this->templatePath,
            $this->generator,
            $date,
            $this->lowUpperBound,
            $this->highLowerBound
        );

        $file = new File(
            $this->templatePath,
            $this->generator,
            $date,
            $this->lowUpperBound,
            $this->highLowerBound
        );

        $directory->render($report, $target . 'index.html');
        $dashboard->render($report, $target . 'dashboard.html');

        foreach ($report as $node) {
            $id = $node->getId();

            if ($node instanceof DirectoryNode) {
                if (!\file_exists($target . $id)) {
                    \mkdir($target . $id, 0777, true);
                }

                $directory->render($node, $target . $id . '/index.html');
                $dashboard->render($node, $target . $id . '/dashboard.html');
            } else {
                $dir = \dirname($target . $id);

                if (!\file_exists($dir)) {
                    \mkdir($dir, 0777, true);
                }

                $file->render($node, $target . $id . '.html');
            }
        }

        $this->copyFiles($target);
    }

    /**
     * @param string $target
     */
    private function copyFiles($target)
    {
        $dir = $this->getDirectory($target . '.css');

        \copy($this->templatePath . 'css/bootstrap.min.css', $dir . 'bootstrap.min.css');
        \copy($this->templatePath . 'css/nv.d3.min.css', $dir . 'nv.d3.min.css');
        \copy($this->templatePath . 'css/style.css', $dir . 'style.css');
<<<<<<< HEAD
=======
        \copy($this->templatePath . 'css/custom.css', $dir . 'custom.css');
        \copy($this->templatePath . 'css/octicons.css', $dir . 'octicons.css');
>>>>>>> 73afd074c7d7331c5955fbcccf9425080eb84f34

        $dir = $this->getDirectory($target . '.icons');
        \copy($this->templatePath . 'icons/file-code.svg', $dir . 'file-code.svg');
        \copy($this->templatePath . 'icons/file-directory.svg', $dir . 'file-directory.svg');

        $dir = $this->getDirectory($target . '.js');
        \copy($this->templatePath . 'js/bootstrap.min.js', $dir . 'bootstrap.min.js');
        \copy($this->templatePath . 'js/popper.min.js', $dir . 'popper.min.js');
        \copy($this->templatePath . 'js/d3.min.js', $dir . 'd3.min.js');
        \copy($this->templatePath . 'js/jquery.min.js', $dir . 'jquery.min.js');
        \copy($this->templatePath . 'js/nv.d3.min.js', $dir . 'nv.d3.min.js');
        \copy($this->templatePath . 'js/file.js', $dir . 'file.js');
    }

    /**
     * @param string $directory
     *
     * @return string
     *
     * @throws RuntimeException
     */
    private function getDirectory($directory)
    {
        if (\substr($directory, -1, 1) != \DIRECTORY_SEPARATOR) {
            $directory .= \DIRECTORY_SEPARATOR;
        }

        if (\is_dir($directory)) {
            return $directory;
        }

        if (@\mkdir($directory, 0777, true)) {
            return $directory;
        }

        throw new RuntimeException(
            \sprintf(
                'Directory "%s" does not exist.',
                $directory
            )
        );
    }
}
