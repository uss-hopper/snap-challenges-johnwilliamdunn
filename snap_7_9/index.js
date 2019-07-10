
function operation (num1, num2) {
	return num1 / num2;
}


let opera = operation(3,6)
console.log(opera)

console.log(operation(3,6))

console.log(operation(7,3))
console.log(operation(3,7))
console.log(operation(750,3))

let punk = operation(7,3);
let jazz = operation(3,7);
let ska = operation(750,3);

console.log(punk, ska, jazz);

// this function concatenates two strings
function concatenateTwoStrings (string1, string2) {
	return string1 + " " + string2;
}
console.log(concatenateTwoStrings('thingOne', 'thingTwo'));