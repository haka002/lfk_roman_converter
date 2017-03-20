<?php

namespace RomanNumberConverter\Model;

use InvalidArgumentException;
use RomanNumberConverter\Builder\RomanNumberBuilder;
use RomanNumberConverter\Container\RomanNumberContainer;
use RomanNumberConverter\Entity\RomanGreatness;

class RomanNumberConverter
{
	const HIGHEST_NUMBER = 3999;

	/**
	 * @var RomanNumberBuilder
	 */
	private $romanNumberBuilder;

	/**
	 * @var RomanNumberContainer
	 */
	private $romanNumberContainer;

	/**
	 * RomanNumberConverter constructor.
	 *
	 * @param RomanNumberBuilder   $romanNumberBuilder
	 * @param RomanNumberContainer $romainNumberContainer
	 */
	public function __construct(
		RomanNumberBuilder $romanNumberBuilder,
		RomanNumberContainer $romainNumberContainer
	) {
		$this->romanNumberBuilder   = $romanNumberBuilder;
		$this->romanNumberContainer = $romainNumberContainer;
	}

	/**
	 * @param int $number
	 *
	 * @return string
	 *
	 * @throw InvalidArgumentException
	 */
	public function convert($number)
	{
		if (
			empty($number)
			|| !is_int($number)
			|| $number > static::HIGHEST_NUMBER
			|| $number < 0
		) {
			throw new InvalidArgumentException('Please try with a number between 1 and 3999.');
		}

		for ($i = 0; $i < strlen($number); $i++)
		{
			$partNumber         = substr($number, $i);
			$currentFirstNumber = $partNumber[0];

			if ($currentFirstNumber != 0)
			{
				$greatness = new RomanGreatness(strlen($partNumber));

				$this->romanNumberContainer->add(
					$this->romanNumberBuilder->create(
						$currentFirstNumber,
						$greatness
					)
				);
			}
		}

		return (string)$this->romanNumberContainer;
	}
}
