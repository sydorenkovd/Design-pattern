<?php
abstract class FileNamingStrategy{
	abstract function createLinkName($fileName);
}
class ZipFile extends FileNamingStrategy{
	function createLinkName($fileName){
		return "http://localhost/download/$fileName.zip";
	}
}
class TarGzFile extends FileNamingStrategy{
	function createLinkName($fileName){
		return "http://localhost/download/$fileName.tar.gz";
	}
}
class FileStrategy{
	protected $_type;
	function __construct(){
		if(strstr($_SERVER["HTTP_USER_AGENT"], "Win"))
			$this->_type = new ZipFile();	
		else
			$this->_type = new TarGzFile();
		return $obj;
	}
	public function getLink($name){
		return $this->_type->createLinkName($name);
	}	
}
$obj = new FileStrategy();
$link1 = $obj->getLink("file_one");
$link2 = $obj->getLink("file_two");	

print <<<LIST
<h1>Список файлов для скачивания:</h1>
<p>
<a href="$link1">Первый файл</a><br>
<a href="$link2">Второй файл</a>
</p>
LIST;
?>