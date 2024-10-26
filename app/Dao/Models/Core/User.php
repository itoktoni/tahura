<?php

namespace App\Dao\Models\Core;

use App\Dao\Builder\DataBuilder;
use App\Dao\Entities\Core\DefaultEntity;
use App\Dao\Entities\Core\UserEntity;
use App\Dao\Models\Event;
use App\Dao\Repositories\Core\CrudRepository;
use App\Dao\Traits\ActiveTrait;
use App\Dao\Traits\DataTableTrait;
use App\Dao\Traits\OptionTrait;
use App\Facades\Model\RoleModel;
use App\Facades\Model\UserModel;
use App\Notifications\VerifyUserQueue;
use Database\Factories\UserFactory;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as AuthMustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kirschbaum\PowerJoins\PowerJoins;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Sanctum\HasApiTokens;
use MBarlow\Megaphone\HasMegaphone;
use Mehradsadeghi\FilterQueryString\FilterQueryString as FilterQueryString;
use Touhidurabir\ModelSanitize\Sanitizable as Sanitizable;

class User extends Authenticatable implements AuthMustVerifyEmail
{
    use ActiveTrait;
    use CrudRepository;
    use DataTableTrait;
    use DefaultEntity;
    use FilterQueryString;
    use HasApiTokens;
    use HasFactory;
    use HasMegaphone;
    use MustVerifyEmail;
    use Notifiable;
    use OptionTrait;
    use PowerJoins;
    use Sanitizable;
    use Sortable;
    use UserEntity;

    protected $table = 'users';

    // protected $with = ['has_relationship'];

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'username',
        'phone',
        'email',
        'email_verified_at',
        'password',
        'role',
        'level',
        'active',
        'remember_token',
        'created_at',
        'updated_at',
        'vendor',
        'key',
        'first_name',
        'last_name',
        'place_birth',
        'date_birth',
        'address',
        'country',
        'province',
        'city',
        'blood_type',
        'illness',
        'emergency_contact',
        'community',
        'jersey',
        'relationship',
        'reference_id',
        'is_paid',
        'payment_status',
        'amount',
        'is_receive',
        'id_event',
        'gender',
        'discount_value',
        'discount_code',
        'year',
        'total',
        'payment_url',
        'payment_expired',
        'bib',
        'external_id',
        'category',
        'check',
        'fee',
        'confirmation',
    ];

    public $sortable = [
        'name',
        'email',
        'roles.role_name',
    ];

    protected $filters = [
        'filter',
        'start_date',
        'end_date',
        'name',
        'system_role_name',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'payment_expired' => 'datetime',
        'jersey' => 'string',
    ];

    public $timestamps = true;

    public $incrementing = true;

    public static function field_name()
    {
        return 'name';
    }

    public function fieldSearching()
    {
        return $this->field_name();
    }

    protected static function newFactory()
    {
        return UserFactory::new();
    }

    public function fieldDatatable(): array
    {
        return [
            DataBuilder::build(UserModel::field_key())->name('ID')->show(false),
            DataBuilder::build(UserModel::field_name())->name('Name')->sort(),
            DataBuilder::build(UserModel::field_username())->name('Username')->sort(),
            DataBuilder::build(RoleModel::field_name())->name('Role'),
            DataBuilder::build(UserModel::field_email())->show(false)->name('Email'),
            DataBuilder::build(UserModel::field_phone())->name('Phone'),
            DataBuilder::build(UserModel::field_active())->name('Active')->show(false),
        ];
    }

    public function has_role()
    {
        return $this->hasOne(RoleModel::getModel(), RoleModel::field_key(), UserModel::field_role());
    }

    public function has_event()
    {
        return $this->hasOne(Event::class, Event::field_key(), 'id_event');
    }

    public function has_relationship()
    {
        return $this->hasMany(User::class, 'reference_id', User::field_key());
    }

    public function roleNameSortable($query, $direction)
    {
        $query = $this->queryFilter($query);
        $query = $query->orderBy(RoleModel::field_name(), $direction);

        return $query;
    }

    public function dataRepository()
    {
        $query = $this
            ->leftJoinRelationship('has_role')
            ->active()
            ->sortable()
            ->filter();

        return $query;
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyUserQueue);
    }
}
