<?php
namespace Paranoid\Member\Repositories;

use Paranoid\Member\Models\Member;

interface MemberRepository
{
    public function findOneFromIdentifier(string $identifier): Member;
    public function findOneFromEmail(string $emailAddress): Member;
    public function doesEmailExist(string $emailAddress): bool;
    public function update(Member $member);
}
