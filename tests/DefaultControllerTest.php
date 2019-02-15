<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testLogin()     {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $form = $crawler->selectButton('Sign in')->form();
        $form['email'] = 'samuel.poudroux@hotmail.fr';
        $form['password'] = 'sam131190';
        $crawler = $client->submit($form);
        $crawler = $client->followRedirect();
        $this->assertSame('/admin/', $client->getRequest()->getPathInfo());
    }

    public function testWrongLogin()     {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $form = $crawler->selectButton('Sign in')->form();
        $form['email'] = 'samuel.poudroux@hotmail.fr';
        // its wrong password just to test environement
        $form['password'] = 'sam130';
        $crawler = $client->submit($form);
        $crawler = $client->followRedirect();
        $this->assertSame('/', $client->getRequest()->getPathInfo());
    }
}