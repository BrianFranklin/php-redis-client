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
namespace Test\Build;

use RedisClient\Client\AbstractRedisClient;

class VersionTest extends \PHPUnit_Framework_TestCase {

    public function test_version() {
        chdir(__DIR__.'/../../');
        $composer = json_decode(file_get_contents('./composer.json'), true);

        $this->assertSame(true, isset($composer['version']));
        $this->assertSame(AbstractRedisClient::VERSION, $composer['version']);

        $readme = file('./README.md');
        $this->assertSame(true, strpos($readme[3], 'RedisClient v'.$composer['version']) > 0);

        $readme = file('./CHANGELOG.md');
        $this->assertSame(true, strpos($readme[2], '### v'.$composer['version']) === 0);
    }

}