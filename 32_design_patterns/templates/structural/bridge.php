<?php

// interface Formatter
// {
//     public function format($str): string;
// }

// class SimpleText implements Formatter
// {
//     public function format($str): string
//     {
//         return $str;
//     }
// }

// class HTMLtext implements Formatter
// {
//     public function format($str): string
//     {
//         return "<p>$str</p>";
//     }
// }

// abstract class BridgeService
// {
//     public Formatter $formatter;

//     public function __construct(Formatter $formatter)
//     {
//         $this->formatter = $formatter;
//     }

//     abstract public function getFormatter($str): string;
   
// }

// class SimpleTextService extends BridgeService
// {
//     public function getFormatter($str): string
//     {
//         return $this->formatter->format($str);
//     }
// }

// class HTMLtextService extends BridgeService
// {
//     public function getFormatter($str): string
//     {
//         return $this->formatter->format($str);
//     }
// }

// $simpleText = new SimpleText();
// $htmlText = new HTMLtext();

// $simpleTextService = new SimpleTextService($simpleText);
// $htmlTextService = new HTMLtextService($htmlText);

// var_dump($simpleTextService->getFormatter('Hell Hello!'));
// var_dump($htmlTextService->getFormatter('Hell Hello!'));