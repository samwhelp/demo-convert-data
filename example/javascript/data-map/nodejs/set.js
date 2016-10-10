#!/usr/bin/env node

var map = {
	"apple": "蘋果",
	"banana": "香蕉",
	"cherry": "櫻桃"
};

// set
map["apple"] = 'This is apple.';
map["banana"] = 'This is banana.';
map["cherry"] = 'This is cherry.';

console.log(map["apple"]);
console.log(map["banana"]);
console.log(map["cherry"]);
