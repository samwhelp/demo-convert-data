<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<head>
<meta charset="utf-8" />
<title>中英文對照表</title>
<link rel="stylesheet" href="demo.css" />
</head>
<body>
<ul class="list">
<xsl:for-each select="list/item">
	<li class="item">
		<span class="col en-us"><xsl:value-of select="en_us"/></span>
		<span class="col zh-tw"><xsl:value-of select="zh_tw"/></span>
	</li>
</xsl:for-each>
</ul>
</body>
</html>
