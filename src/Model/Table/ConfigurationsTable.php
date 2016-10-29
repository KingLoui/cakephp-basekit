<?php
namespace KingLoui\BaseKit\Model\Table;

use Gourmet\Aroma\Model\Table\ConfigurationsTable as BaseTable;

class ConfigurationsTable extends BaseTable
{
    /**
     * {@inheritdoc}
     *
     * @param array $config List of options for this table
     * @return void
     */
    public function initialize(array $config = [])
    {
        $this->table('configurations');
        $this->displayField('value');
        $this->addBehavior('Timestamp');
    }
}