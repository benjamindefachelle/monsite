<?php
function identification_cookie() {

if (isset ($_COOKIE['sid']))
{
$mavariablecookie=$_COOKIE['sid'];

$sql=mysql_query ("SELECT count(*) as total FROM utilisateur WHERE sid='$mavariablecookie'");
$data=mysql_fetch_array($sql);

if($data['total'])
{
return true;

}

else

{
return false;
}

}
else

{
return  false;
}


}

?>