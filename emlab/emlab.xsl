<?xml version="1.0" encoding="UTF-8"?>

<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
  <body style="font-family:Times New Roman;font-size:12pt;background-color:#EEEEEE">
    <xsl:for-each select="KAYIT/Ogrenci">
		<table style="text-align: left;" border="1" width="4000" cellpadding="10" cellspacing="1">
			<tbody>
				<tr>
					<td style="width:100px;"><xsl:value-of select="Numara"/></td>
					<td style="width:300px;"><xsl:value-of select="AdSoyad"/></td>
					<td style="width:400px;"><xsl:value-of select="EPosta"/></td>
					<td style="width:100px;"><xsl:value-of select="Tercih"/></td>
					<td style="width:3000px;"><xsl:value-of select="Metin"/></td>
				</tr>
			</tbody>
		</table>
    </xsl:for-each>
  </body>
</html>
