<?php
//membuat properti

class BMI 
{
    public $nama;
    public $umur;
    public $jeniskelamin;
    public $berat;
    public $tinggi;

    //membuat method

    public function __construct($nama, $umur, $jeniskelamin, $berat, $tinggi)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jeniskelamin = $jeniskelamin;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function hasilBMI()
    {
        $bmi = $this->berat / ($this->tinggi * $this->tinggi);
        return $bmi;
    }
    
    public function statusBMI()
    {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5){
            return "kekurangan berat badan";  
        } elseif ($bmi >= 18.5 && $bmi <= 24.9 ){
            return "normal(ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9 ){
            return "kelebihan berat badan";
        } else {
            return "kegemukan (obesitas)";
        }
    }


}