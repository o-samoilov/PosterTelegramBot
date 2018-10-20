<?php

/**
 * @author     School Assistant Developers Team
 * @copyright  2018-2018 School Assistant
 * @license    Any usage is forbidden
 */

namespace App\Telegram\Bot\BotGenerator\Settings;

class Relationship
{
    public const ACTION_OPEN_LAYOUT = 'open_layout';
    public const ACTION_EDIT_LAYOUT = 'edit_layout';

    // ########################################

    /**
     * @var int
     */
    private $layoutId;

    /**
     * @var int
     */
    private $buttonId;

    /**
     * @var string
     */
    private $action;

    /**
     * @var int
     */
    private $anotherId;

    // ########################################

    /**
     * @param int    $layoutId
     * @param int    $buttonId
     * @param string $action
     * @param int    $anotherId
     */
    public function __construct(
        int $layoutId,
        int $buttonId,
        string $action,
        int $anotherId
    ) {
        $this->layoutId  = $layoutId;
        $this->buttonId  = $buttonId;
        $this->action    = $action;
        $this->anotherId = $anotherId;
    }

    // ########################################

    /**
     * @return int
     */
    public function getLayoutId(): int
    {
        return $this->layoutId;
    }

    /**
     * @return int
     */
    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return int
     */
    public function getAnotherId(): int
    {
        return $this->anotherId;
    }

    // ########################################
}