<?php
class ReservationDataBase {
    /** @var string $dbhost odpowiada za przechowanie hosta aplikacji(w moim przypadku hosting lokalny) */
    public $dbhost = "localhost";
    /** @var string $dbuser odpowiada za przechowanie nazwy użytkownika z phpMyAdmin */
    public $dbuser = "root";
    /** @var string $dbpass przechowuje jego haslo */
    public  $dbpass = "";
    /** @var string $db przechowuje konkretną bazę danych */
    public  $db = "rezerwacje";

    /** 
     * Łączy się z bazą i tworzę plik .txt zawierający wszystkie aktualnie znajdujące się produkty w bazie.
     * 
    */
    /**
    * Nastepnie za pomocą biblioteki zlib tworzę nowe archiwum pliku .zip do którego dodaję wcześniej utworzony plik tekstowy.
    *Archiwum to będzie dostępne do pobrania przez administratora
    */

    public function KonradCallendar()
    {
     $connection = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->db) or die("Connect failed: %s\n". $connection -> error);
     
     $model_sql="SELECT GROUP_CONCAT(rezerwacja SEPARATOR ', ') FROM konrad ";
     
      $result = mysqli_query($connection,$model_sql);
      
      $file = "SKI_PASS_ASORTYMENT.txt"; 
      $fp = fopen($file, "w");
             
 while ($row = mysqli_fetch_assoc($result)) {
     foreach ($row as $field => $value) { 
         echo($value); 
     }
     
 }
 $connection->close();
    }

    public function BartekCallendar()
    {
     $connection = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->db) or die("Connect failed: %s\n". $connection -> error);
     
     $model_sql="SELECT GROUP_CONCAT(rezerwacja SEPARATOR ', ') FROM bartek ";
     
      $result = mysqli_query($connection,$model_sql);
      
      $file = "SKI_PASS_ASORTYMENT.txt"; 
      $fp = fopen($file, "w");
             
 while ($row = mysqli_fetch_assoc($result)) {
     foreach ($row as $field => $value) { 
         echo($value); 
     }
     
 }
 $connection->close();
    }
    public function AddNewTermin($Dateu,$Name)
    {
     $connection = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->db) or die("Connect failed: %s\n". $connection -> error);
     $zaj = "`$Name`";
     $dt = "'{
        title: $zaj,
        date: new Date().setDate(new Date($Dateu).getDate()), 
      }'";
     $model_sql="INSERT INTO konrad (id,rezerwacja)
     VALUES (NULL,$dt)";
     
      $result = mysqli_query($connection,$model_sql);
 $connection->close();
    }


    
}

?>
