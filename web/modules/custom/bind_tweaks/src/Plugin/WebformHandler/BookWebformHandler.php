<?php

namespace Drupal\bind_tweaks\Plugin\WebformHandler;

use Drupal\node\Entity\Node;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\node\NodeInterface;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Render\Markup;

/**
 * Create a new node entity from a webform submission.
 *
 * @WebformHandler(
 *   id = "book_handler",
 *   label = @Translation("book_handler"),
 *   category = @Translation("Entity Creation"),
 *   description = @Translation("Creates a book from Webform Submissions."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */
class BookWebformHandler extends WebformHandlerBase {

  /**
   * The entity manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);

    $instance->entityTypeManager = $container->get('entity_type.manager');

    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(WebformSubmissionInterface $webform_submission, $update = TRUE) {
    // Get an array of the values from the submission.
    $values = $webform_submission->getData();
    $node_storage = $this->entityTypeManager->getStorage('node');
    $query = \Drupal::entityQuery('node')
      ->condition('status', NodeInterface::PUBLISHED)
      ->condition('type', 'books')
      ->sort('created', 'DESC');
    $result = $query->execute();
    $nid = reset($result);
    $node = $node_storage->load($nid);
    if ($node->field_images && $node->field_images->count() < 8) {
      $node->field_images->appendItem($values['image']);
      $node->field_titles->appendItem($values['title']);

      if ($node->field_images->count() == 8) {
        $node->setTitle($values['title']);
        $node->status = TRUE;
      }
      $node->save();
    }

    else {
      $node_args = [
        'type' => 'books',
        'uid' => 1,
        'status' => TRUE,
        'title' => $values['title'],
        'field_images' => [
          $values['image'],
        ],
        'field_titles' => [
          $values['title'],
        ],
      ];

      $node = Node::create($node_args);
      $node->save();
    }

    $message = "<pYour contribution has been to the publication:" . $node->toLink(). "</p>";

    \Drupal::messenger()->addStatus(Markup::create(Xss::filter($message)));

    // $node = Node::create($node_args);
    // $node->save();
  }

}
