<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types\Inline\Query\Result;

use unreal4u\TelegramAPI\Telegram\Types\Inline\Query\Result;

/**
 * Represents a link to a voice recording in an .ogg container encoded with OPUS. By default, this voice recording will
 * be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content
 * instead of the the voice message.
 *
 * Objects defined as-is april 2016
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultvoice
 */
class Voice extends Result
{
    /**
     * Type of the result, must be voice
     * @var string
     */
    public $type = 'voice';

    /**
     * A valid URL for the voice recording
     * @var string
     */
    public $voice_url = '';

    /**
     * Title of the result
     * @var string
     */
    public $title = '';

    /**
     * Optional. Recording duration in seconds
     * @var int
     */
    public $voice_duration = 0;
}
