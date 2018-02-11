<?php namespace ChemprenX\AngkaHarapanHidup\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ChemprenX\AngkaHarapanHidup\Facades\AngkaHarapanHidup;
use ChemprenX\AngkaHarapanHidup\Models\AngkaHarapanHidupModel;

/**
 * The AngkaHarapanHidupController class.
 *
 * @package ChemprenX\AngkaHarapanHidup
 * @author  chemprenx <developer.chemprenx@gmail.com>
 */
class AngkaHarapanHidupController extends Controller
{
    public function demo()
    {
        return AngkaHarapanHidup::welcome();
    }
}
