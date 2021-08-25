<?php
/*
 *	Made by Aberdeener
 *
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr10
 *
 *  License: MIT
 *
 *  Plceholders class
 */

class Placeholders {

    /** @var Placeholders */
    private static $_instance = null;

    /** @var DB */
    private $_db = null;

    private $_all_placeholders;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new Placeholders();
        }

        return self::$_instance;
    }

    public function __construct() {
        $this->_db = DB::getInstance();

        $placeholders_query = $this->_db->get('placeholders_settings', ['name', '<>', ''])->results();
        $placeholders = [];

        foreach ($placeholders_query as $placeholder) {
            $data = new stdClass();

            $sort = $placeholder->leaderboard_sort;

            if (!in_array($sort, ['ASC', 'DESC'])) {
                $sort = 'DESC';
            }

            $data->server_id = $placeholder->server_id;
            $data->name = $placeholder->name;
            $data->safe_name = sha1($placeholder->name);
            $data->friendly_name = isset($placeholder->friendly_name) ? $placeholder->friendly_name : $placeholder->name;
            $data->show_on_profile = $placeholder->show_on_profile;
            $data->show_on_forum = $placeholder->show_on_forum;
            $data->leaderboard = $placeholder->leaderboard;
            $data->leaderboard_title = isset($placeholder->leaderboard_title) ? $placeholder->leaderboard_title : $data->friendly_name;
            $data->leaderboard_sort = $sort;
            $data->leaderboard_settings_url = URL::build('/panel/minecraft/placeholders', 'leaderboard=' . $data->safe_name . '&server_id=' . $data->server_id);
            $placeholders[] = $data;
        }

        $this->_all_placeholders = $placeholders;
    }

    /**
     * Get all registered placeholders.
     * 
     * @return array All placeholders.
     */
    public function getAllPlaceholders() {
        return $this->_all_placeholders;
    }

    /**
     * Get placeholder data by server id and  name of placeholder.
     * 
     * @param int $server_id Server ID to get this placeholder from, if it exists across multiple.
     * @param string $placeholder_name Name of placeholder - must be hashed with sha1.
     * @return object|null This placeholder's data, null if not exist.
     */
    public function getPlaceholder($server_id, $placeholder_name) {
        foreach ($this->_all_placeholders as $placeholder) {
            if ($placeholder->server_id == $server_id && $placeholder->safe_name == $placeholder_name) {
                return $placeholder;
            }
        }

        return null;
    }

    /**
     * Create a new row in nl2_placeholders_settings if a row with the "server_id" of $server_id and "name" of $name does not exist (this lets the same placeholder name be used across multiple NamelessMC plugin servers).
     * 
     * @param int $server_id ID of the server this placeholder resides on
     * @param string $name Name of placeholder
     */
    public function registerPlaceholder($server_id, $name) {
        $this->_db->createQuery("INSERT IGNORE INTO nl2_placeholders_settings (server_id, name) VALUES (?, ?)", [$server_id, $name]);
    }

    /**
     * Load placeholders for a specific user.
     * 
     * @param string $uuid Their valid Minecraft uuid to use for lookup.
     * @return array Their placeholders.
     */
    public function loadUserPlaceholders($uuid) {
        $binUuid = hex2bin(str_replace('-', '', $uuid));

        $placeholder_query = $this->_db->query('SELECT * FROM nl2_users_placeholders up JOIN nl2_placeholders_settings ps ON up.name = ps.name AND up.server_id = ps.server_id WHERE up.uuid = ?', [$binUuid]);

        if (!$placeholder_query->count()) {
            return [];
        }

        $user_placeholders = [];

        $placeholders = $placeholder_query->results();
        foreach ($placeholders as $placeholder) {
            $data = new stdClass();

            $data->server_id = $placeholder->server_id;
            $data->name = Output::getClean($placeholder->name);
            $data->friendly_name = isset($placeholder->friendly_name) ? Output::getClean($placeholder->friendly_name) : Output::getClean($placeholder->name);
            $data->value = Output::getClean($placeholder->value);
            $data->last_updated = $placeholder->last_updated;
            $data->show_on_profile = $placeholder->show_on_profile;
            $data->show_on_forum = $placeholder->show_on_forum;

            $user_placeholders[$data->name] = $data;
        }

        return $user_placeholders;
    }

    /**
     * Get all placeholders which are set to have leaderboards.
     * 
     * @return array Array of placeholders which have leaderboard enabled.
     */
    public function getLeaderboardPlaceholders() {
        return array_filter($this->_all_placeholders, function ($placeholder) {
            return $placeholder->leaderboard;
        });
    }

    /**
     * Get leaderboard data for a specific leaderboard.
     * 
     * @param int $server_id Server ID to get this placeholder from.
     * @param string $placeholder_name Unique name of placeholder to get data for.
     * @return array Array of leaderboard data.
     */
    public function getLeaderboardData($server_id, $placeholder_name) {

        $sort = $this->getPlaceholder($server_id, sha1($placeholder_name))->leaderboard_sort;

        // We have to add 0 to value so mysql converts from the TEXT field to an integer value
        $leaderboard_data = $this->_db->query("SELECT * FROM nl2_users_placeholders WHERE name = ? AND server_id = ? ORDER BY value + 0 {$sort} LIMIT 50", [$placeholder_name, $server_id]);

        if (!$leaderboard_data->count()) {
            return [];
        }

        return $leaderboard_data->results();
    }
}