<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'patient-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
                'name',
                'phone',
        ),
)); ?>
