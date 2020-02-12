<?php

class Nice
{
    public function values()
    {
        return array_values(get_object_vars($this));
    }
}

function improve(array $array)
{
    return unserialize(sprintf(
        'O:%d:"%s"%s',
        strlen('Nice'),
        'Nice',
        strstr(serialize(array_merge((array)new Nice(), $array)), ':')
    ));
}
