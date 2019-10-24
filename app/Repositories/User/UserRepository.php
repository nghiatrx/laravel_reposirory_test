<?php

namespace App\Repositories\User;

class UserRepository extends \App\Repositories\EloquentRepository implements UserRepositoryInterface {
  public function getModel()
  {
      return \App\User::class;
  }
}