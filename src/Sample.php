<?php

namespace Nextimage\Nextimage;

/**
 * Class Sample
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Sample
{

    /**
     * @var  \Nextimage\Nextimage\Config
     */
    private $config;

    /**
     * Sample constructor.
     *
     * @param \Nextimage\Nextimage\Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param $name
     *
     * @return  string
     */
    public function sayHello($name)
    {
        $greeting = $this->config->get('greeting');

        return $greeting . ' ' . $name;
    }

}
