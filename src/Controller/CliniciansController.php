<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clinicians Controller
 *
 * @property \App\Model\Table\CliniciansTable $Clinicians
 * @method \App\Model\Entity\Clinician[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CliniciansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $clinicians = $this->paginate($this->Clinicians);

        $this->set(compact('clinicians'));
    }

    /**
     * View method
     *
     * @param string|null $id Clinician id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clinician = $this->Clinicians->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('clinician'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clinician = $this->Clinicians->newEmptyEntity();
        if ($this->request->is('post')) {
            $clinician = $this->Clinicians->patchEntity($clinician, $this->request->getData());
            if ($this->Clinicians->save($clinician)) {
                $this->Flash->success(__('The clinician has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clinician could not be saved. Please, try again.'));
        }
        $this->set(compact('clinician'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clinician id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clinician = $this->Clinicians->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clinician = $this->Clinicians->patchEntity($clinician, $this->request->getData());
            if ($this->Clinicians->save($clinician)) {
                $this->Flash->success(__('The clinician has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clinician could not be saved. Please, try again.'));
        }
        $this->set(compact('clinician'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clinician id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clinician = $this->Clinicians->get($id);
        if ($this->Clinicians->delete($clinician)) {
            $this->Flash->success(__('The clinician has been deleted.'));
        } else {
            $this->Flash->error(__('The clinician could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
