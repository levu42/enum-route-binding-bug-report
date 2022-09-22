<?php

namespace App;

enum PostTypeEnum: string
{
    case All ='all';
    case Drafts = 'drafts';
    case Published = 'published';
}
