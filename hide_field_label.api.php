<?php

/**
 * @file
 * Hooks for hide_field_label module.
 */

/**
 * Alters Hide Field Label supported widgets.
 *
 * @return array
 *   An array of supported widgets and their value fields.
 */
function hook_hide_field_label_widgets_alter(&$widgets) {
  $widgets['phone_textfield'] = 'value';
}
