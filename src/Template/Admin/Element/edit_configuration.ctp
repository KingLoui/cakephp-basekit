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
			e.preventDefault();
		  var url = $(this).attr('action');
		  var data = $(form).serialize();
		  $.ajax({
				type: 'post',
				url: url,
				data: data,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				},
				success: function(res)
				{
					console.log('Redirect to: ' + res._redirect.url + ' (status code ' + res._redirect.status + ')');
					console.log('Message: ' + res._message[0].message);
					console.log("Raw data: " + JSON.stringify(res));
				},
				error: function(e) {
					alert("An error occurred: " + JSON.stringify(e));
					console.log(e);
				}
		  });
	});

	});
</script>
<?php $this->end(); ?>