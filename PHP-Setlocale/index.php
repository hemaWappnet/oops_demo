<form name="langSelect" action="" method="get" >
     <select name="langID" id="langID" >
         <option>Select Language</option>
         <option value="arab">Arabic</option>
         <option value="zh">Chinese</option>
         <option value="en">English</option>
         <option value="es">Spanish</option>
    </select>
    <br/><br/>
    <button type="submit">Submit</button>
</form>

<?php 

 if (!isset($_GET['langID']))
   $lang = 'en';
 else
   $lang = $_GET['langID'];

 include('locale/'. $lang . '.php');
 echo $langArray['welcome'];
 

if ($lang === 'en'){
  setlocale(LC_ALL,"en_US");
}elseif ($lang === 'es'){
  setlocale(LC_ALL,"es_CO");
}elseif( $lang === 'arab'){
  setlocale(LC_ALL,"ar_EG");
}else{
  setlocale(LC_ALL,"zh_CN");
}

setlocale(LC_ALL,"en_US"); 
echo "<br>The time in US is ";
echo(strftime("%m/ %d/ %Y   , %X "));
 
echo ("<br/>");
 
setlocale(LC_MONETARY,"en_US"); 
$loc=localeconv(); 
print_r($loc);

$number = 12000;
 
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number)    
// setlocale(LC_ALL,"zh_CN"); 
// echo "The time in China is ";
// echo(strftime("%m/ %d/ %Y   , %X "));

?>