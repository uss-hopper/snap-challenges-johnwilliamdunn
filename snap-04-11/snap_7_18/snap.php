<?php
/**
* convert a weight to grams
**/

function(convertToGrams, weight, units); {
	if(units==="1b") {
		return weight * .0625;
	}else if(units==='oz'){
		return weight * .0625;
	}else if (units==='kg'){
		return weight * 35.274
	}else if (units==='mg')
		return weigth/3.5274
}
