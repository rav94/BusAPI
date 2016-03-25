<?php namespace App;
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:35 PM
 */

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = 'conductors';
    
    protected $fillable = ['conductor_name', 'contact_number'];
}
?>