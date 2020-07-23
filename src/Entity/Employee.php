<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\Id()     
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $emp_Firstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $emp_Lastname;

    /**
     * @ORM\Column(type="string", length=191, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobile;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="date")
     */
    private $dateofbirth;


    // Getters and Setters for the private variables 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpFirstname(): ?string
    {
        return $this->emp_Firstname;
    }

    public function setEmpFirstname(string $emp_Firstname): self
    {
        $this->emp_Firstname = $emp_Firstname;

        return $this;
    }

    public function getEmpLastname(): ?string
    {
        return $this->emp_Lastname;
    }

    public function setEmpLastname(string $emp_Lastname): self
    {
        $this->emp_Lastname = $emp_Lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMobile(): ?float
    {
        return $this->mobile;
    }

    public function setMobile(float $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getTelephone(): ?float
    {
        return $this->telephone;
    }

    public function setTelephone(float $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth->format('m-d-Y');
    }

    public function setDateofbirth(\DateTimeInterface $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    /**
     * Function to array 
     * @return array
     */
    public function toArray()
    {
       return [
        'emp_Id' => $this->getId(),
        'emp_Firstname' => $this->getEmpFirstname(),
        'emp_Lastname' => $this->getEmpLastname(),
        'email' => $this->getEmail(),
        'mobile' => $this->getMobile(),
        'telephone' => $this->getTelephone(),
        'dateofbirth' => $this->getDateofbirth()
        ]; 
    }

}
