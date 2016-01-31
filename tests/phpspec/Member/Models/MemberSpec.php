<?php

namespace phpspec\Paranoid\Member\Models;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MemberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Paranoid\Member\Models\Member');
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
            ->shouldReturnAnInstanceOf('Paranoid\Member\Models\Member');
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

    function it_should_return_an_identifier()
    {
        $this->identifier()->shouldBeString();
    }
}
