<?php

namespace Nixilla\JobeetBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Nixilla\JobeetBundle\Entity\JobeetJob;
use DateTime;

class JobeetJobTest extends WebTestCase
{
  public function testJob()
  {
    $client = static::createClient();
    $em = $client->getContainer()->get('doctrine.orm.entity_manager');

    $job = new JobeetJob();
    $job->setPosition('Web developer');
    $job->setCompany('Nixilla Limited');
    $job->setLocation('London, UK');
    $job->setDescription(
      'You\'ve already developed websites with symfony and you want to work
      with Open-Source technologies. You have a minimum of 3 years
      experience in web development with PHP or Java and you wish to
      participate to development of Web 2.0 sites using the best
      frameworks available'
    );
    $job->setHowToApply('Send your resume to job@example.com');
    $job->setToken(md5(time()));
    $job->setIsPublic(true);
    $job->setIsActivated(true);
    $job->setEmail('job@example.com');
    $job->setExpiresAt(new DateTime(date('c',strtotime('next Monday'))));

    $em->persist($job);

    $em->flush();

    $id = $job->getId();

    unset($job);

    //$job = $em->find('Nixilla\JobeetBundle\Entity\JobeetJob',$id);
    $job = $em->getRepository('NixillaJobeetBundle:JobeetJob')->find($id);

    $this->assertEquals($job->getPosition(), 'Web developer');
  }
}
