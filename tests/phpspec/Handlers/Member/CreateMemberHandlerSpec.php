<?php

namespace phpspec\Paranoid\Handlers\Member;

use Paranoid\Entities\Member;
use Paranoid\Repositories\Member\MemberRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreateMemberHandlerSpec extends ObjectBehavior
{
    protected $memberRepository;

    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Handlers\Member\CreateMemberHandler');
    }

    function let(MemberRepository $memberRepository)
    {
        $this->beConstructedWith(
            $memberRepository
        );

        $this->memberRepository = $memberRepository;

        $this
            ->memberRepository
            ->doesEmailExist('test@test.test')
            ->willReturn(false);
    }

    function it_should_create_a_member()
    {
        $this
            ->handle('test@test.test', 'password')
            ->shouldBe(true);
    }

    function it_should_throw_an_exception_if_member_already_exists()
    {
        $this
            ->memberRepository
            ->doesEmailExist('test@test.test')
            ->willReturn(true);

        $this
            ->shouldThrow('\Paranoid\Exceptions\Member\MemberAlreadyExistsException')
            ->during(
                'handle',
                ['test@test.test', 'password']
            );
    }
}
