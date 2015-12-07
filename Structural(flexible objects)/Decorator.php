<?php
/*
Используется для динамического расширения функциональности объекта.
Является гибкой альтернативой наследованию.
Как и шаблон Composite, шаблон Decorator может показаться сложным для понимания. 
Важно помнить, что и композиция, и наследование вступают в действие
одновременно. Поэтому  LogRequest  наследует свой интерфейс от  ProcessRequest,
но, в свою очередь, выступает в качестве оболочки для другого объекта типа  Process
Request.
По сути, мы привели пример шаблона корпоративных приложений lпterceptiпg Filter.
Этот шаблон описан в книге Core J2EE Pattems.
*/
class RequestHelper{}

abstract class ProcessRequest {
    abstract function process( RequestHelper $req );
}

class MainProcess extends ProcessRequest {
    function process( RequestHelper $req ) {
        print __CLASS__.": doing something useful with request" . "<br>";
    }
}

abstract class DecorateProcess extends ProcessRequest {
    protected $processrequest;
    function __construct( ProcessRequest $pr ) {
        $this->processrequest = $pr;
    }
}

class LogRequest extends DecorateProcess {
    function process( RequestHelper $req ) {
        print __CLASS__.": logging request" . "<br>";
        $this->processrequest->process( $req );
    }
}

class AuthenticateRequest extends DecorateProcess {
    function process( RequestHelper $req ) {
        print __CLASS__.": authenticating request" . "<br>";
        $this->processrequest->process( $req );
    }
}

class StructureRequest extends DecorateProcess {
    function process( RequestHelper $req ) {
        print __CLASS__.": structuring request data" . "<br>";
        $this->processrequest->process( $req );
    }
}

$process = new AuthenticateRequest( new StructureRequest(
                                    new LogRequest (
                                    new MainProcess()
                                    )));
$process->process( new RequestHelper() );
?>
