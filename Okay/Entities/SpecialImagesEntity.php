<?php


namespace Okay\Entities;


use Okay\Core\Entity\Entity;

class SpecialImagesEntity extends Entity
{

    protected static $fields = [
        'id',
        'filename',
        'position',
    ];

    protected static $defaultOrderFields = [
        'position ASC',
    ];

    protected static $table = '__spec_img';
    protected static $tableAlias = 'p';

    /*Удаление промо-изображений*/
    public function delete($imageId) {
        if (empty($imageId)){
            return false;
        }

        $filename = $this->cols(['filename'])->get((int)$imageId)->filename;
        if (file_exists($this->config->root_dir . $this->config->special_images_dir . $filename)) {
            unlink($this->config->root_dir . $this->config->special_images_dir . $filename);
        }
        
        $delete = $this->queryFactory->newDelete();
        $delete->from('__spec_img')
            ->where('id=:id')
            ->bindValue('id', (int)$imageId);
        
        $this->db->query($delete);
        
        $update = $this->queryFactory->newUpdate();
        $update->table('__products')
            ->set('special', 'null')
            ->where('special=:special')
            ->bindValue('special', $filename);
        $this->db->query($update);
        
        $update = $this->queryFactory->newUpdate();
        $update->table('__lang_products')
            ->set('special', 'null')
            ->where('special=:special')
            ->bindValue('special', $filename);
        $this->db->query($update);
        
        return true;
    }
}
