<?php

/*
|--------------------------------------------------------------------------
| ContribuicaoForm.php
|--------------------------------------------------------------------------|
| Arquivo Classe que implementa toda contrução dos campos do formulário
| author Gianlucca Augusto <gianlucca.augusto@extreme.digital>
| version 1.1
| copyright Proderj 2022.
*/

/**
 * @file
 * Contains \Drupal\contribuicao\Form\ContribuicaoForm.
 * ClassForm
 */

namespace Drupal\contribuicao\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\file\Entity\File;
use Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * Formulário de contribuicao
 */
class ContribuicaoForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'contribuicao_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $hdd_file_location = $this->buildFileLocaton('arquivos_de_contribuicao');
    $protocolo = date("Ymd").rand(2,999);

    $form['description'] = [
      '#type' => 'markup',
      '#markup' => '<h1>Formulário de Contato</h1>',
    ];

    $form['contribuicaoprotocolo'] = array(
      '#type' => 'hidden',
      '#title' => t('Seu Protocolo, você receberá o mesmo por email'),
      '#size' => 60,
      '#maxlength' => 100,
      '#value' => $protocolo,
      '#attributes'=> [
        'class' => ['inputs'],
        'readonly' => 'readonly'
      ]
    );
    $form['contribuicaonome'] = array(
      '#type' => 'textfield',
      '#title' => t('Nome Completo'),
      '#size' => 60,      
      '#maxlength' => 60,
      '#required' => TRUE,
      '#attributes'=> [
        'placeholder' => 'Nome Completo',
        'class' => ['inputs']
      ]
    );

    $form['contribuicaotelefone'] = array(
      '#type' => 'textfield',
      '#title' => t('Telefone'),
      '#size' => 60,
      '#maxlength' => 100,
      '#required' => TRUE,
      '#attributes'=> [
        'placeholder' => '( 00 ) 00000-0000',
        'class' => ['inputs']
      ]
    );

    $form['contribuicaoemail'] = array(
      '#type' => 'email',
      '#title' => t('E-mail'),
      '#size' => 60,
      '#maxlength' => 100,
      '#required' => TRUE,
      '#attributes'=> [
        'placeholder' => 'E-mail válido',
        'class' => ['inputs']
      ]
    );

   /*$form['contribuicaoobs'] = array(
      '#title' => t('Observatório'),
      '#type' => 'select',
      '#required' => TRUE,
      '#description' => 'Ex.: Pacto RJ, RJ para Todos, Segurança Presente.',
      '#options' => array(
        t('Pacto RJ'), t('RJ para Todos'),
        t('Segurança Presente')
      ),
      '#attributes'=> [
        'class' => ['inputs']
      ]
    );

    $form['contribuicaoassunto'] = array(
      '#title' => t('Escolha uma opção abaixo, que atenda seu contato com o nosso DPO (encarregado)'),
      '#type' => 'select',
      '#required' => TRUE,
      '#description' => '',
      '#options' => array(
        t('Informação'), t('Acesso ( Saber os dados que temos sobre você )'),
        t('Correção ( Correção dos seus dados pessoais incompletos, inexatos ou desatualizados )') , t('Outros') , 
      ),
      '#attributes'=> [
        'class' => ['inputs']
      ]
    );*/

    $form['contribuicaomsg'] = array(
      '#type' => 'textarea',
      '#title' => t('Mensagem'),
      '#size' => 60,
      '#maxlength' => 1500,
      '#required' => TRUE,
      '#resizable' => 'none',
      '#attributes'=> [
        'class' => ['inputs'],
        'placeholder' => 'Mensagem',
      ]
    );

    /*$form['files'] = array(
      '#title' => t('Adicionar Arquivo(s)'),
      '#type' => 'managed_file',
      '#required' => FALSE,
      '#upload_location' => 'public://'.$hdd_file_location,
      '#multiple' => TRUE,
      '#attributes'=> [
        'class' => ['inputs']
      ],
      '#upload_validators' => array(
        'file_validate_extensions' => $this->getAllowedFileExtensions(),
      ),
      //'#weight' => '30',
    );*/
    $form['#attributes']['enctype'] = 'multipart/form-data';
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Enviar'),
      '#attributes'=> [
        'class' => ['botao']
      ]
    );
    return $form;
  }

  /**
   * @return array
   */
  private function getAllowedFileExtensions(){
    return array('pdf');
  }

  /**
   * @param $entity_type
   * @return string
   */
  public function buildFileLocaton($entity_type){
    // Build file location
    return $entity_type.'/'.date('Y_m_d');
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
	/**
	 * Valida nome
	 * Apenas letras
     */
    $contribuicaonome = trim($form_state->getValue('contribuicaonome'));
    
    if (!preg_match("/^([a-zA-Z ]+)$/", $contribuicaonome)) {
	    $form_state->setErrorByName('contribuicaonome', $this->t('Carateres inválidos no seu nome'));
    }
    
    /**
     * Valida email
     */
    $contribuicaoemail = trim($form_state->getValue('contribuicaoemail'));
  
    if ($contribuicaoemail !== '' && !\Drupal::service('email.validator')->isValid($contribuicaoemail)) {
      $form_state->setErrorByName('contribuicaoemail', $this->t('Endereço de email inválido'));  
    }

    /**
     * Valida Justificativa
     */
    // $contribuicaojustificativa = trim($form_state->getValue('contribuicaojustificativa'));
  
    // if ($contribuicaojustificativa == '') {
    //   $form_state->setErrorByName('contribuicaojustificativa', $this->t('A justificativa não pode estar vazia'));  
    // }

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /**
     * Pega os dados do Imput
     */
    $contribuicaoprotocolo = trim($form_state->getValue('contribuicaoprotocolo'));
    $contribuicaonome = trim($form_state->getValue('contribuicaonome'));
    $contribuicaotelefone = trim($form_state->getValue('contribuicaotelefone'));
    $contribuicaoemail = trim($form_state->getValue('contribuicaoemail'));
    $contribuicaoobs = trim($form_state->getValue('contribuicaoobs'));
    $contribuicaoassunto = trim($form_state->getValue('contribuicaoassunto'));
    $contribuicaomsg = trim($form_state->getValue('contribuicaomsg'));
    $contribuicaouplad = $form_state->getValue('contribuicaouplad');

    $files = $form_state->getValue('files');

    /**
    * Pegando os arquivos
    */
    $filenames = array();
    foreach ($files as $fid) {
      $file = File::load($fid);
      $file->setPermanent();
      $file->save();
      $name = $file->getFilename();
      $url = file_create_url($file->getFileUri());
      $filenames [] = [$name, $url];
      
    }
    /**
     * Pega o email que será enviado 
     */
    $config = $this->config('contribuicao.adminsettings');
    $contribuicao_admin_email = trim($config->get('contribuicao_admin_email'));
    
    if ($contribuicao_admin_email) {
      /**
       * Envia email
       */
      $mail_manager = \Drupal::service('plugin.manager.mail');
      $langcode = \Drupal::currentUser()->getPreferredLangcode();
      $params['message']['contribuicaoprotocolo'] = $contribuicaoprotocolo;
      $params['message']['contribuicaonome'] = $contribuicaonome;
      $params['message']['contribuicaotelefone'] = $contribuicaotelefone;
      $params['message']['contribuicaoemail'] = $contribuicaoemail;
      $params['message']['contribuicaoobs'] = $contribuicaoobs;
      $params['message']['contribuicaoassunto'] = $contribuicaoassunto;
      $params['message']['contribuicaomsg'] = $contribuicaomsg;

      $params['message']['contribuicaofiles'] = $filenames;

      
      $to = $contribuicao_admin_email;
      //envia email para o email que foi salvo no painel de administrativo
      $result = $mail_manager->mail('contribuicao', 'contribuicao_notificacao', $to, $langcode, $params, NULL, 'true');
      //envia protocolo para o usuário que solicitou o email
      $result = $mail_manager->mail('contribuicao', 'contribuicao_protocolo', $contribuicaoemail, $langcode, $params, NULL, 'true');
   }

    /**
     * Retorna mensagem Sucesso
     */
    \Drupal::messenger()->addStatus(t('Obrigado ' . $contribuicaonome . '! Sua mensagem foi enviada com sucesso! Enviamos o Protocolo<b> '.$contribuicaoprotocolo.' </b> para seu email!'));
  }
 
}
