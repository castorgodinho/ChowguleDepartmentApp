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

/**
 * Filter for whitelisting of code coverage information.
 */
class Filter
{
    /**
     * Source files that are whitelisted.
     *
     * @var array
     */
    private $whitelistedFiles = [];

    /**
     * Remembers the result of the `is_file()` calls.
     *
     * @var bool[]
     */
    private $isFileCallsCache = [];

    /**
     * Adds a directory to the whitelist (recursively).
     *
     * @param string $directory
     * @param string $suffix
     * @param string $prefix
     */
    public function addDirectoryToWhitelist($directory, $suffix = '.php', $prefix = '')
    {
        $facade = new \File_Iterator_Facade;
        $files  = $facade->getFilesAsArray($directory, $suffix, $prefix);

        foreach ($files as $file) {
            $this->addFileToWhitelist($file);
        }
    }

    /**
     * Adds a file to the whitelist.
     *
     * @param string $filename
     */
    public function addFileToWhitelist($filename)
    {
        $this->whitelistedFiles[\realpath($filename)] = true;
    }

    /**
     * Adds files to the whitelist.
     *
     * @param array $files
     */
    public function addFilesToWhitelist(array $files)
    {
        foreach ($files as $file) {
            $this->addFileToWhitelist($file);
        }
    }

    /**
     * Removes a directory from the whitelist (recursively).
     *
     * @param string $directory
     * @param string $suffix
     * @param string $prefix
     */
    public function removeDirectoryFromWhitelist($directory, $suffix = '.php', $prefix = '')
    {
        $facade = new \File_Iterator_Facade;
        $files  = $facade->getFilesAsArray($directory, $suffix, $prefix);

        foreach ($files as $file) {
            $this->removeFileFromWhitelist($file);
        }
    }

    /**
     * Removes a file from the whitelist.
     *
     * @param string $filename
     */
    public function removeFileFromWhitelist($filename)
    {
        $filename = \realpath($filename);

        unset($this->whitelistedFiles[$filename]);
    }

    /**
     * Checks whether a filename is a real filename.
     *
     * @param string $filename
     *
     * @return bool
     */
    public function isFile($filename)
    {
<<<<<<< HEAD
        if ($filename == '-' ||
=======
        if (isset($this->isFileCallsCache[$filename])) {
            return $this->isFileCallsCache[$filename];
        }

        if ($filename === '-' ||
>>>>>>> 73afd074c7d7331c5955fbcccf9425080eb84f34
            \strpos($filename, 'vfs://') === 0 ||
            \strpos($filename, 'xdebug://debug-eval') !== false ||
            \strpos($filename, 'eval()\'d code') !== false ||
            \strpos($filename, 'runtime-created function') !== false ||
            \strpos($filename, 'runkit created function') !== false ||
            \strpos($filename, 'assert code') !== false ||
            \strpos($filename, 'regexp code') !== false ||
            \strpos($filename, 'Standard input code') !== false) {
            $isFile = false;
        } else {
            $isFile = \file_exists($filename);
        }

        $this->isFileCallsCache[$filename] = $isFile;

        return $isFile;
    }

    /**
     * Checks whether or not a file is filtered.
     *
     * @param string $filename
     *
     * @return bool
     */
    public function isFiltered($filename)
    {
        if (!$this->isFile($filename)) {
            return true;
        }

        return !isset($this->whitelistedFiles[$filename]);
    }

    /**
     * Returns the list of whitelisted files.
     *
     * @return array
     */
    public function getWhitelist()
    {
        return \array_keys($this->whitelistedFiles);
    }

    /**
     * Returns whether this filter has a whitelist.
     *
     * @return bool
     */
    public function hasWhitelist()
    {
        return !empty($this->whitelistedFiles);
    }

    /**
     * Returns the whitelisted files.
     *
     * @return array
     */
    public function getWhitelistedFiles()
    {
        return $this->whitelistedFiles;
    }

    /**
     * Sets the whitelisted files.
     *
     * @param array $whitelistedFiles
     */
    public function setWhitelistedFiles($whitelistedFiles)
    {
        $this->whitelistedFiles = $whitelistedFiles;
    }
}
