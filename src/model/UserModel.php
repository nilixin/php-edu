<?php

namespace Nilixin\Edu\model;

use Nilixin\Edu\db\Db;
use Nilixin\Edu\Model;
use Nilixin\Edu\db\SoftDelete;

class UserModel extends Model
{
    use SoftDelete;

    protected $login;
    protected $email;
    protected $password;

    public function table(): string
    {
        return "users";
    }

    public function fields(): array
    {
        return ["login", "email", "password"];
    }

    public function rules()
    {
        return [
            "login" => [
                "type" => "login",
                "min" => 3,
                "max" => 64
            ],
            "email" => [
                "type" => "email"
            ],
            "password" => [
                "type" => "password",
                "min" => 6,
                "max" => 128
            ]
        ];
    }
}