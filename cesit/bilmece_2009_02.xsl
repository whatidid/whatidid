<?xml version="1.0" encoding="Windows-1254" ?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<body style="font-family:Times New Roman;font-size:12pt;">
  <xsl:for-each select="CEVAPLAR/CEVAP">
    <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber1" width="1000">
      <tr>
        <td width="170"><xsl:value-of select="Zaman"/></td>
        <td width="30"><xsl:value-of select="Dogruluk"/></td>
        <td width="800"><xsl:value-of select="Metin"/></td>
      </tr>
    </table>
  </xsl:for-each>
</body>
</html>
