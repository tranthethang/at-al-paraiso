<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Channel
 * 
 * @property int $id
 * @property string $channel_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ChannelUsed[] $channel_useds
 * @property Collection|Synchronization[] $synchronizations
 *
 * @package App\Models
 */
class Channel extends Model
{
	protected $table = 'channel';

	protected $fillable = [
		'channel_name'
	];

	public function channel_useds()
	{
		return $this->hasMany(ChannelUsed::class);
	}

	public function synchronizations()
	{
		return $this->hasMany(Synchronization::class);
	}
}
