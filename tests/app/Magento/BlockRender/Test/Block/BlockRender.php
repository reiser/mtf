<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\BlockRender\Test\Block;

use Magento\Mtf\Block\Form;
use Magento\Mtf\Fixture\FixtureInterface;

/**
 * Block for manage render form.
 */
class BlockRender extends Form
{
    /**
     * Perform render.
     *
     * @param FixtureInterface $fixture
     * @return void
     */
    public function render(FixtureInterface $fixture)
    {
        /** @var \Magento\Mtf\Test\Fixture\Test $fixture */
        $this->callRender($fixture->getType(), 'fill', ['fixture' => $fixture]);
    }
}
