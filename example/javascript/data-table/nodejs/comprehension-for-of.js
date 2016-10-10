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

// comprehension
for (var row of table) {
	console.log(row['en_US'] + ' - ' + row['zh_TW']);
	//console.log(row.en_US + ' - ' + row.zh_TW); // 也可以這樣寫。
}
