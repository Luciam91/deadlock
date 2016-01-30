<?php
namespace Paranoid\Repositories\Member;

use Paranoid\Entities\Member;

interface MemberRepository
{
    public function findOneFromIdentifier($identifier): Member;
    public function findOneFromEmail($emailAddress): Member;
    public function doesEmailExist($emailAddress): bool;
    public function save(Member $member);
}