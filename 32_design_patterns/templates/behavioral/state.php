<?php

// interface State
// {
//     public function toNext(Task $task);
//     public function getStatus(): string;
// }

// class Task
// {
//     private State $state;

//     public static function make(): Task
//     {
//         $self = new self();
//         $self->setState(new Created());
//         return $self;
//     }

//     public function setState(State $state): void
//     {
//         $this->state = $state;
//     }

//     public function getState(): State
//     {
//         return $this->state;
//     }

//     public function proceedToNext()
//     {
//         $this->state->toNext($this);
//     }
// }

// class Created implements State
// {
//     public function toNext(Task $task)
//     {
//         $task->setState(new Process());
//     }

//     public function getStatus(): string
//     {
//         return 'Created!';
//     }
    
// }

// class Process implements State
// {
//     public function toNext(Task $task)
//     {
//         $task->setState(new Test());
//     }
    
//     public function getStatus(): string
//     {
//         return 'Process!';
//     }
    
// }

// class Test implements State
// {
//     public function toNext(Task $task)
//     {
//         $task->setState(new Done());
//     }
    
//     public function getStatus(): string
//     {
//         return 'Test!';
//     }
    
// }

// class Done implements State
// {
//     public function toNext(Task $task)
//     {
       
//     }
    
//     public function getStatus(): string
//     {
//         return 'Done!';
//     }
    
// }

// $task = Task::make();
// $task->proceedToNext(); // вызываем для смены статуса

// var_dump($task->getState()->getStatus());