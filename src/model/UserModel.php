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
                "regex" => "plain",
                "size" => [3, 64]
            ],
            "email" => [
                "filter" => "email"
            ],
            "password" => [
                "size" => [6, 128]
            ]
        ];
    }
}