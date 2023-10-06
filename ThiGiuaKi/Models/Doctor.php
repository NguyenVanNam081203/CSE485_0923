<?php 



class Doctor_{
    private $id;
    private $tenBacSi;
    private $chuyenKhoa;
 
    // khởi tạo
    public function __construct($id,$tenBacSi,$chuyenKhoa){
        $this->id=$id;
        $this->tenBacSi=$tenBacSi;
        $this->chuyenKhoa=$chuyenKhoa;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tenBacSi
     */ 
    public function getTenBacSi()
    {
        return $this->tenBacSi;
    }

    /**
     * Set the value of tenBacSi
     *
     * @return  self
     */ 
    public function setTenBacSi($tenBacSi)
    {
        $this->tenBacSi = $tenBacSi;

        return $this;
    }

    /**
     * Get the value of chuyenKhoa
     */ 
    public function getChuyenKhoa()
    {
        return $this->chuyenKhoa;
    }

    /**
     * Set the value of chuyenKhoa
     *
     * @return  self
     */ 
    public function setChuyenKhoa($chuyenKhoa)
    {
        $this->chuyenKhoa = $chuyenKhoa;

        return $this;
    }
}
 ?>