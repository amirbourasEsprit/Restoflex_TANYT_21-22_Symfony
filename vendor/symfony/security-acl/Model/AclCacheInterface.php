<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Model;

/**
 * AclCache Interface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface AclCacheInterface
{
    /**
     * Removes an ACL from the cache.
     *
     * @param string $aclId a serialized primary key
     */
    public function evictFromCacheById($aclId);

    /**
     * Removes an ACL from the cache.
     *
     * The ACL which is returned, must reference the passed object identity.
     */
    public function evictFromCacheByIdentity(ObjectIdentityInterface $oid);

    /**
     * Retrieves an ACL for the given object identity primary key from the cache.
     *
     * @param int $aclId
     *
     * @return AclInterface|null
     */
    public function getFromCacheById($aclId);

    /**
     * Retrieves an ACL for the given object identity from the cache.
     *
     * @return AclInterface|null
     */
    public function getFromCacheByIdentity(ObjectIdentityInterface $oid);

    /**
     * Stores a new ACL in the cache.
     */
    public function putInCache(AclInterface $acl);

    /**
     * Removes all ACLs from the cache.
     */
    public function clearCache();
}
