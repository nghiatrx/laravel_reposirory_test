<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
  protected $userRepository;

  public function __construct(\App\Repositories\User\UserRepositoryInterface $userRepository)
  {
      $this->userRepository = $userRepository;
  }
  public function test() {
    $this->userRepository->create([
      'name' => 'aaa',
      'email' => 'aaa',
      'email_verified_at' => 'aaa',
      'password' => 'aaaa'
    ]);
  }
}