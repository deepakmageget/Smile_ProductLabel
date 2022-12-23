<?php 
namespace Smile\ProductLabel\Ui\Component\Listing\Column;
 
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
 
class Category extends \Magento\Ui\Component\Listing\Columns\Column
{
 
    public function prepareDataSource(array $dataSource)
    {
        $fieldName = $this->getData('name');
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item):
              
                $category_id = $item['category_id'];
 
                $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
                // $product = $objectManager->create('Magento\Catalog\Model\Product')->load($category_id);
                // $cats = $product->getCategoryIds();
                $str = "Hello world. It's a beautiful day.";
                $category_ids = explode(",",$category_id);
               
                $categories = array();
                if ($category_id):
                    foreach($category_ids as $ids):
                        $category = $objectManager->create('Magento\Catalog\Model\Category')->load($ids);
                        $categories[] = $category->getName();
                    endforeach;
                   
                endif;
                $item[$fieldName] = implode(',', $categories);
              
            endforeach;
        }
          
               
        return $dataSource;
    }
}