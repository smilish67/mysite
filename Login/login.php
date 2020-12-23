<?
header( "Content-type: application/vnd.ms-excel" ); 
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = 'member.xls'" ); 
header( "Content-Description: PHP4 Generated Data" );
?>

 
<?
$sql = "select * from 테이블명 order by num desc";
$result = mysql_query($sql); // sql에 가져온 정보를 result에 담는다.

$EXCEL_STR = "
<table border='1'>
<tr>
   <td>이름</td>
   <td>생일</td>
   <td>성별</td>
   <td>이메일</td>
   <td>게임</td>
</tr>";
//위에 talbe은 자신이 가져올 값들의 컬럼 명이 되겠다.
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