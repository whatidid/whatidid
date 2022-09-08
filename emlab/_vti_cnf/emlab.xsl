<?xml version="1.0" encoding="ISO-8859-1" ?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<body style="font-family:Times New Roman;font-size:12pt;noscroll:false;background-color:#EEEEEE">
  <xsl:for-each select="KAYIT/Ogrenci">
    <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber1">
      <tr>
        <td width="80">'<xsl:value-of select="Numara"/></td>
        <td width="230"><xsl:value-of select="AdSoyad"/></td>
        <td width="270"><xsl:value-of select="EPosta"/></td>
        <td width="30"></td>
        <td width="30"></td>
        <td width="30"></td>
        <td width="30"></td>
        <td width="80"> <xsl:value-of select="Tercih"/></td>
        <td width="500"><xsl:value-of select="Metin"/></td>
      </tr>
    </table>
  </xsl:for-each>
</body>
</html>
