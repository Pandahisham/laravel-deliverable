<?php

namespace Tshafer\Deliverable;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Delivery extends Eloquent
{

    /**
     * @var string
     */
    protected $table = 'deliveries';

    /**
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * @var array
     */
    protected $fillable = [
      'deliverable_id',
      'deliverable_type',
      'user_id',
      'priority',
      'created_at',
      'delivered_at',
    ];

    /**
     * @return mixed
     */
    public function deliverable()
    {
        return $this->morphTo();
    }
}