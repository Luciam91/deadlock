<?php

namespace Paranoid\Member\Models;

use Ramsey\Uuid\Uuid;

class Member
{
    protected $identifier;

    protected $email;

    protected $password;

    protected $salt;

    private function __construct()
    {
        $this->identifier = Uuid::uuid4()->toString();
        $this->salt = md5(Uuid::uuid4()->toString());
    }


    public static function create(
        string $email,
        string $password
    ) : Member
    {
        $self = new Member();

        $self->email = $email;
        $self->password = $password;

        return $self;
    }


    public function email(): string
    {
        return $this->email;
    }


    public function password(): string
    {
        return $this->password;
    }


    public function identifier(): string
    {
        return $this->identifier;
    }


    public function updateEmail(string $emailAddress)
    {
        $this->email = $emailAddress;
    }
}
