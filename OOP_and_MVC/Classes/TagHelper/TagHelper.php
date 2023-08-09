<?php
    class TagHelper{
        private $text;

        public function setText($text){
            $this->text = $text;
        }

        public function open($name, $attrs = []){
            $attrStr = $this->getAttrsStr($attrs);
            return "<$name$attrStr>";
        }

        public function show($name, $attrs){
           return $this->open($name, $attrs) . $this->text . $this->close($name);
        }

        private function getAttrsStr($attrs){
            if(!empty($attrs)){
                $result = '';
                foreach($attrs as $name => $value){
                    if($value === true){
                        $result .= " $name";
                    } else {
                        $result .= " $name=\"$value\"";
                    }
                }
                return $result;
            } else {
                return '';
            }
        }

        public function close($name){
            return "</$name>";
        }
    }