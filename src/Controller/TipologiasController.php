<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipologias Controller
 *
 * @property \App\Model\Table\TipologiasTable $Tipologias
 * @method \App\Model\Entity\Tipologia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipologiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipologias = $this->paginate($this->Tipologias);

        $this->set(compact('tipologias'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipologia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipologia = $this->Tipologias->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('tipologia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipologia = $this->Tipologias->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipologia = $this->Tipologias->patchEntity($tipologia, $this->request->getData());
            if ($this->Tipologias->save($tipologia)) {
                $this->Flash->success(__('The tipologia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipologia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipologia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipologia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipologia = $this->Tipologias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipologia = $this->Tipologias->patchEntity($tipologia, $this->request->getData());
            if ($this->Tipologias->save($tipologia)) {
                $this->Flash->success(__('The tipologia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipologia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipologia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipologia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipologia = $this->Tipologias->get($id);
        if ($this->Tipologias->delete($tipologia)) {
            $this->Flash->success(__('The tipologia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipologia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
