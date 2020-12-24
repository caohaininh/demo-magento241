<?php
/**
 * Demo my custom theme inherit Magento's Luma theme.
 * @author caohaininh@gmail.com
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::THEME, 'frontend/MyTestBase/mycustom', __DIR__);
