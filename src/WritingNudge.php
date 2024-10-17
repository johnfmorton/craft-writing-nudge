<?php

namespace johnfmorton\craftwritingnudge;

use Craft;
use craft\base\Model;
use craft\base\Plugin;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use johnfmorton\craftwritingnudge\models\Settings;
use johnfmorton\craftwritingnudge\services\WritingNudgeService;
use johnfmorton\craftwritingnudge\widgets\WritingNudgeWidget;
use yii\base\Event;

/**
 * Writing Nudge plugin
 *
 * @method static WritingNudge getInstance()
 * @method Settings getSettings()
 * @author John F Morton <john@johnfmorton.com>
 * @copyright John F Morton
 * @license https://craftcms.github.io/license/ Craft License
 * @property-read WritingNudgeService $writingNudgeService
 */
class WritingNudge extends Plugin
{
    public string $schemaVersion = '1.0.0';
    public bool $hasCpSettings = true;

    public static function config(): array
    {
        return [
            'components' => ['writingNudgeService' => WritingNudgeService::class],
        ];
    }

    public function init(): void
    {
        parent::init();

        $this->attachEventHandlers();

        // Any code that creates an element query or loads Twig should be deferred until
        // after Craft is fully initialized, to avoid conflicts with other plugins/modules
        Craft::$app->onInit(function() {
            // ...
        });
    }

    protected function createSettingsModel(): ?Model
    {
        return Craft::createObject(Settings::class);
    }

    protected function settingsHtml(): ?string
    {
        return Craft::$app->view->renderTemplate('writing-nudge/_settings.twig', [
            'plugin' => $this,
            'settings' => $this->getSettings(),
        ]);
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/5.x/extend/events.html to get started)
        Event::on(Dashboard::class, Dashboard::EVENT_REGISTER_WIDGET_TYPES, function (RegisterComponentTypesEvent $event) {
            $event->types[] = WritingNudgeWidget::class;
        });
    }
}
