<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'appointment-grid',
        'dataProvider'=>$model->search(),
//      'filter'=>$model,
        'columns'=>array(
                'id',
                'patient_id',
                'appointment_date',
                'note',
        ),
)); ?>

