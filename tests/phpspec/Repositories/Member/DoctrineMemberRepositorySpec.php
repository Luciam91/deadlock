<?php

namespace phpspec\Paranoid\Repositories\Member;

use Paranoid\Entities\Member;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DoctrineMemberRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Repositories\Member\MemberRepository');
    }

    function it_should_save_a_member(Member $member)
    {
//        $this->save($member);
    }
}
