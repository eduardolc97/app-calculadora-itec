<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ensaios Controller
 *
 * @property \App\Model\Table\EnsaiosTable $Ensaios
 * @method \App\Model\Entity\Ensaio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnsaiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ensaios = $this->paginate($this->Ensaios);

        $this->set(compact('ensaios'));
    }

    /**
     * View method
     *
     * @param string|null $id Ensaio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ensaio = $this->Ensaios->get($id, [
            'contain' => ['DadosEnsaio'],
        ]);

        $this->set(compact('ensaio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ensaio = $this->Ensaios->newEmptyEntity();
        if ($this->request->is('post')) {
            $ensaio = $this->Ensaios->patchEntity($ensaio, $this->request->getData());
            if ($this->Ensaios->save($ensaio)) {
                $this->Flash->success(__('The ensaio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ensaio could not be saved. Please, try again.'));
        }
        $this->set(compact('ensaio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ensaio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ensaio = $this->Ensaios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ensaio = $this->Ensaios->patchEntity($ensaio, $this->request->getData());
            if ($this->Ensaios->save($ensaio)) {
                $this->Flash->success(__('The ensaio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ensaio could not be saved. Please, try again.'));
        }
        $this->set(compact('ensaio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ensaio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ensaio = $this->Ensaios->get($id);
        if ($this->Ensaios->delete($ensaio)) {
            $this->Flash->success(__('The ensaio has been deleted.'));
        } else {
            $this->Flash->error(__('The ensaio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
