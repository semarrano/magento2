<?php

namespace Ntt\Blogs\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (!$setup->tableExists('ntt_blogs')) {
            $table = $setup->getConnection()->newTable(
                $setup->getTable('ntt_blogs')
            )
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary' => true,
                        'unsigned' => true,
                    ],
                    'ID'
                )
                ->addColumn(
                    'nombre',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Nombre'
                )
                ->addColumn(
                    'titulo',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Titulo'
                )
                ->addColumn(
                    'contenido',
                    Table::TYPE_TEXT,
                    '64k',
                    ['nullable' => false],
                    'Contenido'
                )
                ->addColumn(
                    'imagen',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => true],
                    'Imagen'
                )
                ->addColumn(
                    'hora_de_creacion',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Hora de Creación'
                )
                ->addColumn(
                    'hora_de_la_ultima_actualizacion',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                    'Hora de la Última Actualización'
                )
                ->addColumn(
                    'estado',
                    Table::TYPE_BOOLEAN,
                    null,
                    ['nullable' => false, 'default' => 1],
                    'Estado'
                )
                ->setComment('Tabla de Blogs');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
