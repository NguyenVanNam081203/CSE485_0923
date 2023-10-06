<?php 

class  Patients{
    private $id;
    private $name;
    private $date;
    private $symptom;
    private $idDoctor;


    public function __construct($id,$name,$date,$symptom,$idDoctor){
        $this->id=$id;
        $this->name=$name;
        $this->date=$date;
        $this->symptom=$symptom;
        $this->idDoctor=$idDoctor;
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of symptom
     */ 
    public function getSymptom()
    {
        return $this->symptom;
    }

    /**
     * Set the value of symptom
     *
     * @return  self
     */ 
    public function setSymptom($symptom)
    {
        $this->symptom = $symptom;

        return $this;
    }

    /**
     * Get the value of idDoctor
     */ 
    public function getIdDoctor()
    {
        return $this->idDoctor;
    }

    /**
     * Set the value of idDoctor
     *
     * @return  self
     */ 
    public function setIdDoctor($idDoctor)
    {
        $this->idDoctor = $idDoctor;

        return $this;
    }
}


