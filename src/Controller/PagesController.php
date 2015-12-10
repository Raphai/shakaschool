<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Inflector;

class PagesController extends AppController
{

    public function index()
    {
        $this->set('pages', $this->paginate($this->Pages));
        $this->set('_serialize', ['pages']);
    }

    public function view($id = null)
    {
        //VARIABLES
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);
        $title = $page->title;
        $description = $page->description;
        $keywords = $page->keywords;
        //LAYOUT PERSONALISE
        $this->viewBuilder()->layout('frontend');
        //ENVOI DES VARIABLES
        $this->set(compact('v','title','description','keywords','page'));
        //FICHIER DE VUE PERSONALISE
        if(!empty($page->templatename)):
            $this->render($page->templatename);
        endif;
    }

    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            //VARAIALBES
            $title = $this->request->data['title'];
            $templateName = $this->request->data['templatename'];
            //FORMATAGE DES CHAMPS
            $title = mb_strtolower($title,'UTF-8');
            $title = ucfirst($title);
            $templateName = mb_strtolower($templateName,'UTF-8');
            //SLUGIFY
            $slug = Inflector::slug(mb_strtolower($title,'UTF-8'), '-');
            $templateName = Inflector::slug(mb_strtolower($templateName,'UTF-8'), '_');
            //SAUVEGARDE DES MODIFICATIONS
            $page->title = $title;
            $page->slug = $slug;
            $page->templatename = $templateName;

            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The page could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
    }

    public function edit($id = null)
    {
        $page = $this->Pages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $page = $this->Pages->patchEntity($page, $this->request->data);
            //VARAIALBES
            $title = $this->request->data['title'];
            $templateName = $this->request->data['templatename'];
            // strToLower UTF8
            $title = mb_strtolower($title,'UTF-8');
            $title = ucfirst($title);
            $templateName = mb_strtolower($templateName,'UTF-8');
            //SLUGIFY
            $slug = Inflector::slug(mb_strtolower($title,'UTF-8'), '-');
            $templateName = Inflector::slug(mb_strtolower($templateName,'UTF-8'), '_');
            //SAUVEGARDE DES MODIFICATIONS
            $page->title = $title;
            $page->slug = $slug;
            $page->templatename = $templateName;

            if ($this->Pages->save($page)) {
                $this->Flash->success(__('The page has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The page could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        if ($this->Pages->delete($page)) {
            $this->Flash->success(__('The page has been deleted.'));
        } else {
            $this->Flash->error(__('The page could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


    public function accueil() {
        $this->viewBuilder()->layout('frontend');
        $title = 'École de conduite SHAKASCHOOL - Auto école à Poitiers';
        $description = 'SHAKASCHOOL est une auto école sitée à Poitiers sur le quartier de la Demi Lune. Nous vous proposons des formations auto et moto.';
        $keywords ='';
        $this->set(compact('v','title','description','keywords'));
    }/*END function */

    public function planDeSite() {
        $this->viewBuilder()->layout('frontend');
        $title = 'Plan de site - SHAKASCHOOL';
        $description = 'Plan du site internet - SHAKASCHOOL';
        $keywords ='plan de site';
        $this->set(compact('v','title','description','keywords'));
    }/*END function */





//    public function projet($id = null , $slug = null ) {
//        $this->viewBuilder()->layout('frontend');
//        $this->loadModel('Projets');
//        $v['projet'] = $this->Projets->get($id);
//        $this->loadModel('Images');
//        $v['images'] = $this->Images->find('all',[
//            'conditions' => ['projet_id' => $id],
//        ]);
//        $v['nbimg']  = $v['images']->count();
//
//        $this->loadModel('Infos');
//        $infos = $this->Infos->get(1);
//        $v['info-mentions'] = $infos['mentionslegales'];
//
//        $title = 'Projet d architecture : '.$v['projet']['title'] . ' - AJSA';
//        $description = 'AJSA (Atelier Julien Secheresse Architecte) vous présente le projet :  '.$v['projet']['title'].', '.$v['projet']['minidesc'];
//        $keywords ='Architecture, architecture d interieur, architecte a poitiers';
//        $this->set(compact('v','title','description','keywords'));
//    }/*END function */

    public function manager() {
        $this->viewBuilder()->layout('backend');
        $title = 'SHAKASCHOOL - MANAGER';
        $description = 'SHAKASCHOOL - MANAGER';
        $keywords ='Keyword test';
        $this->set(compact('v','title','description','keywords'));
    }/*END function */
}