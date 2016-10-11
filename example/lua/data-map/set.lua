#!/usr/bin/env lua

--[[
local map = {
	["apple"] = "蘋果",
	["banana"] = "香蕉",
	["cherry"] = "櫻桃"
}
--]]


local map = {
	apple = "蘋果",
	banana = "香蕉",
	cherry = "櫻桃"
}

-- set
map["apple"] = "這是蘋果。"
map["banana"] = "這是香蕉。"
map["cherry"] = "這是櫻桃。"

print(map["apple"])
print(map["banana"])
print(map["cherry"])
