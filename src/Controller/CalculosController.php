<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Calculos Controller
 *
 * @property \App\Model\Table\CalculosTable $Calculos
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalculosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $calculos = $this->paginate($this->Calculos);

        $this->set(compact('calculos'));
    }

    /**
     * View method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calculo = $this->Calculos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('calculo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calculo = $this->Calculos->newEmptyEntity();
        if ($this->request->is('post')) {
            $calculo = $this->Calculos->patchEntity($calculo, $this->request->getData());
            if ($this->Calculos->save($calculo)) {
                $this->Flash->success(__('The calculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calculo could not be saved. Please, try again.'));
        }
        $this->set(compact('calculo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calculo = $this->Calculos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calculo = $this->Calculos->patchEntity($calculo, $this->request->getData());
            if ($this->Calculos->save($calculo)) {
                $this->Flash->success(__('The calculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calculo could not be saved. Please, try again.'));
        }
        $this->set(compact('calculo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calculo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calculo = $this->Calculos->get($id);
        if ($this->Calculos->delete($calculo)) {
            $this->Flash->success(__('The calculo has been deleted.'));
        } else {
            $this->Flash->error(__('The calculo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
