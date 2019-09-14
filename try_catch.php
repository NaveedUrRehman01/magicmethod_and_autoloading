<?php
function z (){
    throw new Exception("this is exception");
}
function y (){
    z();
}
function x(){
    y();
}
try{
    x();

}catch (Exception $exception){
    var_dump($exception->getTrace());
}
echo "next:\n";

class FileException extends Exception{}
class CopyFileException extends FileException{}

// we use here exception handler for the uncaught error;
function MyExceptionalError(Exception $exception){
    echo $exception->getMessage();
}
set_exception_handler("MyExceptionalError");

try {
    try {
        throw new CopyFileException("File copy problem");

    } catch (FileException $copyFileException) {
        throw new FileException("file problem", 0, $copyFileException);
    }
    echo "this statement will not be printed";
}

catch (DataException $dataException){
//echo "latest excpeton. ".$dataException->getMessage();
//echo "\n"."previous exception ".$dataException->getPrevious()->getMessage();
}


