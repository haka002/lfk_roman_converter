<?php

namespace RomanNumberConverter\Entity;

class RomanNumberSeven extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getBigLetter() . $this->greatness->getSmallLetter() . $this->greatness->getSmallLetter();
	}
}
