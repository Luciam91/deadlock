<?php

namespace phpspec\Paranoid\Member\Repositories;

use Doctrine\DBAL\Connection;
use Paranoid\Member\Models\Member;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DoctrineMemberRepositorySpec extends ObjectBehavior
{
    protected $connection;

    protected $tableName;

    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Member\Repositories\MemberRepository');
    }

    function let(Connection $connection)
    {
        $this->beConstructedWith('members', $connection);
        $this->connection = $connection;
        $this->tableName = 'members';
    }
//
    function it_should_save_a_member()
    {
        $member = Member::create('test@test.test', 'password');

        $this->connection->update(
            $this->tableName,
            json_decode(json_encode($member), true),
            [
                'identifier' => $member->identifier()
            ]
        )->shouldBeCalled();

        $this->update($member);
    }
}
