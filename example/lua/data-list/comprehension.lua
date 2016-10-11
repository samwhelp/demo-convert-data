#!/usr/bin/env lua

local list = {
	"apple",
	"banana",
	"cherry"
}


for num, val in pairs(list) do
	print(num, val)
end

--[[
for num, val in ipairs(list) do
	print(num, val)
end
--]]
