<?php
namespace Paranoid\Member\Repositories;

use Doctrine\DBAL\Connection;
use Paranoid\Member\Models\Member;

class DoctrineMemberRepository implements MemberRepository
{
    protected $connection;

    protected $tableName;

    public function __construct(string $tableName, Connection $connection)
    {
        $this->connection = $connection;
        $this->tableName = $tableName;
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

    public function update(Member $member)
    {
        $this->connection->update(
            $this->tableName,
            json_decode(json_encode($member), true),
            [
                'identifier' => $member->identifier()
            ]
        );
    }
}