<?php

namespace johnfmorton\craftwritingnudge\models;

use Craft;
use craft\base\Model;

/**
 * Writing Nudge Model model
 */
class WritingNudgeModel extends Model
{
    protected function defineRules(): array
    {
        return array_merge(parent::defineRules(), [
            // ...
        ]);
    }
}
