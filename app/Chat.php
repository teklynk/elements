<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'chat_scene',
        'chat_channel',
        'chat_scene',
        'chat_channel',
        'chat_bot',
        'chat_title',
        'chat_title_color',
        'chat_title_bg',
        'chat_title_font',
        'chat_title_font_size',
        'chat_username_color',
        'chat_msg_color',
        'chat_use_twitch_colors',
        'chat_msg_twitch_colors',
        'chat_username_font',
        'chat_msg_font',
        'chat_msg_font_size',
        'chat_username_font_size',
        'chat_bg_color',
        'chat_max_cnt',
        'chat_refresh',
        'chat_background_gradient_start',
        'chat_background_gradient_end',
        'chat_transparency',
        'chat_template',
        'chat_transition',
        'chat_show_badges',
        'chat_show_emotes',
        'chat_text_shadow',
        'chat_text_shadow_color',
        'chat_title_text_shadow',
        'chat_title_text_shadow_color',
        'chat_template_gradient_start',
        'chat_template_gradient_end',
        'chat_template_gradient_transparency',
        'chat_template_gradient_position',
        'chat_background_gradient_position',
    ];

    protected $guarded = [
        'user_id',
        'ref_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
