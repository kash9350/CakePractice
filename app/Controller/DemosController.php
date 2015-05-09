<?php
/**
 * 
 */
 class DemosController extends AppController
 {
 	//var $helpers= array('Html','Form');
    var $uses = array('Demo');
 	public function index(){
 		$this->set('demos',$this->Demo->find('all'));
 	}

 	 public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $demo = $this->Demo->findById($id);
        if (!$demo) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('demos', $demo);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Demo->create();
            if ($this->Demo->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(('Unable to add your post.'));
        }
    }
    public function edit($id=null) {
        if (!$id) {
        throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Demo->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Demo->id = $id;
            if ($this->Demo->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('Unable to update your post.');
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
}
 	public function delete_id($id=null){
			$this->Demo->delete($id);      
			$this->Session->setFlash("Post deleted successfully.");     				
            $this->redirect(array('controller'=>'demos','action'=>'index'));
		}
/* 	function __construct(argument)
 	{
 		# code...
 	}*/
 } 
 ?>