<?
header( "Content-type: application/vnd.ms-excel" ); 
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = 'member.xls'" ); 
header( "Content-Description: PHP4 Generated Data" );
?>

 
<?
$sql = "select * from ���̺�� order by num desc";
$result = mysql_query($sql); // sql�� ������ ������ result�� ��´�.

$EXCEL_STR = "
<table border='1'>
<tr>
   <td>�̸�</td>
   <td>����</td>
   <td>����</td>
   <td>�̸���</td>
   <td>����</td>
</tr>";
//���� talbe�� �ڽ��� ������ ������ �÷� ���� �ǰڴ�.
while($row = mysql_fetch_array($result)) {
   $EXCEL_STR .= "
   <tr>
   <td>".$_POST['username']."</td>
   <td>".$_POST['age']."</td>
   <td>".$_POST['sex']."</td>
   <td>".$_POST['email']."</td>
   <td>".$_POST['favorit']."</td>
   </tr>
   ";
}
$EXCEL_STR .= "</table>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=euc-kr'> ";
echo $EXCEL_STR;
?>