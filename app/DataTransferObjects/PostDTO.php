<?php
namespace App\DataTransferObjects;

class PostDTO
{
    public string $title;
    public string $author;
    public string $content;

    public function __construct(string $title, string $author, string $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'content' => $this->content,
        ];
    }
}
