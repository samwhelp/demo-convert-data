#!/usr/bin/env node

var table = [
	{
		"en_US": "apple",
		"zh_TW": "蘋果",
	},

	{
		"en_US": "banana",
		"zh_TW": "香蕉",
	},

	{
		"en_US": "cherry",
		"zh_TW": "櫻桃",
	}
];

// get
console.log(table[0]['en_US']);
console.log(table[1]['en_US']);
console.log(table[2]['en_US']);

console.log(table[0]['zh_TW']);
console.log(table[1]['zh_TW']);
console.log(table[2]['zh_TW']);

console.log(table[0].en_US);
console.log(table[1].en_US);
console.log(table[2].en_US);

console.log(table[0].zh_TW);
console.log(table[1].zh_TW);
console.log(table[2].zh_TW);
