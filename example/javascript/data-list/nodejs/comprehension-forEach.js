#!/usr/bin/env node

var list = [
	"apple",
	"banana",
	"cherry"
];

// comprehension
list.forEach(function(val, i, array) {
	var item = list[i];
	console.log(i + ' - ' + item);
	//console.log(array);
});
