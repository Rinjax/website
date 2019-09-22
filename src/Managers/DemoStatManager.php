<?php

namespace Rinjax\Website\Managers;

use Rinjax\Website\Models\DemoUser;

class DemoStatManager
{
    public function getAllUsers()
    {
        return DemoUser::all();
    }

    public function getUserTableStat()
    {
        $item1 = $this->getRandomStatNum();
        $item2 = $this->getRandomStatNum();
        $total = $item1 + $item2;

        return (object)[
            'item1' => $item1,
            'item2' => $item2,
            'total' => $total
        ];
    }

    protected function getRandomStatNum()
    {
        return mt_rand(10, 100);
    }
}