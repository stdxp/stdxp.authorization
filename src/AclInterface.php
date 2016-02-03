<?php
/**
 * Standard Authorization Interface
 *
 * PHP version 5
 *
 * Copyright (C) 2016 Jake Johns
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 *
 * @category  ACL
 * @package   Stdxp\Authorization
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/stdxp/stdxp.authorization
 */

namespace Stdxp\Authorization;

/**
 * AclInterface
 *
 * @category Acl
 * @package  Stdx\Authorization
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/stdxp/stdxp.authorization
 */
interface AclInterface
{
    /**
     * Add role
     *
     * @param mixed $role    Name of role
     * @param mixed $parents Role parents
     *
     * @return $this
     *
     * @access public
     */
    public function addRole($role, $parents = null);

    /**
     * Add Resource
     *
     * @param mixed $resource Name of resource
     * @param mixed $parents  Resource parents
     *
     * @return $this
     *
     * @access public
     */
    public function addResource($resource, $parents = null);

    /**
     * Add an Allow rule
     *
     * @param mixed $roles      Roles to allow
     * @param mixed $resources  Resources to allow roles to act on
     * @param mixed $privileges Privileges to allow
     * @param mixed $callback   Callback to determine applicability
     *
     * @return $this
     *
     * @access public
     */
    public function allow(
        $roles = null,
        $resources = null,
        $privileges = null,
        $callback = null
    );

    /**
     * Add a Deny rule
     *
     * @param mixed $roles      Roles to allow
     * @param mixed $resources  Resources to allow roles to act on
     * @param mixed $privileges Privileges to allow
     * @param mixed $callback   Callback to determine applicability
     *
     * @return $this
     *
     * @access public
     */
    public function deny(
        $roles = null,
        $resources = null,
        $privileges = null,
        $callback = null
    );

    /**
     * Check if role is allowed privilege on resource
     *
     * @param mixed $role      Role to check
     * @param mixed $resource  Resource to check for role privilege
     * @param mixed $privilege Privilege to check
     *
     * @return bool
     *
     * @access public
     */
    public function isAllowed($role, $resource, $privilege);
}
