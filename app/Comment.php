<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'ticket_id', 'ins_id', 'user_id', 'comment'
      ];
   
      public function ticket()
      {
          return $this->belongsTo(Ticket::class);
      }
   
      public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function institute()
      {
          return $this->belongsTo(Institute::class);
      }
}
