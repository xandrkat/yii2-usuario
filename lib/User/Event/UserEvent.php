<?php
namespace Da\User\Event;

use Da\User\Model\User;
use yii\base\Event;

class UserEvent extends Event
{
    const EVENT_BEFORE_CREATE = 'beforeCreate';
    const EVENT_AFTER_CREATE = 'afterCreate';
    const EVENT_BEFORE_REGISTER = 'beforeRegister';
    const EVENT_AFTER_REGISTER = 'afterRegister';
    const EVENT_BEFORE_PROFILE_UPDATE = 'beforeProfileUpdate';
    const EVENT_AFTER_PROFILE_UPDATE = 'afterProfileUpdate';
    const EVENT_BEFORE_CONFIRMATION = 'beforeConfirmation';
    const EVENT_AFTER_CONFIRMATION = 'afterConfirmation';

    protected $user;

    public function __construct(User $user, array $config = [])
    {
        $this->user = $user;
        parent::__construct($config);
    }

    public function getUser()
    {
        return $this->user;
    }
}