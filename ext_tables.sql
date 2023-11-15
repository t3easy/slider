#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    tx_t3easyslider_autoplay tinyint(1) DEFAULT '0' NOT NULL,
    tx_t3easyslider_show_bullets tinyint(1) DEFAULT '0' NOT NULL,
    tx_t3easyslider_label varchar(255) DEFAULT '' NOT NULL,
    tx_t3easyslider_timer_delay mediumint(8) unsigned DEFAULT '0' NOT NULL,
);
