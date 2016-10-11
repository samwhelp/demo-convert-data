#!/usr/bin/env lua

local map = {
	["apple"] = "蘋果",
	["banana"] = "香蕉",
	["cherry"] = "櫻桃"
}

--[[
local map = {
	apple = "蘋果",
	banana = "香蕉",
	cherry = "櫻桃"
}
--]]

for key, val in pairs(map) do
	print(key, val)
end
