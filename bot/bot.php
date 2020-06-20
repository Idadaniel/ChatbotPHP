<?php
    class bot{
        private $name = "Quick Help";
        private $gender = "Female";
        private $price = "N70, 000, 000";
        private $website = "accomease.com";
        public function getName(){
            return $this->name;
        }

        public function getGender(){
            return $this->gender;
        }
        
        public function getPrice(){
            return $this->price;
        }
        
        public function getWebsite(){
            return $this->website;
        }

        public function hears($message, callable $call){
            $call(new bot);
            return $message;
        }

        public function reply($response){
            echo $response;
        }

        public function ask($question, array $questionDictionary){
            $question = trim($question);
            foreach ($questionDictionary as $questions => $value){
                if ($question == $questions){
                    return $value;
                }
            }
        }
    }

?>