<?php
/**
 * Created by PhpStorm.
 * User: sambare
 * Date: 30/05/18
 * Time: 0.28
 */

namespace App\DataFixtures;


use App\Entity\MicroPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppDataFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++){
            $microPost = new MicroPost();
            $microPost->setText('some random text ' .rand(0,100));
            $microPost->setTime(new \DateTime('2018-05-29'));
            $manager->persist($microPost);
        }
        $manager->flush();
    }
}