<?php


namespace Cachito\VarDebug\OutputWriter;


class StdoutWriter implements WriterInterface {

   /**
    * Constructor.
    */
   public function __construct($not_used_1, $not_used_2) { }

   /**
    * Write $string to STDOUT.
    *
    * @param string $string string to write
    * @return string the written output
    */
   public function write($string): string
   {
      echo $string;
      return $string;
   }
}
