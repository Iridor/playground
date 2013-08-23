<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
	}
	
	
	/***********************************************/
	/***********************************************/
	
	public function index() {

		$data['widgets'] = Widget::all();
		$data['totalValue'] = 0;

		foreach($data['widgets'] as $widget) {
			$data['totalValue'] += $widget->value;
		}

		$this->load->view('pages/edit/index',$data);
	}

	/***********************************************/
	/***********************************************/

	public function edit_item($item_id) {

		$data['widget'] = Widget::find($item_id);

		if(isset($_POST['submit'])) {

			$data['widget']->name = $_POST['widgetName'];
			$data['widget']->description = $_POST['widgetDesc'];
			$data['widget']->value = $_POST['widgetValue'];
			$data['widget']->order = $_POST['widgetOrder'];

			$data['widget']->save();

			redirect('edit/edit_item/'.$item_id);

		}

		$this->load->view('pages/edit/edit_item', $data);
	}

	/***********************************************/
	/***********************************************/

	public function delete_item($item_id) {

		$data['widget'] = Widget::find($item_id);
		$data['widget']->delete();

		redirect('edit');

	}

}
