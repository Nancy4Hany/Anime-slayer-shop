<?php

// CustomizedProduct.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomizedProduct extends Model
{
  // Specify the name of the database table
  protected $table = 'customized_products';

  // Set the primary key of the table
  protected $primaryKey = 'id';

  // Indicate that the image_data field is not a primary key
  public $incrementing = false;

  // Indicate that the model should not be timestamped
  public $timestamps = false;

  // Define the fillable fields of the model
  protected $fillable = ['image_data'];
}
