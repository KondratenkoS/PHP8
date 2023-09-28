<?php

// interface Worker
// {
//     public function work();
// }

// interface WorkerFactory
// {
//     public static function make();
// }

// class Developer implements Worker
// {
//     public function work(): void
//     {
//         echo "I'm Developer<br>";
//     }
// }

// class Disigner implements Worker
// {
//     public function work(): void
//     {
//         echo "I'm Disigner<br>";
//     }
// }

// class DeveloperFactory implements WorkerFactory
// {
//     public static function make(): Developer
//     {
//         return new Developer();
//     }
// }

// class DisignerFactory implements WorkerFactory
// {
//     public static function make(): Disigner
//     {
//         return new Disigner();
//     }
// }

// $developer = DeveloperFactory::make();
// $disigner = DisignerFactory::make();

// $developer->work();
// $disigner->work();