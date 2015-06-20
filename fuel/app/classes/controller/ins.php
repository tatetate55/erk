<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Ins extends Controller
{

	/**
	 * The basic ins message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
$view = View::forge('ins/index');
//$msgs = array();
$error = array();
$answer = array();
$detail = array();

$error[] = array('id' => 1, 'msg' => 'エラーメッセージ');
$detail[] = array('id' => 1, 'detail' => '詳細');
$answer[] = array('id' => 1, 'anser' => '解決方法');
$view->set('error', $error);
$view->set('answer', $answer);
$view->set('detail', $detail);
//$view->set('msgs', $msgs);
		//return Response::forge(View::forge('ins/index', $msgs));

return $view;
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('ins/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('ins/404'), 404);
	}
}
