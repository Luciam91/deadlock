<?php
namespace Paranoid\Repositories\Member;


use Doctrine\ORM\EntityRepository;
use Paranoid\Entities\Member;

class DoctrineMemberRepository extends EntityRepository implements MemberRepository
{
    public function findOneFromIdentifier($identifier): Member
    {
        // TODO: Implement findOneFromIdentifier() method.
    }

    public function findOneFromEmail($emailAddress): Member
    {
        // TODO: Implement findOneFromEmail() method.
    }

    public function doesEmailExist($emailAddress): bool
    {

    }

    public function save(Member $member)
    {
        // TODO: Implement save() method.
    }
}