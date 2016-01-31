<?php

namespace phpspec\Paranoid\Member\Repositories;

use Doctrine\DBAL\Connection;
use Paranoid\Member\Models\Member;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DoctrineMemberRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Member\Repositories\MemberRepository');
    }

    function let(Connection $connection)
    {
        $this->beConstructedWith($connection);
    }

    function it_should_save_a_member(Member $member)
    {
//        $this->save($member);
    }
}
