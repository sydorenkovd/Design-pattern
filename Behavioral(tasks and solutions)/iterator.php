<?php
class Module {
	private $_status = true;

	function __construct() {}

    public function isOk() {
		return $this->_status;
    }
}

class ModsList {
	public $_mods_list;//private
	
	function __construct() {}

	public function add(Module $mod) {
		$this->_mods_list[$this->getCount()+1] = $mod;
		return $this;
	}

	public function getCount() {
		return count($this->_mods_list);
	}
}

class ModsIterator {

	public $_mods;//private
	private $_cur_mod = 0;

	function __construct(ModsList $mods) {
		$this->_mods = $mods;
	}

	public function hasModule() {
		if ($this->_cur_mod <= count($this->_mods)) {
			$this->_cur_mod += 1;
			return true;
		} else {
			return false;
		}
	}

	public function getCurMod() {
		foreach($this->_mods as $val){}
		return $val[$this->_cur_mod];
		//return $this->_mods[$this->_cur_mod];
		
	}

}

///////////////////////////////////////////////
$mod1 = new Module();
$mod2 = new Module();
$mod3 = new Module();
$mods = new ModsList();

$mods->add($mod1)->add($mod2)->add($mod3);

$modules = new ModsIterator($mods);

$sys_status = "OK";

while ($modules->hasModule()) {
	$module = $modules->getCurMod();
	if (!$module->isOk()) {
	     $sys_status = "Error";
        }
}
echo "Состояние системы : ".$sys_status;
?>