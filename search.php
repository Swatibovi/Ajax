<?php
$con=new mysqli("localhost","root","");
$db=mysqli_select_db($con,"countries");
if(isset($_POST["query"]))
{
$q="SELECT cntry from country WHERE cntry LIKE '%".$_POST["query"]."%'";
$res=mysqli_query($con,$q);
$output='<ul class="list-unstyled">';
while($row=mysqli_fetch_array($res))
{
$output.='<li>'.$row["cntry"].'</li>';
}
$output.='</ul>';
echo $output;
}
//mysqli_close($con);
?>