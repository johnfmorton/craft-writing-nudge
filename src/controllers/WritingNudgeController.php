<?php

namespace johnfmorton\craftwritingnudge\controllers;

use Craft;
use craft\web\Controller;
use yii\web\Response;

/**
 * Writing Nudge controller
 */
class WritingNudgeController extends Controller
{
    public $defaultAction = 'index';
    protected array|int|bool $allowAnonymous = self::ALLOW_ANONYMOUS_NEVER;

    /**
     * writing-nudge/writing-nudge action
     */
    public function actionIndex(): Response
    {
        // ...
    }
}
