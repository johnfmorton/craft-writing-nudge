<?php

namespace johnfmorton\craftwritingnudge\widgets;

use Craft;
use craft\base\Widget;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use yii\base\Exception;

/**
 * Writing Nudge Widget widget type
 */
class WritingNudgeWidget extends Widget
{
    public static function displayName(): string
    {
        return Craft::t('writing-nudge', 'Writing Nudge Widget');
    }

    public static function isSelectable(): bool
    {
        return true;
    }

    public static function icon(): ?string
    {
        return 'chart-line';
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws Exception
     * @throws LoaderError
     */
    public function getBodyHtml(): ?string
    {
        // todo: replace with custom body HTML
        return Craft::$app->getView()->renderTemplate('writing-nudge/widgets/WritingNudgeWidget_body');
    }
}
