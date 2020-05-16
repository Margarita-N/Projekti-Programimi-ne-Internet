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
