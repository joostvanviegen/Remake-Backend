<?php



namespace App\Models;

use App\Traits\SerializesTimestamps;
use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class MessageGroupMember
 *
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $message_group_id
 * @property int|null $player_id
 * @property MessageGroup $message_group
 * @package App\Models
 * @method static Builder|MessageGroupMember newModelQuery()
 * @method static Builder|MessageGroupMember newQuery()
 * @method static Builder|MessageGroupMember query()
 * @method static Builder|MessageGroupMember whereCreatedAt($value)
 * @method static Builder|MessageGroupMember whereId($value)
 * @method static Builder|MessageGroupMember whereMessageGroupId($value)
 * @method static Builder|MessageGroupMember whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static Builder|MessageGroupMember wherePlayerId($value)
 */
class MessageGroupMember extends Model
{
    use SerializesTimestamps;

    protected $fillable = [
		'message_group_id'
	];

    /**
     * @return BelongsTo
     */
	public function message_group()
	{
		return $this->belongsTo(MessageGroup::class);
	}

    /**
     * @return BelongsTo
     */
	public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
