<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppBaseController extends Controller
{
    const PAGE_NUM = 2;

    protected function paginateRet($total, $page, $list)
    {
        return [
            'total' => $total,
            'page'  => $page,
            'list'  => $list,
        ];
    }
}
