<?php

use App\Helper\LinkIconMapper;
use Illuminate\Database\Migrations\Migration;

class RemoveLinkIcons extends Migration
{
    /** @var array */
    protected $changedLinks = [
        'fab fa-adobe' => null,
        'fab fa-angellist' => null,
        'fab fa-apple' => null,
        'fab fa-digital-ocean' => null,
        'fab fa-discourse' => null,
        'fab fa-drupal' => null,
        'fab fa-ello' => null,
        'fab fa-facebook-f' => 'fab fa-facebook-square',
        'fab fa-figma' => null,
        'fab fa-foursquare' => null,
        'fab fa-hacker-news' => 'fab fa-hacker-news-square',
        'fab fa-hackerrank' => null,
        'fab fa-houzz' => null,
        'fab fa-invision' => null,
        'fab fa-kaggle' => null,
        'fab fa-leanpub' => null,
        'fab fa-osi' => null,
        'fab fa-periscope' => null,
        'fab fa-pinterest' => 'fab fa-pinterest-square',
        'fab fa-playstation' => null,
        'fab fa-python' => null,
        'fab fa-readme' => null,
        'fab fa-reddit' => 'fab fa-reddit-square',
        'fab fa-rocketchat' => null,
        'fab fa-scribd' => null,
        'fab fa-squarespace' => null,
        'fab fa-strava' => null,
        'fab fa-tumblr' => 'fab fa-tumblr-square',
        'fab fa-twitter' => 'fab fa-twitter-square',
        'fab fa-wordpress-simple' => 'fab fa-wordpress',
        'fab fa-xbox' => null,
        'fab fa-xing' => 'fab fa-xing-square',
        'fab fa-yahoo' => null,
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Link::all()->map(function (Link $link) {
            if (array_key_exists($link->icon, $this->changedLinks)) {
                $link->icon = $this->changedLinks[$link->icon] ?: LinkIconMapper::$defaultIcon;
                $link->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
