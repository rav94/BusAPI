<?php namespace App;
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:22 PM
 */

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'buses';
    
    protected $fillable = ['bus_name','bus_brand','bus_seat_no'];
}
?>