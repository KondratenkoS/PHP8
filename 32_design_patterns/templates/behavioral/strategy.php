<?php

// interface Definer
// {
//     public function define($arg): string;
// }

// class Data
// {
//     private Definer $definer;
//     private int|string|bool $arg;

//     public function setArg(int|string|bool $arg): void
//     {
//         $this->arg = $arg;
//     }

//     public function __construct(Definer $definer)
//     {
//         $this->definer = $definer;
//     }

//     public function executeStrategy(): string
//     {
//        return $this->definer->define($this->arg);
//     }
// }

// class IntDefiner implements Definer
// {
//     public function define($arg): string
//     {
//         return $arg . ' from int strategy';
//     }
// }

// class StringDefiner implements Definer
// {
//     public function define($arg): string
//     {
//         return $arg . ' from string strategy';
//     }
// }

// class BoolDefiner implements Definer
// {
//     public function define($arg): string
//     {
//         return $arg . ' from bool strategy';
//     }
// }


// //$data = new Data(new IntDefiner);
// //$data = new Data(new StringDefiner);
// $data = new Data(new BoolDefiner);
// $data->setArg('some arg for first');

// var_dump($data->executeStrategy());