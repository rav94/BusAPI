<?php namespace App;
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:33 PM
 */

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';
    
    protected $fillable = ['driver_name', 'contact_number'];
}
?>