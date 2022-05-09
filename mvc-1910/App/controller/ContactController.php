<?php

namespace App\Controller;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

use App\Controller\BaseController;

class ContactController extends BaseController
{
    public function index()
    {
        $header = ['title' => 'This is Contact page'];
        $data = [];
        $data['work'] = 'abc xyz';

        $this->loadHeader($header);
        $this->loadView('contact/index_view', $data);
        $this->loadFooter();;
    }
}
