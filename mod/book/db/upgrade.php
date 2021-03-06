<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Book module upgrade code
 *
 * @package    mod_book
 * @copyright  2009-2011 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Book module upgrade task
 *
 * @param int $oldversion the version we are upgrading from
 * @return bool always true
 */
function xmldb_book_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    // Moodle v2.8.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2014111800) {

        // Define field navstyle to be added to book.
        $table = new xmldb_table('book');
        $field = new xmldb_field('navstyle', XMLDB_TYPE_INTEGER, '4', null, XMLDB_NOTNULL, null, '1', 'numbering');

        // Conditionally launch add field navstyle.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Book savepoint reached.
        upgrade_mod_savepoint(true, 2014111800, 'book');
    }

    // Moodle v2.9.0 release upgrade line.
    // Put any upgrade step following this.

    // Moodle v3.0.0 release upgrade line.
    // Put any upgrade step following this.

    // Moodle v3.1.0 release upgrade line.
    // Put any upgrade step following this.
    if ($oldversion < 2015111602) {
        /* OUA Custom */
        // Define field useoldbookstyle to be added to book.
        $table = new xmldb_table('book');
        $field = new xmldb_field('useoldbookstyle', XMLDB_TYPE_INTEGER, '2', null, XMLDB_NOTNULL, null, '0', 'customtitles');

        // Conditionally launch add field useoldbookstyle.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }
        $field = new xmldb_field('bookanimationspeed', XMLDB_TYPE_INTEGER, '6', null, XMLDB_NOTNULL, null, '1', 'bookanimationspeed');

        // Conditionally launch add field useoldbookstyle.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }
        // Book savepoint reached.
        upgrade_mod_savepoint(true, 2015111602, 'book');
        /* End OUA Custom */
    }
    return true;
}
