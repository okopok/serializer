<?php
/**
 * @author Sergey Zaikin <szmship@yandex-team.ru>
 *         Date: 25.12.14
 */

namespace JMS\Serializer\Tests\Fixtures\Discriminator\InMiddle;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\Discriminator(field = "type", map = {
 *    "heron": "JMS\Serializer\Tests\Fixtures\Discriminator\InMiddle\Heron",
 *    "raven": "JMS\Serializer\Tests\Fixtures\Discriminator\InMiddle\Raven",
 * })
 */
abstract class Bird extends Animal
{

} 