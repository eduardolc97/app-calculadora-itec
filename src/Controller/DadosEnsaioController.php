<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DadosEnsaio Controller
 *
 * @property \App\Model\Table\DadosEnsaioTable $DadosEnsaio
 * @method \App\Model\Entity\DadosEnsaio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DadosEnsaioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ensaios', 'Dados'],
        ];
        $dadosEnsaio = $this->paginate($this->DadosEnsaio);

        $this->set(compact('dadosEnsaio'));
    }

    /**
     * View method
     *
     * @param string|null $id Dados Ensaio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dadosEnsaio = $this->DadosEnsaio->get($id, [
            'contain' => ['Ensaios', 'Dados'],
        ]);

        $this->set(compact('dadosEnsaio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dadosEnsaio = $this->DadosEnsaio->newEmptyEntity();
        if ($this->request->is('post')) {
            $dadosEnsaio = $this->DadosEnsaio->patchEntity($dadosEnsaio, $this->request->getData());
            if ($this->DadosEnsaio->save($dadosEnsaio)) {
                $this->Flash->success(__('The dados ensaio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dados ensaio could not be saved. Please, try again.'));
        }
        $ensaios = $this->DadosEnsaio->Ensaios->find('list', ['limit' => 200])->all();
        $dados = $this->DadosEnsaio->Dados->find('list', ['limit' => 200])->all();
        $this->set(compact('dadosEnsaio', 'ensaios', 'dados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dados Ensaio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dadosEnsaio = $this->DadosEnsaio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dadosEnsaio = $this->DadosEnsaio->patchEntity($dadosEnsaio, $this->request->getData());
            if ($this->DadosEnsaio->save($dadosEnsaio)) {
                $this->Flash->success(__('The dados ensaio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dados ensaio could not be saved. Please, try again.'));
        }
        $ensaios = $this->DadosEnsaio->Ensaios->find('list', ['limit' => 200])->all();
        $dados = $this->DadosEnsaio->Dados->find('list', ['limit' => 200])->all();
        $this->set(compact('dadosEnsaio', 'ensaios', 'dados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dados Ensaio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dadosEnsaio = $this->DadosEnsaio->get($id);
        if ($this->DadosEnsaio->delete($dadosEnsaio)) {
            $this->Flash->success(__('The dados ensaio has been deleted.'));
        } else {
            $this->Flash->error(__('The dados ensaio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
