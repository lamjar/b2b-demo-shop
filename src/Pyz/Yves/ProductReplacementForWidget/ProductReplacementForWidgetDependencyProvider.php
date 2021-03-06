<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductReplacementForWidget;

use SprykerShop\Yves\ProductReplacementForWidget\ProductReplacementForWidgetDependencyProvider as SprykerProductReplacementForWidgetDependencyProvider;

class ProductReplacementForWidgetDependencyProvider extends SprykerProductReplacementForWidgetDependencyProvider
{
    /**
     * @return string[]
     */
    protected function getProductDetailPageProductReplacementsForWidgetPlugins(): array
    {
        return [];
    }
}
