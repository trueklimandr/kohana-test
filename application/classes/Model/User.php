<?php

class Model_User extends ORM
{
    protected $_table_name = 'user';

    public function getNamesStat()
    {
        $namesStat = $this->_db->query(
            Database::SELECT,
            "select first_name,count(first_name) as count from " . $this->_table_name .
            " group by first_name order by count DESC, first_name"
        );

        return $namesStat->as_array();
    }
}
