<?php
/**
 *                     Mageplaza_HelloWorld extension
 *                     NOTICE OF LICENSE
 * 
 *                     This source file is subject to the Mageplaza License
 *                     that is bundled with this package in the file LICENSE.txt.
 *                     It is also available through the world-wide-web at this URL:
 *                     https://www.mageplaza.com/LICENSE.txt
 * 
 *                     @category  Mageplaza
 *                     @package   Mageplaza_HelloWorld
 *                     @copyright Copyright (c) 2016
 *                     @license   https://www.mageplaza.com/LICENSE.txt
 */
namespace Mageplaza\HelloWorld\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * install tables
     *
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('mageplaza_helloworld_post')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('mageplaza_helloworld_post')
            )
            ->addColumn(
                'post_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true,
                ],
                'Post ID'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable => false'],
                'Post Name'
            )
            ->addColumn(
                'url_key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post URL Key'
            )
            ->addColumn(
                'post_content',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '64k',
                [],
                'Post Post Content'
            )
            ->addColumn(
                'tags',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Tags'
            )
            ->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                1,
                [],
                'Post Status'
            )
            ->addColumn(
                'featured_image',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Featured Image'
            )
            ->addColumn(
                'sample_country_selection',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                3,
                [],
                'Post Sample Country Selection'
            )
            ->addColumn(
                'sample_upload_file',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Sample File'
            )
            ->addColumn(
                'sample_multiselect',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '64k',
                [],
                'Post Sample Multiselect'
            )

            ->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [],
                'Post Created At'
            )
            ->addColumn(
                'updated_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [],
                'Post Updated At'
            )
            ->setComment('Post Table');
            $installer->getConnection()->createTable($table);

            $installer->getConnection()->addIndex(
                $installer->getTable('mageplaza_helloworld_post'),
                $setup->getIdxName(
                    $installer->getTable('mageplaza_helloworld_post'),
                    ['name','url_key','post_content','tags','featured_image','sample_upload_file'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['name','url_key','post_content','tags','featured_image','sample_upload_file'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
