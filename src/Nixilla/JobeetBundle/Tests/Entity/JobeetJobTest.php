<?php

namespace Nixilla\JobeetBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Nixilla\JobeetBundle\Entity\JobeetJob;

class JobeetJobTest extends WebTestCase
{
  public function testJob()
  {
    $client = static::createClient();
    $em = $client->getContainer()->get('doctrine.orm.entity_manager');

    $job = new JobeetJob();
    $job->setPosition('Web developer');

    $em->persist($job);

    $this->assertEquals($job->getPosition(), 'Web developer');
  }
}
