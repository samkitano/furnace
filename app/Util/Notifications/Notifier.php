<?php

namespace App\Util\Notifications;

use App\Util\Icons;

trait Notifier
{
    /**
     * @param string $type
     * @param string $message
     * @param string $icon
     *
     * @return void
     */
    public static function notify(string $type = '', string $message = '', string $icon = '')
    {
        session()->flash('status', ['type' => $type, 'message' => $message, 'icon' => $icon]);
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public static function notifySuccess(string $message)
    {
        static::notify('success', $message, Icons::_ICON_SUCCESS_);
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public static function notifyError(string $message)
    {
        static::notify('danger', $message, Icons::_ICON_ERROR_);
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public static function notifyWarning(string $message)
    {
        static::notify('warning', $message, Icons::_ICON_WARNING_);
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public static function notifyInfo(string $message)
    {
        static::notify('info', $message, Icons::_ICON_INFO_);
    }
}
