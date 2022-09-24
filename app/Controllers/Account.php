<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Account extends BaseController
{
  protected $helpers = ['form'];

  /**
   * @return string
   */
  public function signin()
  {
    $validation = \Config\Services::validation();
    $model = model(AccountModel::class);

    if (!$this->validate($validation->getRuleGroup('signin_rules')))
      return view('signin', ['validation' => $this->validator]);

    $admin = $model->join('student_tbl', 'student_tbl.student_id = account_tbl.student_id')->where('username', $this->request->getPost('username'))->where('role', 'student')->first();

    session()->set('fname', $admin['fname']);
    session()->set('mname', $admin['mname']);
    session()->set('lname', $admin['lname']);

    return redirect()->to('/home');
  }

  public function signup()
  {
    $validation = \Config\Services::validation();
    $student_tbl = model(StudentModel::class);
    $account_tbl = model(AccountModel::class);
    $class_tbl = model(ClassModel::class);

    if (!$this->validate($validation->getRuleGroup('signup_rules')))
      return view('signup', ['validation' => $this->validator, 'class' => $class_tbl->findAll()]);

    $student_data = [
      'fname' => $this->request->getPost('fname'),
      'mname' => $this->request->getPost('mname'),
      'lname' => $this->request->getPost('lname'),
      'class_id' => $this->request->getPost('class'),
    ];

    $student_tbl->save($student_data);

    $account_data = [
      'username' => $this->request->getPost('username'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'role' => 'student',
      'student_id' => $student_tbl->getInsertID()
    ];

    $account_tbl->save($account_data);

    return redirect()->to('/success');
  }

  public function signout()
  {
    session()->destroy();

    return redirect()->to('/');
  }
}
