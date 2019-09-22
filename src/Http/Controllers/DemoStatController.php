<?php

namespace Rinjax\Website\Http\Controllers;

use App\Http\Controllers\Controller;
use Rinjax\Website\Managers\DemoStatManager;

class DemoStatController extends Controller
{
    protected $Manager;

    public function __construct()
    {
        $this->Manager = new DemoStatManager();
    }


    public function getTableData()
    {
        $users = $this->Manager->getAllUsers();

        foreach($users as $user){
            $user->stat = $this->Manager->getUserTableStat();
        }

        return response()->json($users);
    }
}