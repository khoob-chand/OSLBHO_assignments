<?php
/**
 * @file
 * Contains \Drupal\snippets\Plugin\Field\FieldWidget\SnippetsDefaultWidget.
 */

namespace Drupal\basicmodule\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Plugin implementation of the 'snippets_default' widget.
 *
 * @FieldWidget(
 *   id = "snippets_default",
 *   label = @Translation("Snippets default"),
 *   field_types = {
 *     "snippets_code"
 *   }
 * )
 */
class SnippetsDefaultWidget extends WidgetBase {
    /**
 * {@inheritdoc}
 */
public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $element['source_description'] = array(
          '#title' => $this->t('Description'),
          '#type' => 'textfield',
          '#default_value' => isset($items[$delta]->source_description) ? $items[$delta]->source_description : NULL,
        );
    $element['source_code'] = array(
          '#title' => $this->t('Code'),
          '#type' => 'textarea',
          '#default_value' => isset($items[$delta]->source_code) ? $items[$delta]->source_code : NULL,
        );
    $element['source_lang'] = array(
          '#title' => $this->t('Source language'),
          '#type' => 'textfield',
          '#default_value' => isset($items[$delta]->source_lang) ? $items[$delta]->source_lang : NULL,
        );
    return $element;
  }
  
 }
