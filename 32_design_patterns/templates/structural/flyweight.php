<?php

// interface Mail
// {
//     public function render(): string;
// }

// abstract class TypeMail
// {
//     public string $text;

//     public function __construct(string $text)
//     {
//         $this->text = $text;
//     }
// }

// class BusinessMail extends TypeMail implements Mail
// {
//     public function render(): string
//     {
//         return $this->text . ' from bussines mail';
//     }
// }

// class JobMail extends TypeMail implements Mail
// {
//     public function render(): string
//     {
//         return $this->text .  ' from job mail';
//     }
// }

// class MailFactory
// {
//     private array $pool = [];

//     public function getMail($id, $typeMail): Mail
//     {
//         if(!isset($this->pool[$id])) {
//             $this->pool[$id] = $this->make($typeMail);
//         }
//         return $this->pool[$id];
//     }

//     private function make($typeMail): Mail
//     {
//         if($typeMail === 'business') {
//             return new BusinessMail(ucfirst('business'));
//         }
//         return new JobMail(ucfirst('job'));
//     }
// }

// $mailFactory = new MailFactory();
// $mail = $mailFactory->getMail(10, 'job');

// var_dump($mail->render());