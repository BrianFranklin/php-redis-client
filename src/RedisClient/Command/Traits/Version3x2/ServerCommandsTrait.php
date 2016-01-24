<?php
/**
 * This file is part of RedisClient.
 * git: https://github.com/cheprasov/php-redis-client
 *
 * (C) Alexander Cheprasov <cheprasov.84@ya.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RedisClient\Command\Traits\Version3x2;

use RedisClient\Command\Traits\Version2x9\ServerCommandsTrait as ServerCommandsTraitVersion2x9;
trait ServerCommandsTrait {

    use ServerCommandsTraitVersion2x9;

    /**
     * CLIENT REPLY ON|OFF|SKIP
     * Available since 3.2.
     * Time complexity: O(1)
     *
     * @param string $param
     * @return bool|null
     */
    public function clientReply($param) {
        return $this->returnCommand(['CLIENT', 'REPLY'], [$param]);
    }

}
