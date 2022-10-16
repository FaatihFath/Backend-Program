<?php
# Membuat Class Person 
class person{

# Membuat Property 
    public $nama;
    public $jurusan;
    public $kota;
 
# membuat Constructor
public function __construct ($nama, $jurusan, $kota){
    

$this->nama = $nama;
$this->jurusan = $jurusan;
$this->kota = $kota;

}
#membuat method (function)

public function setNama($data){
    $this->nama = $data;
}
public function getNama(){
    return $this->nama;

}

}

// membuat method set and get alamat & jurusan 

$faat = new person('faatih','Teknik Informatika', 'Jakarta Selatan');
$than = new person('fathan', 'Bisnis Digital','Depok');

echo $faat->getNama();
echo '<br>';
echo $than->getNama();
