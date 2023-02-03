<?php

class MainInfo
{
    private string $firstname;
    private string $lastname;
    private string $profession;
    private string $city;
    private string $country;
    private string $email;
    private string $phone;

    function __construct($firstname, $lastname, $profession, $city, $country, $email, $phone)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->profession = $profession;
        $this->city = $city;
        $this->country = $country;
        $this->email = $email;
        $this->phone = $phone;

    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getProfession(): string
    {
        return $this->profession;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
