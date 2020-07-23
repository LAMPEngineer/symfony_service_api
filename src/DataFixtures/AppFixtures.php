<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Employee;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $faker = Factory::create();

        for ($i = 0; $i < 3; $i++) {
            $employee = new Employee();
            $employee->setEmpFirstname($faker->emp_Firstname);
            $employee->setEmpLastname($faker->emp_Lastname);
            $employee->setEmail($faker->email);
            $employee->setMobile($faker->mobile);
            $employee->setTelephone($faker->telephone);
            $employee->setDateofbirth($faker->dateofbirth);
                        
            $manager->persist($employee);
        }

        $manager->flush();
    }
}
