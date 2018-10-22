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
 * Exception that is raised when code is unintentionally covered.
 */
class UnintentionallyCoveredCodeException extends RuntimeException
{
    /**
     * @var array
     */
    private $unintentionallyCoveredUnits = [];

    public function __construct(array $unintentionallyCoveredUnits)
    {
        $this->unintentionallyCoveredUnits = $unintentionallyCoveredUnits;

        parent::__construct($this->toString());
    }

<<<<<<< HEAD
    /**
     * @return array
     */
    public function getUnintentionallyCoveredUnits()
=======
    public function getUnintentionallyCoveredUnits(): array
>>>>>>> 73afd074c7d7331c5955fbcccf9425080eb84f34
    {
        return $this->unintentionallyCoveredUnits;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    private function toString()
=======
    private function toString(): string
>>>>>>> 73afd074c7d7331c5955fbcccf9425080eb84f34
    {
        $message = '';

        foreach ($this->unintentionallyCoveredUnits as $unit) {
            $message .= '- ' . $unit . "\n";
        }

        return $message;
    }
}
