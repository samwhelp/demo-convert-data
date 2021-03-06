#!/usr/bin/env node

var map = {
	"apple": "蘋果",
	"banana": "香蕉",
	"cherry": "櫻桃"
};


// comprehension
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration#for...of_statement
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/statements/for...of
for (var item of map) {
	console.log(item);
}

//這裡應該會顯示錯誤
//TypeError: map[Symbol.iterator] is not a function」
