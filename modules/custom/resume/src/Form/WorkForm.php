<?php
/**
 * @file
 * Contains \Drupal\resume\Form\WorkForm.
 */
namespace Drupal\resume\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class workForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'resume_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['price_of_property'] = array(
      '#type' => 'textfield',
      '#title' => t('Price of property:'),
      '#required' => TRUE,
    );

    $form['deposit'] = array(
      '#type' => 'textfield',
      '#title' => t('Deposit:'),
      '#required' => TRUE,
    );

    $form['interest_rate'] = array(
      '#type' => 'textfield',
      '#title' => t('Interest rate:'),
      '#required' => TRUE,
    );

    $form['terms_in_years'] = array(
      '#type' => 'textfield',
      '#title' => t('Terms in years:'),
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Register'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('@repayment_value ,Monthly Repayment', array('@repayment_value' 
      => ($form_state->getValue('price_of_property') - $form_state->getValue('deposit')) * 
      (($form_state->getValue('interest_rate') / 12 ) / 100) / 
      (1 - pow( 1 + (($form_state->getValue('interest_rate') / 12) / 100))))));

  }
}