<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table>
  <tr>
    <td class="head" >S No</td>
    <td class="head">Mark</td>
    <td class="head">Mark 1</td>
  </tr>
  
  <?php 
   
$conn=mysql_connect('localhost','root','');
$db=mysql_select_db('2my4edge',$conn);
  $table=mysql_query('SELECT * FROM `add`');
  while($row=mysql_fetch_array($table))
  {
      $number=$row['id'];
      $smark=$row['mark'];
      $smark1=$row['mark1'];
  ?>
  <tr>
    <td class="sno"><?php echo $number ?></td>
    <td class="mark"><?php echo $smark ?></td>
    <td class="mark"><?php echo $smark1 ?></td>
  </tr>
  <?php } ?>
  
  <?php 
  $add=mysql_query('SELECT SUM(mark),SUM(mark1) from `add`');
  while($row1=mysql_fetch_array($add))
  {
    $mark=$row1['SUM(mark)'];
    $mark1=$row1['SUM(mark1)'];  
 ?>
  <tr>
    <td class="foot">Total</td>
    <td class="foot"><?php echo $mark ?></td>
    <td class="foot"><?php echo $mark1 ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>