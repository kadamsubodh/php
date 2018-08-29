<?php
class categoryP{
	private $catname;
	public function setName($catname)
	{
		$this->catname=$catname;
	}
	public function getName()
	{
		return $this->catname;
	}
}
?>
