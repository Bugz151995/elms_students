<?php

namespace App\Controllers;

use App\Models\ClassModel;

class Page extends BaseController
{
    protected $helpers = ['form'];

    public function show($pageName = false)
    {
        $model = model(ClassModel::class);

        $data = [
            'class' => $model->findAll()
        ];

        if($pageName !== false)
            return view($pageName, $data);

        return view('signin');
    }
}
