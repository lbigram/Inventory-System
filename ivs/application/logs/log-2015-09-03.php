<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-09-03 15:52:33 --> Severity: Error --> Call to undefined method CategoryDAO::hasMoreCategories() C:\xampp\htdocs\ivs\application\views\inventory\pdfformat.php 41
ERROR - 2015-09-03 15:53:13 --> Severity: Warning --> require_once(C:/xampp/htdocs/ivs/system/helpers/dompdf/lib/php-font-lib/classes/Font.php): failed to open stream: No such file or directory C:\xampp\htdocs\ivs\system\helpers\dompdf\dompdf_config.inc.php 332
ERROR - 2015-09-03 15:53:13 --> Severity: Compile Error --> require_once(): Failed opening required 'C:/xampp/htdocs/ivs/system/helpers/dompdf/lib/php-font-lib/classes/Font.php' (include_path='.;C:\xampp\php\PEAR') C:\xampp\htdocs\ivs\system\helpers\dompdf\dompdf_config.inc.php 332
ERROR - 2015-09-03 19:05:13 --> Query error: Table 'ivs.pages' doesn't exist - Invalid query: SELECT  a.PAGEID, a.NAME, a.URL, a.RENDERNAME  FROM Pages a, Permissions b where b.pageid=a.pageid and b.roleid=2 order by a.ordering 
ERROR - 2015-09-03 19:05:19 --> Query error: Table 'ivs.pages' doesn't exist - Invalid query: SELECT  a.PAGEID, a.NAME, a.URL, a.RENDERNAME  FROM Pages a, Permissions b where b.pageid=a.pageid and b.roleid=2 order by a.ordering 
ERROR - 2015-09-03 19:08:06 --> Query error: Table 'ivs.zcore_ermissions' doesn't exist - Invalid query: SELECT  a.PAGEID, a.NAME, a.URL, a.RENDERNAME  FROM zcore_pages a, zcore_ermissions b where b.pageid=a.pageid and b.roleid=2 order by a.ordering 
ERROR - 2015-09-03 19:58:16 --> Query error: Table 'ivs.unit' doesn't exist - Invalid query: SELECT INVENTORYID, INVENTORY.NAME, UNITNAME, SITE FROM INVENTORY, UNIT WHERE INVENTORY.UNITID=UNIT.UNITID and UNIT.SITE=1 AND INVENTORY.STATUS="AVAILABLE" 
ERROR - 2015-09-03 20:04:19 --> Query error: Table 'ivs.unit' doesn't exist - Invalid query: SELECT INVENTORYID, INVENTORY.NAME, UNITNAME, SITE FROM INVENTORY, UNIT WHERE INVENTORY.UNITID=UNIT.UNITID and UNIT.SITE=1 AND INVENTORY.STATUS="AVAILABLE" 