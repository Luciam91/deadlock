<?php
namespace Paranoid\Handlers\Member;


use Paranoid\Entities\Member;
use Paranoid\Exceptions\Member\MemberAlreadyExistsException;
use Paranoid\Repositories\Member\MemberRepository;

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
