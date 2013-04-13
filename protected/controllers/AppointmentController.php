<?php

class AppointmentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Appointment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Appointment']))
		{
			$model->attributes=$_POST['Appointment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Appointment']))
		{
			$model->attributes=$_POST['Appointment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Appointment');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Appointment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Appointment']))
			$model->attributes=$_GET['Appointment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Appointment the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Appointment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Appointment $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='appointment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function actionNotify()
	{
		$accountSid = 'AC7da2b11c3326620a43aae0fc90c5598c';
		$authToken  = 'ab6eb122e59f4aefba78d5a71360a4b2';


		$accountSid = 'AC90f56453b72d3a777165b31b542cb3f0';
		$authToken = 'db20849a3789ec65c94ea73d11e75ba6';
		// Unload the Yii Base to prevent spl_autoload conflicts 
		spl_autoload_unregister(array('YiiBase','autoload')); 
		require "Services/Twilio.php";  
	
		$message = 'Hackathon ' . date('l jS \of F Y h:i:s A');	

		$client = new Services_Twilio($accountSid, $authToken);
		
//$message = $client->account->sms_messages->create("+15005550006", "+14108675309", "All in the game, yo", array());
	$message = $client->account->sms_messages->create("+19543562075", "+17542451861", $message, array());

		echo '<pre>';
		//var_dump($message->client->last_response);
		echo '<div>'; 
		echo '<strong>To :</strong> ' . $message->client->last_response->to . '<br>';
		echo '<strong>From : </strong>' . $message->client->last_response->from . '<br>';
		echo '<strong>Message : </strong>' . $message->client->last_response->body . '<br>';	
		echo '<strong>Status :</strong> ' . $message->client->last_response->status . '<br>';
		echo '</div>';
		spl_autoload_register(array('YiiBase','autoload')); 
	}
}
