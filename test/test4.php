<?php 
header("Content-type:text/html;charset=utf-8");
?>
<html> 
<head> 
<title>CSS控制表格表头固定</title> 
<style type="text/css"> 
div.tableContainer { 
clear: both; 
border-collapse: collapse; 
border: 2px solid #009933; 
height: 100px;
overflow: auto; 
width: 1024px; 
} 
div.tableContainer table { 
float: left; 
width: 100%; 
border-collapse: collapse; 
empty-cells: hide; 
} 
thead.fixedHeader tr { 
position: relative; 
top: expression(document.getElementById("tableContainer").scrollTop); 
} 
thead.fixedHeader th { 
background: #009933; 
border-left: 1px solid #d2f1ac; 
border-right: 1px solid #d2f1ac; 
border-top: 1px solid #d2f1ac; 
border-bottom: 1px solid #d2f1ac; 
font-weight: normal; 
padding: 4px 3px; 
text-align: center; 
} 
tbody.scrollContent td, tbody.scrollContent tr td { 
border-bottom: 1px solid #d2f1ac; 
border-left: 1px solid #d2f1ac; 
border-right: 1px solid #d2f1ac; 
border-top: 1px solid #d2f1ac; 
padding: 2px 3px; 
} 
</style> 
</head> 
<body> 
<div id="tableContainer" class="tableContainer"> 
<table> 
<thead class="fixedHeader"> 
<tr> 
<th colspan="5">测试效果</th> 
</tr> 
<tr> 
<th>表头第一列</th> 
<th>表头第二列</th> 
<th>表头第三列</th> 
<th>表头第四列</th> 
<th>表头第五列</th> 
</tr> 
</thead> 
<tbody class="scrollContent"> 
<tr> 
<td>第一行第一列</td> 
<td>第一行第二列</td> 
<td>第一行第三列</td> 
<td>第一行第四列</td> 
<td>第一行第五列</td> 
</tr> 
<tr> 
<td>第二行第一列</td> 
<td>第二行第二列</td> 
<td>第二行第三列</td> 
<td>第二行第四列</td> 
<td>第二行第五列</td> 
</tr> 
<tr> 
<td>第三行第一列</td> 
<td>第三行第二列</td> 
<td>第三行第三列</td> 
<td>第三行第四列</td> 
<td>第三行第五列</td> 
</tr> 
<tr> 
<td>第四行第一列</td> 
<td>第四行第二列</td> 
<td>第四行第三列</td> 
<td>第四行第四列</td> 
<td>第四行第五列</td> 
</tr> 
<tr> 
<td>第五行第一列</td> 
<td>第五行第二列</td> 
<td>第五行第三列</td> 
<td>第五行第四列</td> 
<td>第五行第五列</td> 
</tr> 
<tr> 
<td>第六行第一列</td> 
<td>第六行第二列</td> 
<td>第六行第三列</td> 
<td>第六行第四列</td> 
<td>第六行第五列</td> 
</tr> 
<tr> 
<td>第七行第一列</td> 
<td>第七行第二列</td> 
<td>第七行第三列</td> 
<td>第七行第四列</td> 
<td>第七行第五列</td> 
</tr> 
<tr> 
<td>第七行第一列</td> 
<td>第七行第二列</td> 
<td>第七行第三列</td> 
<td>第七行第四列</td> 
<td>第七行第五列</td> 
</tr> 
<tr> 
<td>第七行第一列</td> 
<td>第七行第二列</td> 
<td>第七行第三列</td> 
<td>第七行第四列</td> 
<td>第七行第五列</td> 
</tr> 
<tr> 
<td>第七行第一列</td> 
<td>第七行第二列</td> 
<td>第七行第三列</td> 
<td>第七行第四列</td> 
<td>第七行第五列</td> 
</tr> 
<tr> 
<td>第七行第一列</td> 
<td>第七行第二列</td> 
<td>第七行第三列</td> 
<td>第七行第四列</td> 
<td>第七行第五列</td> 
</tr> 
<tr> 
<td>第八行第一列</td> 
<td>第八行第二列</td> 
<td>第八行第三列</td> 
<td>第八行第四列</td> 
<td>第八行第五列</td> 
</tr> 
</tbody> 
</table> 
</div> 
</body> 
</html> 