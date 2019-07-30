<?php

	class Tweet implements \JsonSerializable {

			use ValidateDate;

	/**
	 * date and time this tweet was sent, in PHP dateTime object
	 * @var \DateTime $tweetDate
	**/
	private $tweetDate;

	/**
	 * @param \DateTime |string|null $newTweetDate date and time Tweet was sent or null if set to current date and time
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (strings too long or negative integers)
	**/

	/**
	 * accessor method for tweet date
	 *
	 * @return \DateTime value of the tweet date
	 *
	 **/
	public function getTweetDate() : \DateTime {
				return($this->tweetDate);

	}

	/**
	 * mutator method for tweet date
	 *
	 * @parem \DateTime |string|null $newTweetDate tweet date as DateTime object or string (or null to load the current time)
	 * @throws \InvalidArgumentException if $newTweetDate is not a valid object or string
	 *
	 * @throws \RangeException if $newTweetDate is a date that does not exist
	 **/
public function setTweetDate($newTweetDate = null) : void {
	//base case: if the date is null, use the current date and time
	if($newTweetDate === null) : {
		$this->tweetDate = new \DateTime();
		return;
	}
	}
		//store the like date using the ValidateDate trait//
		try{
					$newTweetDate = self::validateDateTime($newTweetDate);
	} catch(\InvalidArgumentException: | \RangeException $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
}
			$this->tweetDate = $newTweetDate;


			/**
			 * formats the state variables for JSON serialization
			 *
			 * @return array resulting state variables to serialize
			 *
			 **/

			public function jsonSerialize() $this->tweetId->toString();
								$fields = get_object_vars($this);

								$fields["tweetDate"] =round(floatval($this->tweetDate->format("u.u")) * 1000)

									return($fields);
}