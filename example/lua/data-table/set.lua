#!/usr/bin/env lua

--[[
local table = {
	{
		["en_US"] = "apple",
		["zh_TW"] = "蘋果"
	},
	{
		["en_US"] = "banana",
		["zh_TW"] = "香蕉"
	},
	{
		["en_US"] = "cherry",
		["zh_TW"] = "櫻桃"
	}
}
--]]


local table = {
	{
		en_US = "apple",
		zh_TW = "蘋果"
	},
	{
		en_US = "banana",
		zh_TW = "香蕉"
	},
	{
		en_US = "cherry",
		zh_TW = "櫻桃"
	}
}

-- set
table[1]["en_US"] = "This is apple."
table[1]["zh_TW"] = "這是蘋果。"
table[2]["en_US"] = "This is banana."
table[2]["zh_TW"] = "這是香蕉。"
table[3]["en_US"] = "This is cherry."
table[3]["zh_TW"] = "這是櫻桃。"

-- get
print(table[1]["en_US"])
print(table[1]["zh_TW"])
print(table[2]["en_US"])
print(table[2]["zh_TW"])
print(table[3]["en_US"])
print(table[3]["zh_TW"])
