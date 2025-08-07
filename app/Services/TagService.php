<?php

namespace App\Services;
use App\Models\Tag;
class TagService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createTag(array $data)
    {
        return Tag::firstOrCreate($data);
    }

    public function updateTag(Tag $tag, array $data)
    {
        $tag->update($data);
        return $tag;
    }

    public function deleteTag(Tag $tag)
    {
        return $tag->delete();
    }

    public function getAllTag()
    {
        return Tag::all();
    }

    public function getTagById(int $tagId)
    {
        return Tag::find($tagId);
    }
}
