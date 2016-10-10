#!/usr/bin/env node

var map = {
	"apple": "蘋果",
	"banana": "香蕉",
	"cherry": "櫻桃"
};


// comprehension
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/keys

//寫法一
var keys = Object.keys(map);
for (var i in keys) {
	var key = keys[i];
	var item = map[key];
	console.log(key + ' - ' + item);
}

/*
//寫法二
var keys = Object.keys(map);
var len = keys.length;
for (var i=0; i<len; i++) {
	var key = keys[i];
	var item = map[key];
	console.log(key + ' - ' + item);
}
*/

/*
//寫法三
var keys = Object.keys(map);
keys.forEach(function(val, i, array) {
	var key = keys[i];
	var item = map[key];
	console.log(key + ' - ' + item);
});
*/
