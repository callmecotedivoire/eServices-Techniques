<?php
session_start();
include('../config/db_config.php');
include('../classes/mod_count_visit.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<title>Carte Jeune - Acheter sa carte Jeune</title>
</head>

<body>
<table width="693" height="550" border="0" align="center" cellspacing="00">
  <tr>
    <td width="691" background="../media/img/bg.png"><table width="688" height="432" border="0" cellspacing="0">
        <tr>
          <td width="113" height="127">&nbsp;</td>
          <td width="526">&nbsp;</td>
          <td width="43">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="251">&nbsp;</td>
          <td align="center" valign="middle"><table width="200" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3" align="center"><p><a href="../veriflogin.php?userinit_SESSION=<?php echo $_SESSION['token']; ?>"> Commencer</a></p>
                <p>&nbsp;</p></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="33">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
