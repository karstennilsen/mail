<?php
/**
 * Created by PhpStorm.
 * User: karsten.nilsen
 * Date: 20-7-2018
 * Time: 12:20
 */

declare(strict_types=1);

namespace Nette\Mail;

use Nette;
use Nette\Utils\Strings;


/**
 * Mail provides functionality to compose and send both text and MIME-compliant multipart email messages.
 *
 * @property   string $subject
 * @property   string $htmlBody
 */
class EmlMessage extends Message
{
    /** @var string */
    protected $emlMessage = '';

    public function setEml(string $eml) {
        $this->emlMessage = $eml;
        return $this;
    }

    public function generateMessage() : string {
        return $this->emlMessage;
    }

}