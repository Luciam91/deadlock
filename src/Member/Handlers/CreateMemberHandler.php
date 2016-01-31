<?php
namespace Paranoid\Member\Handlers;


use Paranoid\Member\Exceptions\MemberAlreadyExistsException;
use Paranoid\Member\Models\Member;
use Paranoid\Member\Repositories\MemberRepository;

class CreateMemberHandler
{
    protected $memberRepository;

    public function __construct(
        MemberRepository $memberRepository
    ) {
        $this->memberRepository = $memberRepository;
    }


    public function handle(
        string $emailAddress,
        string $password
    ): bool
    {
        if ($this->memberRepository->doesEmailExist($emailAddress)) {
            throw new MemberAlreadyExistsException;
        }

        $member = Member::create(
            $emailAddress,
            $password
        );

        return true;
    }
}
