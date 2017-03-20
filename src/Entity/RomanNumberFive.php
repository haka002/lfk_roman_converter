<?php

namespace RomanNumberConverter\Entity;

class RomanNumberFive extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getBigLetter();
	}
}
