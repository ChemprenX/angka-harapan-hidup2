<?php namespace ChemprenX\AngkaHarapanHidup\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The AngkaHarapanHidup facade.
 *
 * @package ChemprenX\AngkaHarapanHidup
 * @author  chemprenx <developer.chemprenx@gmail.com>
 */
class AngkaHarapanHidup extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'angka-harapan-hidup';
    }
}
