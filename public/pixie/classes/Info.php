<?php

class Info
{
    protected string $title;
    protected string $firstText;
    protected string $secondText;

    public function __construct(
        string $title,
        string $firstText,
        string $secondText
    )
    {
        $this->title = $title;
        $this->firstText = $firstText;
        $this->secondText = $secondText;



    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFirstText(): string
    {
        return $this->firstText;
    }

    /**
     * @return string
     */
    public function getSecondText(): string
    {
        return $this->secondText;
    }

}
