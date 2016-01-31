<?php

namespace phpspec\Paranoid\Member\Handlers;

use Paranoid\Member\Models\Member;
use Paranoid\Member\Repositories\MemberRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CreateMemberHandlerSpec extends ObjectBehavior
{
    protected $memberRepository;

    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Member\Handlers\CreateMemberHandler');
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
            ->shouldThrow('\Paranoid\Member\Exceptions\MemberAlreadyExistsException')
            ->during(
                'handle',
                ['test@test.test', 'password']
            );
    }
}
