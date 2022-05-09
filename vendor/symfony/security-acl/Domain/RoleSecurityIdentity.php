<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Domain;

use Symfony\Component\Security\Acl\Model\SecurityIdentityInterface;

/**
 * A SecurityIdentity implementation for roles.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
final class RoleSecurityIdentity implements SecurityIdentityInterface
{
    private $role;

    public function __construct(string $role)
    {
        $this->role = $role;
    }

    /**
     * Returns the role name.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * {@inheritdoc}
     */
    public function equals(SecurityIdentityInterface $sid)
    {
        if (!$sid instanceof self) {
            return false;
        }

        return $this->role === $sid->getRole();
    }

    /**
     * Returns a textual representation of this security identity.
     *
     * This is solely used for debugging purposes, not to make an equality decision.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('RoleSecurityIdentity(%s)', $this->role);
    }
}
