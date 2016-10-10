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


var len = table.length;

// comprehension
for (var i=0; i<len; i++) {
	var row = table[i];
	console.log(i + ' - ' + row['en_US'] + ' - ' + row['zh_TW']);
	//console.log(i + ' - ' + row.en_US + ' - ' + row.zh_TW); // 也可以這樣寫。
}
