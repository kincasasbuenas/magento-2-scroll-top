<?php
/**
 * Copyright (c) 2024 - Kevin casasbuenas (https://kincasasbuenas.dev/)
 * @author      Kevin Casasbuenas <kincasasbuenas@outlook.com>
 * @category    Kinuz
 * @module      Kinuz/ScrollTop
 */ 

declare(strict_types=1);

namespace Kinuz\ScrollTop\Model\Adminhtml\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'left', 'label' => __('Left')],
            ['value' => 'right', 'label' => __('Right')]
        ];
    }

    public function toArray()
    {
        return [
            'left' => __('Izquierda'),
            'right' => __('Derecha')
            
        ];
    }
}