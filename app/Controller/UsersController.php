<?php
App::uses('AppController', 'Controller');

/**
 * Class UsersController
 *
 * @property User $User
 */
class UsersController extends AppController
{
    /*
     * Senaraikan data users
     */
    public function index()
    {
        //Sekiranya terima request form
        if ($this->request->is('post')) {

            $keyword = $this->request->data['User']['keyword'];

            $users = $this->User->find('all', array(
                'conditions' => array(
                    'OR' => array(
                        'User.username LIKE' => "%$keyword%",
                        'User.role LIKE' => "%$keyword%",
                    )
                )
            ));
        } else {//normal url
            #Select * FROM users
            $users = $this->User->find('all');//hasil kan array dari table users
        }

        $this->set(compact('users'));//hantar data user ke view index.ctp
    }

    /**
     * Fungsi simpan data user melalui form
     * @return CakeResponse|null
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Your user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your user.'));
        }
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid user'));
        }

        $user = $this->User->findById($id);
        if (!$user) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Your user has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your user.'));
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }

    /**
     * Papar 1 data user
     * url /nama-project/controller/function/param1/param2
     * url /cakephp-example/users/view/$id/$role
     * @param $id
     */
    public function view($id, $role)
    {
        //Semak id wujud atau tidak
        if (!$this->User->exists($id)) {
            //papar ralat
            throw new NotFoundException('Id User tidak sah');
        }

        #Select * from users where id=? limit 1 order by id asc
        $user = $this->User->find('first', array(
            'conditions' => array('User.id' => $id, 'User.role' => $role)
        ));
        $this->set(compact('user'));
    }

    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->User->delete($id)) {
            $this->Flash->success(
                __('The user with id: %s has been deleted.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The user with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

}