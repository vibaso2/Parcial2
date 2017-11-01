
<?php
session_start();
   
class BankAccount{

   public $balance = 200; 
   public $name='Bob';
    public $date;


    public function getName(){
        return $this->name; 
    }

    public function getDate(){
        $this->date = date("m.d.y");
            return $this->date; 
    }

    public function getBalance(){

        if(($this->balance) > 0){
            return $this -> balance;

        } else if(($this->balance) <= 0 ){
            return 'Balance is empty '; 
        }else{
            return 'error'; 
        }   
    }
     public function Capital($amount){
        $this->balance = $amount;  
    }
        public function setDeposit($amount){
        $this->balance = $this->balance + $amount;  
    }
        public function getDeposit(){

          return $this->balance;
        }


    public function Withdraw($amount){

        if(($this->balance) < $amount){
            echo 'Not enough funds to withdraw. ';

        } else{
            $this->balance = $this->balance - $amount;  
        }
    }   
}
$bank = new BankAccount;
$deposito = 0;
$retiro = 0;
$capital = 0;
if(isset($_POST['capital'])){
   $money = $_POST['capital'];
   $bank ->Capital($money);
}
if(isset($_POST['deposito'])){
   $money = $_POST['deposito'];
   $bank ->setDeposit($money);
}
if(isset($_POST['retiro'])){
   $money = $_POST['retiro'];
   $bank ->Withdraw($money);
}
echo $bank->getDeposit();

?>
<html>
<body>
<form name="Bank" method="POST" style="margin-top:25px;">

<label style="color:red;">Name: </label><?php echo $bank ->getName();   ?><br>
<label style="color:red;">Date: </label><?php echo $bank ->getDate();   ?><br>
<label style="color:red;">Balance: </label><?php echo $bank->getBalance(); ?><br>

    <label>Capital</label>
        <input type="text" name="capital" maxlength="25"><br>
        <input type="submit" value="submit" ><br> 
        
    <label>Deposito</label>
        <input type="text" name="deposito" maxlength="25"><br>
        <input type="submit" value="submit" ><br>  

    <label>Retiro</label>
        <input type="text" name="retiro" maxlength="25"><br>
        <input type="submit" value="submit" ><br>        
</form>

</body>
</html>