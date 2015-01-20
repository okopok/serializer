<?php
/**
 * @author Sergey Zaikin <szmship@yandex-team.ru>
 *         Date: 25.12.14
 */

namespace JMS\Serializer\Tests\Fixtures\Discriminator\InMiddle;

use JMS\Serializer\Annotation as Serializer;

abstract class Animal
{

  /**
   * @Serializer\Type("integer")
   */
  protected $id;

  /**
   * @param int $id
   */
  public function __construct($id)
  {
    $this->id = (int)$id;
  }

} 