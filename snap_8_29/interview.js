function removeVowels (string myString) {
	let filteredString = '';
	const vowels = ['a', 'e', 'i', 'o', 'u'];

// Iterate through the string.  This can be accomplished through
// library functions in most languages, or by converting the
// string to an array.
	foreach (letter in myString) {

// If the current letter is not in the vowels array, add it
// to our return string.
		if (vowels.includes(letter)) {
			filteredString = filteredString + letter;
		}
	}
	return filteredString;
}
2.

function findGreatestNumber(array myNumbers) {

// Set our number to be returned to an initial nonvalid value.
	let greatestNumber = 'NaN';

// Iterate through the array and compare each number against the
// previously known greatest number.
	foreach (myNumber in myNumbers) {
		if (greatestNumber == 'NaN' || myNumber > greatestNumber) {
			greatestNumber = myNumber;
		}
	}

	return greatestNumber;
}
3.

function fibonacciHundred () {
	let fibonacciArray = [1, 1];
	let previousNumber = 1;
	let thisNumber = 1;

// We start this counter at three because we already have the
// first two numbers in the sequence.
	for (i=3, i<=100; i++) {

// Add together the previous numbers and store them in the
// array.
		nextNumber = previousNumber + thisNumber;
		fibonacciArray[] = nextNumber;

// Reset our numbers to the last two known numbers.
		previousNumber = thisNumber;
		thisNumber = nextNumber;
	}
}

foreach letter in an array check if includes aeiou, filter string return letters not including aeiou

foreach number compare each number to the previous number to see which is greater, return greatest number in array


