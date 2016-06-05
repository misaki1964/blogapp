<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 */
class PostsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
//	public $scaffold;

	public $components = ['Paginator', 'RequestHandler', 'Session'];

// $helpers を追加 ここから
	public $helpers = [
		'Html' => ['className' => 'BoostCake.BoostCakeHtml'],
		'Form' => ['className' => 'BoostCake.BoostCakeForm'],
	];
// ここまで


	public function index() {
		$this->set('posts', $this->Paginator->paginate());
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create($this->request->data);
			if ($this->Post->save()) {
// メッセージの出力部分に boostrap のパラメータを追加
				$this->Session->setFlash(
					__('新しい記事を受け付けました。'),
					'alert',
					['plugin' => 'BoostCake', 'class' => 'alert-success']
				);
// ここまで
				return $this->redirect(['action' => 'index']);
			} else {
// メッセージの出力部分に boostrap のパラメータを追加
				$this->Session->setFlash(
					__('記事の投稿に失敗しました。入力内容を確認して再度投稿してください。'),
					'alert',
					['plugin' => 'BoostCake', 'class' => 'alert-danger']
				);
// ここまで
			}
		}
	}
}
