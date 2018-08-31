<?php
class productPopo{
	private $pname;
	private $pprice;
	private $ppath;
	private $catid;
	public function setPname($pname)
	{
		$this->pname=$pname;
	}
	public function getPname()
	{
		return $this->pname;
	}
	public function setPprice($pprice)
	{
		$this->pprice=$pprice;
	}
	public function getPprice()
	{
		return $this->pprice;
	}
	public function setPpath($ppath)
	{
		$this->ppath=$ppath;
	}
	public function getPpath()
	{
		return $this->ppath;
	}
	public function setCatid($catid)
	{
		$this->catid=$catid;
	}
	public function getCatid()
	{
		return $this->catid;
	}
}
?>