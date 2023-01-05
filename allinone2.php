<html>
    <body>
        <center>
            <?php if(!isset($_GET['submit']))
            {
                ?>
            <form action="#" method="GET">
                Company name:<input type="text" name="cname"/><br>
                Branch:<input type="text" name="branch"/><br>
                name:<input type="text" name="name"/><br>
                emp code:<input type="number" name="code"/><br>
                salary:<input type="number" name="salary"/><br>
                Project name:<input type="text" name="pname"/><br>
                Technology:<input type="text" name="tech"/><br>
                <input type="submit" name="submit" value="submit">
            </form>   
            <?php }?>
    </body>
</html>
<?php 
if(isset($_GET['submit']))
{

interface Project
{
    public function project($project_name,$technology);
}
abstract class Office
{
    protected $office_name,$branch;
    abstract function cmp_intro();
    abstract function emp_intro();
    
    public function start()
    {
        echo "Welcome To our Company";
    }
}
class Employee extends office implements Project
{
    public $emp_name,$emp_code,$salary,$pname,$tech;
    function __construct($office_name,$branch,$emp_name,$emp_code,$salary,$pname,$tech)
    {
        $this->office_name=$office_name;
        $this->branch=$branch;
        $this->emp_name=$emp_name;
        $this->emp_code=$emp_code;
        $this->salary=$salary;
        $this->pname=$pname;
        $this->tech=$tech;
    }
    function cmp_intro()
    {
        echo "
        <hr>
        <br>
        Company Name= $this->office_name<br>
        Branch= $this->branch<br>
        <hr>
        ";
    }
    function emp_intro()
    {
        echo "
        <hr>
        <br>
        Employee Name= $this->emp_name<br>
        Employee Code= $this->emp_code<br>
        Employee Salary= $this->salary<br>
        <hr>
        ";
    }
    function project($project_name,$technology)
    {
        echo "
        <hr>
        <br>
        Your Project Name= $this->pname<br>
        Project Technology = $this->tech<br>
        <hr>
        ";
    }
    public function start()
    {
        parent::start();
        Employee::cmp_intro();
        Employee::project($this->pname,$this->tech);
        Employee::emp_intro();
    }
    function __destruct()
    {
        echo "thank You";
    }
} 
$company_name=$_GET['cname'];
$branch=$_GET['branch'];
$name=$_GET['name'];
$code=$_GET['code'];
$salary=$_GET['salary'];
$pname=$_GET['pname'];
$tech=$_GET['tech'];
$e=new Employee($company_name,$branch,$name,$code,$salary,$pname,$tech);
$e->start();
}
?>