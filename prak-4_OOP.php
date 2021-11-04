<?php

abstract class Karyawan 
{
    
    private $nama;
    private $TTL;
    private $gender;
    public $level;
    public $gaji;
   
    /// fungsi konstruktor
    function __construct($nama, $TTL, $gender, $level)
    {
        $this->nama = $nama;
        $this->TTL = $TTL;
        $this->gender = $gender;
        $this->level = $level;
       
    }

    /// Methods
    function get_nama()
    {
        return $this->nama;
    }
    function get_TTL()
    {
        return $this->TTL;
    }
    function get_gender()
    {
        return $this->gender;
    }
    function get_level()
    {
        return $this->level;
    }
    
    abstract function gaji_karyawan();

}
class Partime extends Karyawan
{
 public $status = "partime";
 
 public function gaji_karyawan(){
    if($this->level == 'junior'){
         $this->gaji = 2000000 / 2 ; 
         return $this->gaji;
     }
     else if($this->level=="amateur"){
         $this->gaji = 3500000 /2 ;
         return $this->gaji;
     }
     else if($this->level=="senior"){
        $this->gaji = 5000000 /2 ;    
        return $this->gaji; 
 }
 
 
}
}

class Fulltime extends Karyawan
{
 public $status = "fulltime";
 public function gaji_karyawan(){
     if($this->level == 'junior'){
         $this->gaji = 2000000  ; 
         return $this->gaji; 
 }
     elseif($this->level=="amateur"){
         $this->gaji = 3500000  ;
         return $this->gaji;
     }
     elseif($this->level=="senior"){
        $this->gaji = 5000000  ;    
        return $this->gaji; 
     }
 }

 
}

//function __construct($nama, $TTL, $gender, $level, $gaji)
$karyawan1 = new Fulltime ("brendan", "berlin-30-08-2001", "laki-laki", "junior") ;
$karyawan2 = new Partime ("alvin", "hanoi-30-06-2005", "laki-laki", "amateur") ;
$karyawan3 = new Fulltime ("cecil", "jakarta-30-08-2001", "perempuan", "senior") ;


?>
<!DOCTYPE html>
<h1>Tabel Data List Karyawan</h1>
<style>
    h1 {
   color: #DEB887
    }
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color:#FAEBD7;
        color: black;
    }
</style>
 
<table border="1">
    <tr>
    <th rowspan="2">No</th>

        <th colspan="6">Data list Karywan</th> 
    </tr>
    <tr>
        <th>Nama</th>
        <th>TTL</th>
        <th>Gender</th>
        <th>Level Karyawan</th>
        <th>Status</th>
        <th>Gaji karyawan</th>
    </tr>
    
    <tr> <?php for ($i=0; $i < 1 ; $i++) { ?>
        <td> <?php echo $i + 1; ?></td>
        <td> <?php echo $karyawan1->get_nama(); ?></td>
        <td> <?php echo $karyawan1->get_TTL(); ?></td>
        <td> <?php echo $karyawan1->get_gender(); ?></td>
        <td> <?php echo $karyawan1->get_level(); ?></td>
        <td> <?php echo $karyawan1->status; ?></td>
        <td> <?php echo $karyawan1->gaji_karyawan(); ?></td>
        <?php } ?>
    </tr> 
    <tr> <?php for ($i=0; $i < 1 ; $i++) { ?>
        <td> <?php echo $i + 2; ?></td>
        <td> <?php echo $karyawan2->get_nama(); ?></td>
        <td> <?php echo $karyawan2->get_TTL(); ?></td>
        <td> <?php echo $karyawan2->get_gender(); ?></td>
        <td> <?php echo $karyawan2->get_level(); ?></td>
        <td> <?php echo $karyawan2->status; ?></td>
        <td> <?php echo $karyawan2->gaji_karyawan(); ?></td>
        <?php } ?>
    </tr> 
    <tr> <?php for ($i=0; $i < 1 ; $i++) { ?>
        <td> <?php echo $i + 3; ?></td>
        <td> <?php echo $karyawan3->get_nama(); ?></td>
        <td> <?php echo $karyawan3->get_TTL(); ?></td>
        <td> <?php echo $karyawan3->get_gender(); ?></td>
        <td> <?php echo $karyawan3->get_level(); ?></td>
        <td> <?php echo $karyawan3->status ?></td>
        <td> <?php echo $karyawan3->gaji_karyawan(); ?></td>
        <?php } ?>
    </tr> 

</table>
</html>
