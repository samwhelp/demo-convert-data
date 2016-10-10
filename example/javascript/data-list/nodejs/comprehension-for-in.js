#!/usr/bin/env node

var list = [
	"apple",
	"banana",
	"cherry"
];

// comprehension
for (var i in list) {
	var item = list[i];
	console.log(i + ' - ' + item);
}
