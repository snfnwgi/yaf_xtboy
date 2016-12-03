<?php
class TestModel extends Db_Base{
    private $_table = "test";
    public function my_select()
    {
        $this->sql = "SELECT * FROM `$this->_table`";
        return $this->_db->getAll($this->sql);
    }

}

