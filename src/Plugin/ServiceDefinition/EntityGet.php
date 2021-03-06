<?php
/**
 * @file
 * Contains \Drupal\services\Plugin\ServiceDefinition\EntityGet.php
 */

namespace Drupal\services\Plugin\ServiceDefinition;


use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\services\ServiceDefinitionBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @ServiceDefinition(
 *   id = "entity_get",
 *   methods = {
 *     "GET"
 *   },
 *   translatable = true,
 *   deriver = "\Drupal\services\Plugin\Deriver\EntityGet"
 * )
 *
 */
class EntityGet extends ServiceDefinitionBase {

  /**
   * {@inheritdoc}
   */
  public function processRequest(Request $request, RouteMatchInterface $route_match, SerializerInterface $serializer) {
    /** @var $entity \Drupal\Core\Entity\EntityInterface */
    $entity = $this->getContextValue('entity');
    return $entity->toArray();
  }

}
