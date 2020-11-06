<?php

namespace BetProject\Dto\ProxyService;

class OutputProxyDto
{
    private string $ip;
    private int $port;
    private string $login;
    private string $password;
    private string $country;
    private string $provider;

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return OutputProxyDto
     */
    public function setIp(string $ip): OutputProxyDto
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param int $port
     * @return OutputProxyDto
     */
    public function setPort(int $port): OutputProxyDto
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return OutputProxyDto
     */
    public function setLogin(string $login): OutputProxyDto
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return OutputProxyDto
     */
    public function setPassword(string $password): OutputProxyDto
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return OutputProxyDto
     */
    public function setCountry(string $country): OutputProxyDto
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     * @return OutputProxyDto
     */
    public function setProvider(string $provider): OutputProxyDto
    {
        $this->provider = $provider;
        return $this;
    }
}