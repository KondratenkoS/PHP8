<?php

// class Worker
// {
//     private string $name;

//     public function __construct(string $name)
//     {
//         $this->name = $name;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }

//     public static function make($args): Worker
//     {
//         return new self($args['name']);
//     }
// }

// class WorkerMapper
// {
//     private WorkerStorageAdapter $workerStorageAdapter;

//     public function __construct(WorkerStorageAdapter $workerStorageAdapter)
//     {
//         $this->workerStorageAdapter = $workerStorageAdapter;
//     }

//     public function findById($id): string|Worker
//     {
//         $res = $this->workerStorageAdapter->find($id);

//         if($res === null) {
//             return 'Worker with this ID does not exist';
//         }
//         return $this->make($res);
//     }

//     private function make($args): Worker
//     {
//         return Worker::make($args);
//     }
// }

// class WorkerStorageAdapter
// {
//     private array $data = [];

//     public function __construct(array $data)
//     {
//         $this->data = $data;
//     }

//     public function find($id)
//     {
//         if(isset($this->data[$id])) {
//             return $this->data[$id];
//         }
//         return null;
//     }
// }

// $data = [
//     1 => [
//         'name' => 'Hell',
//     ]
// ];

// $workerStorageAdapter = new WorkerStorageAdapter($data);
// $workerMapper = new WorkerMapper($workerStorageAdapter);
// $worker = $workerMapper->findById('1');

// var_dump($worker->getName());