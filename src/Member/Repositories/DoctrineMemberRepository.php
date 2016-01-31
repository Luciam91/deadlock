<?php
namespace Paranoid\Member\Repositories;

use Doctrine\DBAL\Connection;
use Paranoid\Member\Models\Member;

class DoctrineMemberRepository implements MemberRepository
{
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findOneFromIdentifier($identifier): Member
    {
        // TODO: Implement findOneFromIdentifier() method.
    }

    public function findOneFromEmail($emailAddress): Member
    {
        // TODO: Implement findOneFromEmail() method.
    }

    public function doesEmailExist($emailAddress): bool
    {

    }

    public function save(Member $member)
    {
        // TODO: Implement save() method.
    }
}