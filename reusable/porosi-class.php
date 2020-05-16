<?php
class porosia{
    private $userID;
    private $emri;
    private $mbiemri;
    private $kontakti;
    private $adresa;
    private $shteti;
    private $qyteti;
    private $statusi='aktive';
    private $bookId;
    private $quantity;

    public function __construct($userID,$emri,$mbiemri,$kontakti,$adresa,$shteti,$qyteti,$statusi='aktive',$quantity=1){
        $this->userID=$userID;
        $this->emri=$emri;
        $this->mbiemri=$mbiemri;
        $this->kontakti=$kontakti;
        $this->adresa=$adresa;
        $this->shteti=$shteti;
        $this->qyteti=$qyteti;
        $this->quantity=$quantity;
    }

    public function setBookId($bookId){
        $this->bookId=$bookId;
    }

    public function getBookId(){
        return $this->bookId;
    }

    public function setQuantity($quantity){
        $this->quantity=$quantity;
    }

    public function getQuantity(){
        return $this->bookId;
    }
    
    public function decrementStock($conn){
        $selectQuery='SELECT stock FROM librat WHERE bookID='.$this->bookId;
        $resultArray=mysqli_query($conn,$selectQuery);

        while($result=$resultArray->fetch_assoc()){
            $stock=$result['stock'];
        }
        
        $stock=$stock-($this->quantity);
        $decrementQuery='UPDATE librat SET stock='.$stock.' WHERE bookID='.$this->bookId;

        mysqli_query($conn,$decrementQuery);
    }

    public function createOrder($conn,$pagesa){
        $createOrderQuery=$conn->prepare('INSERT INTO porosite(userID,statusi,adresa,kontakti,emri,mbiemri,shteti,qyteti,pagesa) VALUES(?,?,?,?,?,?,?,?,?)');
        $createOrderQuery->bind_param("isssssssd",$this->userID,$this->statusi,$this->adresa,$this->kontakti,$this->emri,$this->mbiemri,$this->shteti,$this->qyteti,$pagesa);
        $createOrderQuery->execute();

        $selectIdQuery='SELECT porosiID FROM porosite ORDER BY porosiID DESC LIMIT 1';
        $results=mysqli_query($conn,$selectIdQuery);

        while($porosi=$results->fetch_assoc()){
            $porosiID=$porosi['porosiID'];
        }

        return $porosiID;
    }

    public function detailedOrder($conn,$porosiID){
        $insertQuery=$conn->prepare('INSERT INTO porosidetails(porosiID,bookID,sasia) VALUES(?,?,?)');
        $insertQuery->bind_param("iii",$porosiID,$this->bookId,$this->quantity);
        $insertQuery->execute();
    }
}

?>
