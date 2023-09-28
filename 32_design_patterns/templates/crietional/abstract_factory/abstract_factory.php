<?php

// interface AbstractFactory
// {
//     public static function makeDeveloperWorker(): DeveloperWorker;
//     public static function makeDesignerWorker(): DesignerWorker;
// }

// interface Worker
// {
//     public function work();
// }

// interface DeveloperWorker extends Worker
// {

// }

// interface DesignerWorker extends Worker
// {

// }

// class OutsourceWorkerFactory implements AbstractFactory
// {
//     public static function makeDeveloperWorker(): DeveloperWorker
//     {
//         return new OutsourceDeveloperWorker;
//     }

//     public static function makeDesignerWorker(): DesignerWorker
//     {
//         return new OutsourceDesignerWorker;
//     }
// }

// class NativeWorkerFactory implements AbstractFactory
// {
//     public static function makeDeveloperWorker(): DeveloperWorker
//     {
//         return new NativeDeveloperWorker;
//     }

//     public static function makeDesignerWorker(): DesignerWorker
//     {
//         return new NativeDesignerWorker;
//     }
// }

// class NativeDeveloperWorker implements DeveloperWorker
// {
//     public function work()
//     {
//         echo "I'm native developer<br>";
//     }
// }

// class OutsourceDeveloperWorker implements DeveloperWorker
// {
//     public function work()
//     {
//         echo "I'm outsource developer<br>";
//     }
// }

// class NativeDesignerWorker implements DesignerWorker
// {
//     public function work()
//     {
//         echo "I'm native designer<br>";
//     }
// }

// class OutsourceDesignerWorker implements DesignerWorker
// {
//     public function work()
//     {
//         echo "I'm outsource designer<br>";
//     }
// }

// $nativeDeveloper = NativeWorkerFactory::makeDeveloperWorker();
// $outsourceDeveloper = OutsourceWorkerFactory::makeDeveloperWorker();
// $nativeDesigner = NativeWorkerFactory::makeDesignerWorker();
// $outsourceDesigner = OutsourceWorkerFactory::makeDesignerWorker();


// $outsourceDesigner->work();