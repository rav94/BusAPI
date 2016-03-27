<?php namespace App;
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:53 PM
 */

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    protected $table = 'bus_routes';

    protected $fillable = ['route_name', 'starting_location', 'finishing_location','estimated_time'];
}
?>