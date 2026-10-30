<?php
/**
 * Uninstall cleanup for Notice.
 *
 * Runs when the plugin is deleted from wp-admin. Removes the options Notice
 * creates and the per-user dismissal of the PRO banner, which is the one piece
 * of per-user data this plugin writes. There is no per-post data.
 *
 * @package Notice
 */

declare(strict_types=1);

defined('WP_UNINSTALL_PLUGIN') || exit;

/**
 * Remove this plugin's options from the current site.
 */
function notice_uninstall_site(): void
{
    delete_option('notice_settings');
    delete_option('notice_db_version');
}

// Options are per site, so a network uninstall has to visit every site.
if (is_multisite()) {
    foreach (get_sites(['fields' => 'ids', 'number' => 0]) as $notice_site_id) {
        switch_to_blog((int) $notice_site_id);
        notice_uninstall_site();
        restore_current_blog();
    }
    unset($notice_site_id);
} else {
    notice_uninstall_site();
}

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'notice_pro_banner_dismissed', '', true);
