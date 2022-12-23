<?php 

namespace Smile\ProductLabel\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Display implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            0 => [
                'label' => 'Product View',
                'value' => '1'
            ],
            1 => [
                'label' => 'Category View',
                'value' => '2'
            ],
        ];

        return $options;
    }
}