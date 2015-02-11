<?php

namespace yii2masonry\tests\unit;

use Codeception\TestCase\Test;
use yii2masonry\yii2masonry;

/**
 * This is ScrollPagerTest unit test.
 *
 * @see       yii2masonry\yii2masonry
 * @license   https://github.com/philippfrenzel/yii2masonry/blob/master/LICENSE.md MIT
 *
 * @author    Philipp Frenzel <philipp@frenzel.net>
 */
class MasonryTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \yii2masonry\yii2masonry
     */
    protected $instance;

    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->instance = new yii2masonry();
    }

    /**
     * @inheritdoc
     */
    protected function _after()
    {
        $this->instance = null;
    }
}
