<?php

namespace RomanNumberConverter\Builder;

use InvalidArgumentException;
use RomanNumberConverter\Entity\RomanGreatness;
use RomanNumberConverter\Entity\RomanNumberAbstract;
use RomanNumberConverter\Entity\RomanNumberEight;
use RomanNumberConverter\Entity\RomanNumberFive;
use RomanNumberConverter\Entity\RomanNumberFour;
use RomanNumberConverter\Entity\RomanNumberNine;
use RomanNumberConverter\Entity\RomanNumberOne;
use RomanNumberConverter\Entity\RomanNumberSeven;
use RomanNumberConverter\Entity\RomanNumberSix;
use RomanNumberConverter\Entity\RomanNumberThree;
use RomanNumberConverter\Entity\RomanNumberTwo;

class RomanNumberBuilder
{
	/**
	 * @param int            $number
	 * @param RomanGreatness $greatness
	 *
	 * @return RomanNumberAbstract
	 */
	public function create($number, RomanGreatness $greatness)
	{
		switch ($number)
		{
			case 1:
				return new RomanNumberOne($greatness);
				break;

			case 2:
				return new RomanNumberTwo($greatness);
				break;

			case 3:
				return new RomanNumberThree($greatness);

			case 4:
				return new RomanNumberFour($greatness);
				break;

			case 5:
				return new RomanNumberFive($greatness);
				break;

			case 6:
				return new RomanNumberSix($greatness);
				break;

			case 7:
				return new RomanNumberSeven($greatness);
				break;

			case 8:
				return new RomanNumberEight($greatness);
				break;

			case 9:
				return new RomanNumberNine($greatness);
				break;

			default:
				throw new InvalidArgumentException(sprintf('Invalid number for roman number creation: %s', $number));
				break;
		}
	}


}
