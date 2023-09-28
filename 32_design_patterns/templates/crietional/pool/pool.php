<?php

class WorkerPool
{
    private array $freeWorkers = [];
    private array $busyWorkers = [];

    /**
     * @return array 
     */
    public function getFreeWorkers(): array
    {
        return $this->freeWorkers;
    }

    /**
     * @param array $freeeWorkers
     */
    public function setFreeWorkers(array $freeeWorkers): void
    {
        $this->freeWorkers = $freeeWorkers;
    }

    /**
     * @return array 
     */
    public function getBusyWorkers(): array
    {
        return $this->busyWorkers;
    }

    /**
     * @param array $busyWorkers
     */
    public function setBusyWorkers(array $busyWorkers): void
    {
        $this->busyWorkers = $busyWorkers;
    }

    public function getWorker()
    {
        if(count($this->freeWorkers) === 0) {
            $worker = new Worker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->busyWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    public function release(Worker $worker)
    {
        $key = spl_object_hash($worker);

        if(isset($busyWorkers[$key])) {
            unset($this->busyWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }
}

class Worker
{
    public function work()
    {
        printf("I'm worker");
    }
}

$pool = new WorkerPool();

$worker = $pool->getWorker();
$worker2 = $pool->getWorker();
$worker3 = $pool->getWorker();
$worker4 = $pool->getWorker();
$pool->release($worker3);

var_dump($pool->getFreeWorkers());