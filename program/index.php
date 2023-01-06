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
 
?>