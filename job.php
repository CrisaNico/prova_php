<?php
    trait Job {
        
        private $company;
        
        public function getCompany(){
            echo $this->company;
        }
        
        public function setCompany(){
            $this->$company = $comp;
        }
        
        public function toString(){
            
        }
    
    
}

?>