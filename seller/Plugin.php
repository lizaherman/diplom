<?php namespace Ipag\Seller;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents(): array
    {
        return [

        ];
    }

    /**
     * Plugin boot method
     */
    public function boot()
    {
        $this->addEventListener();
    }

    /**
     * Add event listeners
     */
    protected function addEventListener()
    {

    }
}
