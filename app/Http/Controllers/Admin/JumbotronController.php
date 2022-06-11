<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Sahabat Karir | Jumbotron',

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/jumbotron'
            ],

            'js'            => [
                'admin/jumbotron'
            ]
        ];

        return $this->adminPages('jumbotron', $data);
    }
}
