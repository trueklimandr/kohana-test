<?php

class Model_User extends ORM
{
    protected $_table_name = 'user';

    /**
     * @param array $params
     * @return array
     */
    public function getNamesStat(array $params): array
    {
        $where = $this->getConditions($params);

        $namesStat = $this->_db->query(
            Database::SELECT,
            "select first_name,count(first_name) as count from " . $this->_table_name . $where .
            " group by first_name order by count DESC, first_name"
        );

        return $namesStat->as_array();
    }

    /**
     * @param array $params
     * @return string
     */
    private function getConditions(array $params): string
    {
        $where = [];
        if (isset($params['maxAge'])) {
            $minBirthDate = date('Y-m-d', strtotime('-' . $params['maxAge'] . 'years'));
            $where[] = "birth_date>'" . $minBirthDate . "'";
        }

        if (isset($params['firstLetter'])) {
            $where[] = "first_name like '" . $params['firstLetter'] . "%'";
        }

        return !empty($where) ? ' where ' . implode(' and ', $where) : '';
    }
}
