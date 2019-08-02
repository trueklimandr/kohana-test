<?php

class Controller_User extends Controller
{
    const NAMES = 'names';
    const LASTNAMES = 'lastnames';
    const AGES = 'ages';

	public function action_names()
    {
		$this->statResponse(self::NAMES);
	}

    public function action_lastnames()
    {
        $this->statResponse(self::LASTNAMES);
    }

    public function action_ages()
    {
        $this->statResponse(self::AGES);
    }

    /**
     * @param string $key
     * @return array
     */
    private function getData(string $key): array
    {
        $data = [];

        switch ($key) {
            case self::NAMES:
                $data = $this->getNamesData();
                break;
            case self::LASTNAMES:
                $data = $this->getLastnamesData();
                break;
            case self::AGES:
                $data = $this->getAgesData();
                break;
        }

        return $data;
    }

    /**
     * @return array
     */
    private function getNamesData(): array
    {
        $user = new Model_User();
        $users = $user->getNamesStat($this->request->query());
        $filter['ages'] = range(100, 0);
        $filter['maxAge'] = $this->request->query('maxAge');
        $filter['letters'] = range('A', 'Z');
        $filter['firstLetter'] = $this->request->query('firstLetter');

        return compact('users', 'filter');
    }

    /**
     * @return array
     */
    private function getLastnamesData(): array
    {
        return [];
    }

    /**
     * @return array
     */
    private function getAgesData(): array
    {
        return [];
    }

    /**
     * @param string $blockName
     */
    private function statResponse(string $blockName)
    {
        $this->response->body(
            View::factory('home')
                ->set('data', $this->getData($blockName))
                ->set('block', 'statistic/' . $blockName)
                ->set('navItem', $blockName)
        );
    }
}
