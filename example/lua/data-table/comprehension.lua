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

for num, row in pairs(table) do
	print(num, row["en_US"], row["zh_TW"])
end
