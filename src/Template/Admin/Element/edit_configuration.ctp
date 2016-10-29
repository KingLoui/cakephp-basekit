<?php 
use Cake\ORM\TableRegistry;
$configurations = TableRegistry::get('KingLoui/BaseKit.Configurations');
$query = $configurations->find('all')
    ->where(['Configurations.path =' => 'BaseKit.Menu.AdminMenu.Dashboard.uri.plugin']);

$configuration = $query->first();
if($configuration):
?>

<?= $this->Form->create($configuration, ['class' => 'ajaxconfig', 'url' => ['controller' => 'Configurations','action' => 'edit']]) ?>
<?= $this->Form->input('path', ['type' => 'hidden']) ?> 
<?= $this->Form->input('value', ['label' => false]) ?>            
<?= $this->Form->button(__('Save'), ['class' => 'btn-primary']); ?>
<?= $this->Form->end(); ?>

<?php endif; ?>



 <?php $this->start('script_body'); ?>
    <script>
        $(document).ready(function(){

        	var form = ".ajaxconfig";
        	$(form).submit(function(e) {
			    var url = $(this).attr('action');
			    $.ajax({
			           type: "POST",
			           url: url,
			           data: $(form).serialize(),
			           success: function(data)
			           {
			               console.log(data); 
			               //alert(data); 
			           },
			           error: function (xhr, ajaxOptions, thrownError) {
				        alert(xhr.status+" "+thrownError);
				      }
			    });
			    e.preventDefault();
			});

        });
    </script>
<?php $this->end(); ?>