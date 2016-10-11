#!/usr/bin/env node

var map = {
	"apple": "蘋果",
	"banana": "香蕉",
	"cherry": "櫻桃"
};

// set
map["apple"] = "這是蘋果";
map["banana"] = "這是香蕉";
map["cherry"] = "這是櫻桃";

console.log(map["apple"]);
console.log(map["banana"]);
console.log(map["cherry"]);
