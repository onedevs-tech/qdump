<?php


namespace Onedevs\QDump\OutputWriter;


interface OutputWriterInterface {

   /**
    * Write $string to something.
    *
    * @param string $string string to write
    */
   public function write($string): string;

}
