#!/usr/bin/env node

var map = {
	"apple": "蘋果",
	"banana": "香蕉",
	"cherry": "櫻桃"
};


// comprehension
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration#for...in_statement\
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/statements/for...in
for (var key in map) {
	var item = map[key];
	console.log(key + ' - ' + item);
}
