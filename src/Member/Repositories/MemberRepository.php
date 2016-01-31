<?php
namespace Paranoid\Member\Repositories;

use Paranoid\Member\Models\Member;

interface MemberRepository
{
    public function findOneFromIdentifier($identifier): Member;
    public function findOneFromEmail($emailAddress): Member;
    public function doesEmailExist($emailAddress): bool;
    public function update(Member $member);
}