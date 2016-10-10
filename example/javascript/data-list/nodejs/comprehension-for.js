#!/usr/bin/env node

var list = [
	"apple",
	"banana",
	"cherry"
];

var len = list.length;

// comprehension
for (var i=0; i<len; i++) {
	var item = list[i];
	console.log(i + ' - ' + item);
}
