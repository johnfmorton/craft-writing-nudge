<?php

namespace johnfmorton\craftwritingnudge\web\assets\writingnudgeassets;

use Craft;
use craft\web\AssetBundle;

/**
 * Writing Nudge Assets asset bundle
 */
class WritingNudgeAssetsAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';
    public $depends = [];
    public $js = [];
    public $css = [];
}
