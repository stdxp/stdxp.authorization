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
 * @category  Resource
 * @package   Stdxp\Authorization
 * @author    Jake Johns <jake@jakejohns.net>
 * @copyright 2016 Jake Johns
 * @license   http://jnj.mit-license.org/2016 MIT License
 * @link      https://github.com/stdxp/stdxp.authorization
 */

namespace Stdxp\Authorization;

/**
 * ResourceInterface
 *
 * @category Resource
 * @package  Stdxp\Authorization
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://jnj.mit-license.org/ MIT License
 * @link     https://github.com/stdxp/stdxp.authorization
 */
interface ResourceInterface
{
    /**
     * Get resource id
     *
     * @return string
     *
     * @access public
     */
    public function getResourceId();
}
