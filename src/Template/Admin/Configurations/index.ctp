<?php $this->assign('title', 'Settings'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
               <table class="table table-striped">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('path') ?></th>
                        <th><?= $this->Paginator->sort('value') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
          
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($configurations as $config) : ?>
                    <tr>
                        <td><?= h($config->path) ?></td>
                        <td><?= h($config->value) ?></td>
                        <td><?= h($config->created) ?></td>
                        <td><?= h($config->modified) ?></td>
                        <td class="actions dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right animated fadeInRight m-t-xs">
                                <li><?= $this->Html->link(__('View'), ['action' => 'view', $config->id]) ?></li>
                                <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $config->id]) ?></li>
                                <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $config->id], ['confirm' => __('Are you sure you want to delete # {0}?', $config->id)]) ?></li>
                            </ul>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination btn-group">
                        <?= $this->Paginator->numbers(['prev' => true, 'next' => true]) ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
