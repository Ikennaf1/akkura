<?php

function getThemeDefaults()
{
    $themeColor = !empty(settings('r', 'general.theme_color'))
        ? settings('r', 'general.theme_color')
        : '#ea883c';

    $userTitle = !empty(settings('r', 'agent_one.user_title'))
        ? settings('r', 'agent_one.user_title')
        : 'Copywriter';

    $tagLine = !empty(settings('r', 'agent_one.tag_line'))
        ? settings('r', 'agent_one.user_bio')
        : "My amazing blog";

    $userBio = !empty(settings('r', 'agent_one.user_bio'))
        ? settings('r', 'agent_one.user_bio')
        : Auth::user()->name." is a skilled copywriter who crafts compelling stories and persuasive content.
        With an eye for detail and deep understanding of audience motivation, he creates writings that resonate and drive results.
        Let him help you tell your story and elevate your brand's voice.";
    
    $ctaText = !empty(settings('r', 'agent_one.cta_text'))
        ? settings('r', 'agent_one.cta_text')
        : 'Book me';

    return [
        'theme-color' => $themeColor,
        'user-title' => $userTitle,
        'user-bio' => $userBio,
        'tag-line' => $tagLine,
        'cta-text' => $ctaText,
    ];
}

registerWidgetArea('right-sidebar');
