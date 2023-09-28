<?php

// abstract class Expression
// {
//     abstract public function interpret(Context $context): bool;
// }

// class Context
// {
//     private array $worker = [];

//     public function setWorker(string $worker): void
//     {
//         $this->worker[] = $worker;
//     }

//     public function lookUp($key): string|bool
//     {
//         if(isset($this->worker[$key])) {
//             return $this->worker[$key];
//         }
//         return false;
//     }
// }

// class VariableExp 
// {
//     private int $key;

//     public function __construct(int $key)
//     {
//         $this->key = $key;
//     }

//     public function interpret(Context $context): bool
//     {
//         return $context->lookUp($this->key);
//     }
// }

// class AndExp extends Expression
// {
//     private int $keyOne;
//     private int $keyTwo;

//     public function __construct(int $keyOne, int $keyTwo)
//     {
//         $this->keyOne = $keyOne;
//         $this->keyTwo = $keyTwo;
//     }

//     public function interpret(Context $context): bool
//     {
//         return $context->lookUp($this->keyOne) && $context->lookUp($this->keyTwo);
//     }
// }

// class OrExp extends Expression
// {
//     private int $keyOne;
//     private int $keyTwo;

//     public function __construct(int $keyOne, int $keyTwo)
//     {
//         $this->keyOne = $keyOne;
//         $this->keyTwo = $keyTwo;
//     }

//     public function interpret(Context $context): bool
//     {
//         return $context->lookUp($this->keyOne) || $context->lookUp($this->keyTwo);
//     }
// }


// $context = new Context();
// $context->setWorker('Hell');
// $context->setWorker('Hellor');

// $varExp = new VariableExp(1);
// $andExp = new AndExp(1, 3);
// $orExp = new OrExp(1, 3);

// var_dump($varExp->interpret($context));
// var_dump($andExp->interpret($context));
// var_dump($orExp->interpret($context));