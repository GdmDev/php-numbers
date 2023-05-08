<?php
class Numbers{
    private $len;
    private $offset;
    private $limit;
    private $arrnbms=[];
    private $exnmb=33;
    private $oddnmb=[];
    private $evennmb=0;

    public function __construct($len,$offset,$limit){
        $this->len = $len;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    private function getRndNmbs(){
        return rand($this->offset,$this->limit);;
    }

    public function getArrNmbs(){
        /*
        for ($x = 0; $x <= $this->len; $x++) {
            $this->getRndNmbs();
            array_push($arr,$this->getRndNmbs());

        }
        return $arr;*/
        
        do {
            $nbm=$this->getRndNmbs();
            if($this->VerifyNmbs($nbm)==false) {
                $this->arrnbms[]=$nbm;
                if($nbm % 2 != 0 ){
                    if(empty( $this->oddnmb)){
                        $this->oddnmb[array_search($nbm,  $this->arrnbms)]=$nbm;
                    } 
                }else{
                    $this->evennmb+=$nbm;
                }
            } 
        } 
        while ($this->len >count($this->arrnbms));
        return $this->arrnbms;
    }
    private function VerifyNmbs($el){
        return (in_array($el, $this->arrnbms)) ?  true :  false;
    }
    public function getExNmb(){ 
        return (in_array($this->exnmb, $this->arrnbms)) ?  true :  false;
    }
    public function getFirstOddNmbs(){
        return $this->oddnmb;
    }
    public function getSumEvenNumber(){
        return $this->evennmb;
    }
}
?>