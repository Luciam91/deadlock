<?php

namespace phpspec\Paranoid\Entities;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MemberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Entities\Member');
    }

    function let()
    {
        $this->beConstructedThrough(
            'create',
            [
                'test@test.test',
                'password'
            ]
        );
    }

    function it_should_create_a_member()
    {
        $this::create(
            'emailaddress@gmail.com',
            'password'
        )
            ->shouldReturnAnInstanceOf('Paranoid\Entities\Member');
    }

    function it_should_return_the_email_address()
    {
        $this
            ->email()
            ->shouldBeString();

        $this
            ->email()
            ->shouldBe('test@test.test');
    }

    function it_should_return_the_password()
    {
        $this
            ->password()
            ->shouldBeString();

        $this
            ->password()
            ->shouldBe('password');
    }
}
